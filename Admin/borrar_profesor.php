<?php
//conexion a la base de datos
include "db_connect.php";

//condicional

    mysqli_query($connect, "DELETE  FROM profesor WHERE identificacion_profesor='$_REQUEST[delete]'") or die ("problemas al eliminar el registro". mysqli_error($connect));

    mysqli_close($connect);

?>
            <div class = "alert alert-danger text-center mt-2">
                <?php echo"Eliminado exitoso";?>
            </div>