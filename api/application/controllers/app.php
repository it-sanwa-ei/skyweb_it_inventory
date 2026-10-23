<?php if (!defined('INDEX')) {
    exit('No direct script access allowed');
}

class App extends Main
{
    public function getModules()
    {
        $this->auth->permission();
        $a = load_file('project');

        foreach ($a as $value) {
            if ($value != '.' && $value != '..') {
                // $data['project'][] = $value;
                $b = load_file('project/' . $value);
                if (in_array('controllers', $b)) {
                    $b = load_recursive('project/' . $value . '/controllers');
                    foreach ($b as $value2) {
                        $data[$value][] = substr(basename($value2), 0, -4);
                    }
                } else {
                    $data[$value][] = ' -----  ';
                }

            }
        }
        if (empty($data)) {
            $data[] = '-----';
        }

        $this->render->json($data);
    }

    public function changePassword()
    {
        $this->auth->permission();
        $post_data = $this->render->json_post();
        $user = $this->db->select("users", "*", ["id_user" => id_user]);
        if (password_verify($post_data['passwordOld'], $user[0]['password'])) {
            $data = array(
                "password" => password_hash($post_data['passwordNew'], 1),
            );
            if ($this->db->update("users", $data, ["id_user" => id_user])) {
                $this->set->success_message(true);
            } else {
                $this->set->error_message(true);
            }
        } else {
            $this->set->error_message(true);
        }
    }

    public function getUserInfo()
    {
        $data['idRole'] = id_role;
        $data['idUser'] = id_user;

        $dataUser = $this->db->select("users", [
            "[>]roles" => "id_role",
        ], [
            "users.id_user", "users.id_role", "users.username", "roles.role_name",
        ], [
            "users.id_user" => id_user,
        ]);

        if (count($dataUser) > 0) {
            $data['username'] = $dataUser[0]['username'];
            $data['roleName'] = $dataUser[0]['role_name'];
        }
        $this->render->json($data);
    }

    public function getLocationInfo()
    {
        header('Content-Type: application/json');
        echo file_get_contents("https://ipinfo.io/");
    }

    public function getRotateTextImage()
    {
        $text = "ABCDE";
        $imgWidth = 30;
        $imgHeight = 755;
        $fontSize = "20";
        $rotation = "90";
        $align = "left";

        if (isset($_GET['text'])) {
            $text = $_GET['text'];
        }
        if (isset($_GET['w'])) {
            $imgWidth = $_GET['w'];
        }
        if (isset($_GET['h'])) {
            $imgHeight = $_GET['h'];
        }
        if (isset($_GET['s'])) {
            $fontSize = $_GET['s'];
        }
        if (isset($_GET['align'])) {
            $align = $_GET['align'];
        }
        $imgResource = imagecreatetruecolor($imgWidth, $imgHeight);

        $bgcolor = imagecolorallocate($imgResource, 255, 255, 255);
        imagefilledrectangle($imgResource, 0, 0, $imgWidth, $imgHeight, $bgcolor);
        $textcolor = imagecolorallocate($imgResource, 0, 0, 0);

        $fontPath = dirname(__FILE__) . '/fonts/arial.ttf';
        $fontPath = str_replace("\controllers", "", $fontPath);
        $textCoords = imagettfbbox($fontSize, $rotation, $fontPath, $text);

        $x = $imgWidth / 2 - ($textCoords[4] - $textCoords[0]) / 2;
        $y = $imgHeight;
        if ($align === "center") {
            $y = $imgHeight / 2 - ($textCoords[5] - $textCoords[1]) / 2;
        }
        imagettftext($imgResource, $fontSize, $rotation,
            $x, $y, $textcolor, $fontPath,
            $text);
        ob_start();
        imagejpeg($imgResource);
        $bin = ob_get_clean();
        $base64 = base64_encode($bin);
        $this->render->json(array("base64" => "data:image/jpeg;base64,$base64"));
    }
}
