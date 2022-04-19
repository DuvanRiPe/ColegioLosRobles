<?php

session_start();

if (!isset($_SESSION['codigo_rol'])) {
    session_destroy();      
} else if ($_SESSION['codigo_rol'] == 1 ) {
    header("Location: home.php");
}



?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    
    <div class="p-5">
        <div class="card row " style="width: 30rem; margin: auto auto">
            <div class="d-flex align-items-center justify-content-center">
                <img src="img/Logo.png" class="card-img-top img1" alt="...">    
            </div>
            <div class="card-body">
                <form action="index.php" method="post" >

                    <h1 class="text-center p-3 ">Login Admin</h1>
                    <?php
                        if (isset($_REQUEST['btninicio'])) {
                            include "validarLogin.php";
                        }
                        ?>
                    <div class="">
                        <label for="usuario_admin" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" name="usuario_admin" id="usuario_admin" aria-describedby="emailHelp">
                    </div>

                    <div class="">
                        <label for="contraseña_admin" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" name="contraseña_admin" id="contraseña_admin">
                    </div>
                        <br>    
                    <div class="text-center">
                        <button name="btninicio" type="submit" class="btn btn-primary">Iniciar Sesion</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
