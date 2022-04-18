<?php
session_start();

$rol = $_SESSION['codigo_rol'];


if (isset($rol) && $rol == 1){ 
}else{
    header("Location: ../index.php"); 
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

        <main class="container my-5">

            <div class="d-flex justify-content-between">
                <button  class="btn btn-secondary" > <a class= "nav-link text-dark fs-6 fw-bolder m-0 p-0" href="../home.php">Volver atras</a></button>
            </div>
            <!-- Mensaje de exito -->
            <?php                 
            if (isset($_REQUEST["eliminar_modal"])) {
                include "crud_aspirantes/eliminar_aspirante.php";
            }
                ?>


            <table class="table">
                <thead>
                    <tr class="" >
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Comprobante</th>
                        <th>Estado</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>

                <?php
                
                include "../db_connect.php";

                $sql = "SELECT * FROM preinscripcion";
                $result = mysqli_query($connect,$sql);

                while ($datos = mysqli_fetch_array($result)) {
                
                ?>
                    
                <tr>
                    <input type="hidden" id="edad<?php echo $datos['documentonino'];?>" value="<?php echo $datos['edada31dic'];?>">
                    <input type="hidden" id="identi<?php echo $datos['documentonino'];?>" value="<?php echo $datos['documentonino'];?>">
                    <input type="hidden" id="grado<?php echo $datos['documentonino'];?>" value="<?php echo $datos['curso'];?>">
                    <input type="hidden" id="direccion<?php echo $datos['documentonino'];?>" value="<?php echo $datos['direccion'];?>">
                    <input type="hidden" id="telefono<?php echo $datos['documentonino'];?>" value="<?php echo $datos['celularpadre'];?>">
                    <input type="hidden" id="celular<?php echo $datos['documentonino'];?>" value="<?php echo $datos['celularmadre'];?>">
                    <td>
                        <?php echo $datos["codigoAspirante"];?>
                    </td>
                    <td id="nombre<?php echo $datos['documentonino'];?>">
                        <?php echo $datos["nombre"];?>
                    </td>
                    <td id="apellido<?php echo $datos['documentonino'];?>">
                        <?php echo $datos["apellido"];?>
                    </td>
                    <td id="correo<?php echo $datos['documentonino'];?>">
                        <?php echo $datos["correo"];?>
                    </td>
                    <td>
                        <?php echo $datos["comprobante"];?>
                    </td>
                    <td>
                        <select 
                        onchange="guardarEstado(<?php echo $datos['documentonino'];?>)" 
                        class="form-select" 
                        name="estado" 
                        id="estado<?php echo $datos['documentonino'];?>">
                            <option value="<?php echo $datos["estado"];?>"><?php echo $datos["estado"];?></option>
                            <option value="sin revisar">Sin Revisar</option>
                            <option value="no pago">No Pago</option>
                            <option value="pago">Pago</option>
                            <option value="en entrevista">En Entrevista</option>
                            <option value="en examen">En Examen</option>
                            <option value="no aprobado">No Aprobado</option>
                            <option value="aprobado">Aprobado</option>
                        </select>
                    </td>
                    <td>
                        <!-- primer boton actualizar -->
                        <button type="button" class="btn btn-success" onclick="recibirDatos(<?php echo$datos["documentonino"]; ?>)">
                        <i class="fas fa-check"></i>
                        </button>
                        <!-- Segundo boton Vizualziar -->
                        <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#visualizar<?php echo $datos["documentonino"]; ?>">
                        <i class="fas fa-eye"></i>
                        </button>
                        <!-- tercer boton eliminar -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar<?php echo $datos["documentonino"]; ?>">
                        <i class="fas fa-trash-alt"></i>
                        </button>
                    </td>
                </tr>

                <?php
                include "modales_aspirantes/modal_aspirante_visualizar.php";
                include "modales_aspirantes/modal_aspirante_borrar.php";}
                ?>
                </tbody>
            </table>
        </main>


    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>     
    <script src="../js/select_aspirantes.js"></script>       
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/recibir_datos_aspirante.js"></script>
</body>
</html>