<?php

header('Access-Control-Allow-Origin: *', false);
$post = json_decode(file_get_contents('php://input'),true);
print_r("aaa");

?>