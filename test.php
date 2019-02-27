<?php
$file = fopen("database.txt","r");
$result = fread($file,filesize("database.txt"));
// $obj = json_decode($result);
// var_dump($obj);
echo $result;
fclose($file);
?>