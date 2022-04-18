<?php
session_start();

$rol = $_SESSION['codigo_rol'];


if (isset($rol) && $rol == 1){ 
}else{
    header("Location: index.php"); 
} 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

        <!-- header navbar -->
        <?php include_once '../components/header.php'; ?>

        <main class="container">

            <div class="d-flex justify-content-between">
                <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registrar_admin"> Registrar Admin  <i class="fas fa-plus" ></i> </button>

                <div class="d-flex justify-content-between">
                <button  class="btn btn-secondary" > <a class= "nav-link text-dark fs-6 fw-bolder m-0 p-0" href="../home.php">Volver atras</a></button>
            </div>
            </div>
            <!-- Mensaje de exito -->
            <?php                 
            if (isset($_REQUEST["actualizar"])) {
                    include "crud_administradores/actualizar_admin.php";
                } 
            if (isset($_REQUEST["borrar"])) {
                include "crud_administradores/borrar_admin.php";
            }
            if (isset($_REQUEST["registrar"])) {
                include "crud_administradores/registrar_admin.php";
            } 
                ?>


            <table class="table">
                <thead>
                    <tr class="" >
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                
                include "../db_connect.php";

                $sql = "SELECT * FROM admin";
                $result = mysqli_query($connect,$sql);

                while ($datos = mysqli_fetch_array($result)) {
                
                ?>
                    
                <tr>
                    <td>
                        <?php echo $datos["codigo_admin"];?>
                    </td>
                    <td>
                        <?php echo $datos["nombre_admin"];?>
                    </td>
                    <td>
                        <?php echo $datos["usuario_admin"];?>
                    </td>
                    <td>
                        <?php echo $datos["contraseña_admin"];?>
                    </td>
                    <td>
                        <!-- primer boton actualizar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#actualizar_admin<?php echo$datos["codigo_admin"]; ?>">
                        <i class="fas fa-edit"></i>
                        </button>
                        <!-- tercer boton eliminar -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#borrar_admin<?php echo$datos["codigo_admin"]; ?>">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>

                <?php
                include "./modal_admin/modal_actualizar.php";
                include "./modal_admin/modal_borrar.php";}
                include "./modal_admin/modal_registrar.php";
                ?>

                </tbody>
            </table>
        </main>


    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>            
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>