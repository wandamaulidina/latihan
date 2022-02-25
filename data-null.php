<?php
$name = "wanda";
$name = null;

$isNull = is_null($name);
var_dump($isNull);

//Mengahapus variable
echo "Menghapus variable : ";
unset($name);
$isset = isset($name);
var_dump($isset);
echo "<br/>";

//Mendefinisikan variable ulang dengan nilai kosong
echo "Mendefinisikan variable ulang dengan nilai kosong : ";
$name = null;
$isset = isset($name);
var_dump($isset);
echo "<br/>";

//Mendefinisikan variable ulang dengan nilai tidak kosong
echo "Mendefinisikan variable ulang dengan nilai tidak kosong : ";
$name = "wanda";
$isset = isset($name);
var_dump($isset);
