<?php

$conexion = new mysqli("localhost", "root", "", "proyecto_citas");
if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
}else{
    echo "Conectado";
}


?>
