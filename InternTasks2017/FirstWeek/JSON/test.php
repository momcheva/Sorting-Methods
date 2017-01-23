<?php

$data = file_get_contents ("newjson.json");
$json = json_decode($data, true);

var_dump($json);

?>

