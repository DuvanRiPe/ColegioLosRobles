<?php
//conexion a la base de datos
$connect = mysqli_connect("127.0.0.1", "root", "", "colegiolosrobles");

if (!$connect) {
    echo "Conexion fallida";
    exit();
};

//condicional

    mysqli_query($connect, "DELETE  FROM preinscripcion WHERE documentonino='$_REQUEST[delete]'") or die ("problemas al eliminar el registro". mysqli_error($connect));

    mysqli_close($connect);

?>
            <div class = "alert alert-danger text-center mt-2">
                <?php echo"Eliminado exitoso";?>
            </div>