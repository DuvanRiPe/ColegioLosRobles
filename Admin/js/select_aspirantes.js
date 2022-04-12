function guardarEstado(x) {
    const select = document.getElementById("estado" + x).value;
    window.location.href = '../aspirantes/crud_aspirantes/actualizar_estado.php' + '?w1=' + select + '&w2='+ x ;
}