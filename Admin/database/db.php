<?php

// conectar una base ded atos con poo php
class ConexionBd{

    public function conectar(){
        $host ="localhost";
        $user ="root";
        $pass ="";
        $db ="colegiolosrobles";

        $connect = mysqli_connect($host, $user, $pass, $db);

        if (!$connect) {
            echo "Conexion fallida";
            exit();
        }
        return $connect;
    }
}

?>