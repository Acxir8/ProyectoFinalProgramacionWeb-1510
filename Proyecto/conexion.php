<?php
$host_db = "sql110.infinityfree.com";
$user_db = "if0_35519962";
$pass_db = "XauVkYtwf037f";
$db_name = "if0_35519962_proyecto";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló jiji: " . $conexion->connect_error);
}
?>