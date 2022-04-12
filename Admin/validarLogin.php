<?php
session_start();
include "db_connect.php";


        $usuario = $_POST['usuario_admin'];
        $contraseña = $_POST['contraseña_admin'];

        $sql = "SELECT * FROM admin WHERE usuario_admin = '$usuario' AND contraseña_admin ='$contraseña' ";

        $result = mysqli_query($connect, $sql);

        if ($row = mysqli_fetch_array($result)) {
            $_SESSION["codigo_rol"] = $row ["codigo_rol"];
            $_SESSION["nombre_admin"] = $row ["nombre_admin"];
            header("Location: home.php");
        }else{
            ?>
            <div class = "alert alert-danger text-center">
                <?php echo "Usuario y/o contraseña incorrectos"?>
            </div>

<?php 
} ?>