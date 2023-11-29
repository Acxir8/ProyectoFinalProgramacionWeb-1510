<?php
$host_db = "localhost:3306";
$user_db = "root";
$pass_db = "Enri.red2003";
$db_name = "asistencia";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló jiji: " . $conexion->connect_error);
}
?>