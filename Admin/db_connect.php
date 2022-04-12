<?php

$connect = mysqli_connect("127.0.0.1", "root", "", "colegiolosrobles");

if (!$connect) {
    echo "Conexion fallida";
    exit();
}
?>