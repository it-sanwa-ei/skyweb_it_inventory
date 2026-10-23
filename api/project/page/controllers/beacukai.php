<?php if (!defined('INDEX')) {
    exit('No direct script access allowed');
}

class beacukai extends Controller
{

    public function getExcelRows()
    {
        $result = array('data' => []);
        if ($xlsx = SimpleXLSX::parse('application/db/beacukai.xlsx')) {
            $data = $xlsx->rows();
            $columns = $data[1];
            foreach ($data as $index => $row) {
                if ($index > 1) {
                    $n_row = array();
                    foreach ($row as $index => $column) {
                        if ($index === 0) {
                            $n_row['NoUrut'] = $column;
                        }
                        if ($index > 0) {
                            $n_row[$columns[$index]] = $column;
                        }
                    }
                    $result['data'][] = $n_row;
                }
            }
        }
        $this->render->json($result);
    }

    public function syncExcelRows()
    {
        if ($xlsx = SimpleXLSX::parse('application/db/beacukai.xlsx')) {
            $this->db->delete("tabel_beacukai", [
                "NoUrut[!]" => "0",
            ]);
            $data = $xlsx->rows();
            $columns = $data[1];
            foreach ($data as $index => $row) {
                if ($index > 1) {
                    $n_row = array();
                    foreach ($row as $index => $column) {
                        if ($index === 0) {
                            $n_row['NoUrut'] = $column;
                        }
                        if ($index > 0) {
                            $n_row[$columns[$index]] = $column;
                        }
                    }
                    $result['data'][] = $n_row;
                    $this->db->insert("tabel_beacukai", $n_row);
                }
            }
        }
        $this->set->success_message(true);
    }

    public function saveSetting()
    {
        $post_data = $this->render->json_post();
        if (isset($post_data['data'])) {
            $data = $post_data['data'];
            $id = "pabean";
            if (isset($post_data['id'])) {
                $id = $post_data['id'];
            }
            $this->db->delete("tabel_setting", array("no_kolom[!]" => '-1', "jenis" => $id));
            if ($this->db->insert("tabel_setting", $data)) {
                $columns = array();
                $table = "tabel_dokumen_pabean";
                switch ($id) {
                    case "mutasi":$table = "tabel_mutasi_bulanan";
                        break;
                    case "wip":$table = "tabel_wip";
                        break;
                    default:$table = "tabel_dokumen_pabean";
                }
                $table_view = array(
                    "title" => "",
                    "primary_key" => "id",
                    "query" => array(
                        "table" => $table,
                        "column" => "*",
                    ),
                );
                foreach ($data as $row) {
                    $col = array(
                        "text" => $row['keterangan'],
                        "value" => $row['nama_field'],
                        "sortable" => false,
                        "align" => $row['alignment'],
                        "width" => $row['lebar'],
                        "width_print" => $row['lebar_print'],
                    );
                    $is_exist_type_date = strpos($row['nama_field'], 'date');
                    if ($row['nama_field'] === 'tgl_doc' || $is_exist_type_date !== false) {
                        $col['type'] = 'date';
                        $col['options'] = array(
                            "format" => "DD/MM/YYYY",
                        );
                    };
                    $is_exist_type_number = strpos($row['nama_field'], 'number');
                    if ($is_exist_type_number !== false) {
                        $col['type'] = 'currency';
                    };
                    $columns[] = $col;
                };
                $table_view["columns"] = $columns;

                $json_data = json_encode($table_view);
                file_put_contents("project/base/config/table-view/$id.json", $json_data);
                $this->set->success_message(true);
            };
        }
        $this->set->error_message(true, $this->db->log());
    }

    public function saveSettingPrint()
    {
        $post_data = $this->render->json_post();
        if (isset($post_data['data'])) {
            $data = $post_data['data'];

            foreach ($data as $row) {
                if ($this->db->has("tabel_setting_print", array("name" => $row["name"]))) {
                    $this->db->update("tabel_setting_print", array("value" => $row['value']), array("name" => $row["name"]));
                } else {
                    $this->db->insert("tabel_setting_print", array("name" => $row['name'], "value" => $row['value']));
                }
            }
        }
        $this->set->success_message(true, $this->db->log());
    }
}
