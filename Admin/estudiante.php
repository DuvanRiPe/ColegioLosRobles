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
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>

        <!-- header navbar -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <img src="img/logo.png" width="100" alt="">
            
                <div class="card float-rigth " style="width: 10rem;">
                    <div class="card-body text-center" >
                        <h5 class="card-title"><?=$_SESSION['nombre_admin']?></h5>
                        <a href="logout.php" class="btn btn-dark">Cerrar Sesion</a>
                    </div>
                </div>
            </div>
            </nav>
        </header>

        <main class="container">

            <div class="d-flex justify-content-between">
                <button  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#estudiante_r"> Registrar Estudiante  <i class="fas fa-plus" ></i> </button>

                <button  class="btn btn-secondary" > <a class= "nav-link text-dark fs-6 fw-bolder m-0 p-0" href="home.php">Volver atras</a></button>
            </div>
            <!-- Mensaje de exito -->
            <?php                 
            if (isset($_REQUEST["actualizar"])) {
                    include "actualizar.php";
                } 
            if (isset($_REQUEST["borrar"])) {
                include "borrar.php";
            }
            if (isset($_REQUEST["registrar"])) {
                include "registro.php";
            } 
                ?>


            <table class="table">
                <thead>
                    <tr class="" >
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Numero Identificacion</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                
                include "db_connect.php";

                $sql = "SELECT * FROM estudiante";
                $result = mysqli_query($connect,$sql);

                while ($datos = mysqli_fetch_array($result)) {
                
                ?>
                    
                <tr>
                    <td>
                        <?php echo $datos["codigo_estudiante"];?>
                    </td>
                    <td>
                        <?php echo $datos["nombre_estudiante"];?>
                    </td>
                    <td>
                        <?php echo $datos["apellido_estudiante"];?>
                    </td>
                    <td>
                        <?php echo $datos["edad"];?>
                    </td>
                    <td>
                        <?php echo $datos["identifiacion_estudiante"];?>
                    </td>
                    <td>
                        <!-- primer boton actualizar -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#estudiante_a<?php echo$datos["identifiacion_estudiante"]; ?>">
                        <i class="fas fa-edit"></i>
                        </button>
                        <!-- Segundo boton Vizualziar -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#estudiante_v<?php echo$datos["identifiacion_estudiante"]; ?>">
                        <i class="fas fa-eye"></i>
                        </button>
                        <!-- tercer boton eliminar -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#estudiante_B<?php echo$datos["identifiacion_estudiante"]; ?>">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>

                <?php
                include "modal_estudiante_visualizar.php";
                include "modal_estudiante_actualizar.php";
                include "modal_estudiante_borrar.php";}
                include "modal_estudiante_registrar.php";
                ?>

                </tbody>
            </table>
        </main>


    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>            
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>