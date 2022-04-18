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
    <title>Home|Admin</title>
</head>
<body>
    
        <!-- logo del colegio y tarjeta de admin con cerrar sesion -->
        <?php include_once 'components/header.php'; ?>
        <!-- cuerpo de la pagina tarjetas main  -->
        <main class="" >
            <div class="row ">
                <!-- primera tarjeta -->
                <?php
                    include "db_connect.php";
                    $contador = 0;
                    $fila = mysqli_query($connect, "SELECT * FROM preinscripcion");
                    while ($filas=mysqli_fetch_array($fila)){
                        $contador = $contador + 1;
                    }
                ?>

                <div class="d-flex align-items-center justify-content-center ">

                        <div class="card position-relative col  d-flex align-items-center justify-content-center m-5" style="width: 8rem;">
                            <?php
                            if ($contador > 0 ) { ?>
                                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                <?php
                                    echo $contador;
                                ?>
                                <span class="visually-hidden">unread messages</span>
                            </span>    
                            <?php } ?>
                        
                            <img src="img/719726.png" class="card-img-top" alt="icono estudiante">
                            <div class="card-body text-center justify-content-center">
                                <h5 class="card-title my-2">Aspirantes</h5>
                                <a href="aspirantes/aspirante.php" class="btn btn-primary mt-2 m-2">Ingresar</a>

                            </div>
                        </div>
                        <!-- segunda tarjeta -->
                        <div class="card col d-flex align-items-center justify-content-center m-5" style="width: 8rem;">

                                <img src="img/estudiante-icono.png" class="card-img-top" alt="icono estudiante">
                                <div class="card-body text-center justify-content-center">
                                    <h5 class="card-title my-2">Estudiantes</h5>
                                    <a href="estudiante.php" class="btn btn-primary mt-2 m-2">Ingresar</a>

                            </div>
                        </div>
                        <!-- tercera tarjeta -->
                        <div class="card col d-flex align-items-center justify-content-center m-5" style="width: 8rem;">
    
                            <img src="img/320333.png" class="card-img-top" alt="icono estudiante">
                            <div class="card-body text-center justify-content-center">
                                <h5 class="card-title my-2">Profesor</h5> 
                                <a href="profesor.php" class="btn btn-primary mt-2 m-2">Ingresar</a>

                            </div>
                        </div>

                        <div class="card col d-flex align-items-center justify-content-center m-5" style="width: 8rem;">
    
                            <img src="img/OTROS.png" class="card-img-top" alt="icono estudiante">
                            <div class="card-body text-center justify-content-center">
                                <h5 class="card-title my-2">Administradores</h5> 
                                <a href="./administradores/administradores.php" class="btn btn-primary mt-2 m-2">Ingresar</a>

                            </div>
                        </div>

                    </div>

            </div>
        </main>


        

    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>

