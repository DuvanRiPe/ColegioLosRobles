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
    <title>Login</title>
</head>
<body>
    
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
        <form action="index.php" method="post" class="border shadow p-3 rounded" style="width: 450px;" >

            <h1 class="text-center p-3 "  >Login Admin</h1>
            <?php
                if (isset($_REQUEST['btninicio'])) {
                    include "validarLogin.php";
                }
                ?>
            <div class="mb-3">
                <label for="usuario_admin" class="form-label">Nombre de Usuario</label>
                <input type="text" class="form-control" name="usuario_admin" id="usuario_admin" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="contraseña_admin" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña_admin" id="contraseña_admin">
            </div>
            
            <button name="btninicio" type="submit" class="btn btn-primary">Iniciar Sesion</button>

        </form>
    </div>


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
