<?php

    $estado = $_GET['w1'];
    $documento= $_GET['w2'];
    
    $connect = mysqli_connect("127.0.0.1", "root", "", "colegiolosrobles");

    if (!$connect) {
        echo "Conexion fallida";
        exit();
    }

    mysqli_query($connect,"UPDATE preinscripcion SET estado = '$estado' WHERE documentonino = '$documento'  ") or die ("Problemas en la conexion con la tabla". mysqli_error($connect));

    header("Location: ../aspirante.php");

?>