<?php
 
$root = $_SERVER['DOCUMENT_ROOT'];
$path = str_replace('\\', '/', getcwd());
$base_path = str_replace($root, '', $path)."/";

$root = $_SERVER['DOCUMENT_ROOT'];
$path = str_replace('\\', '/', getcwd());
$base_path = str_replace($root, '', $path)."/";

 ?>
 <!DOCTYPE html><html><head><base href="<?php echo $base_path; ?>"/><meta charset=utf-8><title>IT Inventory</title><meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=0"><link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel=stylesheet><link rel=stylesheet href=https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css><link href=./static/css/app.ab992ac21b555a161b3682289aec7100.css rel=stylesheet></head><body><script>window.PUBLIC_PATH = "<?php echo $base_path; ?>";</script><div id=app></div><script type=text/javascript src=./static/js/manifest.159e0134e0d6254c7100.js></script><script type=text/javascript src=./static/js/vendor.ff3556efe56884bad190.js></script><script type=text/javascript src=./static/js/app.26d0a3badae3283ac140.js></script></body></html>