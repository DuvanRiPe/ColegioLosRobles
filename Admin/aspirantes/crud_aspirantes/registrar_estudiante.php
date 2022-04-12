<?php

//conexion a la base de datos
    $connect = mysqli_connect("127.0.0.1", "root", "", "colegiolosrobles");

    if (!$connect) {
        echo "Conexion fallida";
        exit();
    };
    $nombre = $_GET['w1'];
    $apellido = $_GET['w2'];
    $edad = $_GET['w3'];
    $identi = $_GET['w4'];
    $correo = $_GET['w5'];
    $grado = $_GET['w6'];
    $direccion = $_GET['w7'];
    $telefono = $_GET['w8'];
    $celular = $_GET['w9'];

    mysqli_query($connect, "INSERT INTO estudiante (nombre_estudiante, apellido_estudiante, edad, identifiacion_estudiante, correo_personal_estudiante, grado, direccion_estudiante, telefono_estudiante, celular_estudiante) VALUES ('$nombre','$apellido', '$edad' , '$identi','$correo','$grado', '$direccion', '$telefono', '$celular')") or die ("Problemas con la conexion de tablas". mysqli_error($connect));

    mysqli_query($connect, "DELETE  FROM preinscripcion WHERE documentonino = '$identi' ") or die ("problemas al eliminar el registro". mysqli_error($connect));

    mysqli_close($connect);

    header('location: ../aspirante.php');
?>