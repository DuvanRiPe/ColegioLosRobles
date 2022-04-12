function recibirDatos(x) {
    const nombre = document.getElementById("nombre" + x).innerHTML;
    const apellido = document.getElementById("apellido" + x).innerHTML;
    const edad = document.getElementById("edad" + x).value;
    const identi = document.getElementById("identi" + x).value;
    const correo = document.getElementById("correo" + x).innerHTML;
    const grado = document.getElementById("grado" + x).value;
    const direccion = document.getElementById("direccion" + x).value;
    const telefono = document.getElementById("telefono" + x).value;
    const celular = document.getElementById("celular" + x).value;

    window.location.href = '../aspirantes/crud_aspirantes/registrar_estudiante.php' + '?w1=' + nombre + '&w2='+ apellido + '&w3='+ edad + '&w4='+ identi + '&w5='+ correo + '&w6='+ grado + '&w7='+ direccion + '&w8='+ telefono + '&w9='+ celular;
}