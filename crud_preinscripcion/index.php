<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Inscripción Apirantes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container p-5">
        <div class="row">
            <div class="col">
                <img src="../img/escudolosrobles.svg" class="img-fluid" alt="">
            </div>

            <div class="col">
            <div><h1>Modulo de Inscripción de aspirantes</h1></div>
        </div>
        </div>    
        <form action="index.php" method="post" id="formulario_inscripcion">
            <fieldset>
                
                <!-- Mensaje de exito -->
                <?php                 
                if (isset($_REQUEST["enviar"])) {
                        include "./preinscripcion.php";
                    } 
                    ?>

               
                <!-- inicio de las cards -->

                <div class="card">
                    <div class="card-header">
                        <legend>Formulario de Inscripción</legend>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <label for="correo">Ingrese su correo electronico
                            <input type="text" id="correo   " name="correo" placeholder="Correo" required>
                            </label>
                            <br>
                            <br>
                            <label for="comprobante"Adjunte el comprobante de pago>
                            <input type="file" id="comprobante" name="comprobante" required>
                            </label>
                            <br>
                            <br>
                            <label for="ano_academico">Año academico
                            <input type="checkbox" id="ano_academico" name="ano_academico" value="2022" required>2022
                            </label>
                            <br>
                            <br>
                            <label for="curso">Curso al que aspira
                            <select name="curso" id="curso" required>
                                <option value="">Seleccione</option>
                                <option value="parvulo">Párvulo</option>
                                <option value="prejardin">Pre-jardín</option>
                                <option value="jardin">Jardín</option>
                                <option value="transicion">Transición</option>
                                <option value="primero">1° Primero</option>
                                <option value="segundo">2° Segundo</option>
                                <option value="tercero">3° tercero</option>
                            </select>
                            </label>
                      </blockquote>
                    </div>
                  </div>
                
                  <br>
                 <!-- formulario del niño -->

                <div class="card">
                    <div class="card-header">
                        <h3>Datos del niño</h3>
                    </div>
                    <div class="card-body">
                    <blockquote class="blockquote mb-0">
                            <br>
                            <label for="nombre">Nombre: 
                                <input class="form-control" type="text" id="nombre" name="nombre" placeholder="Nombre del niño" required>
                            </label>
                          
                            <label for="apellido">Apellido:
                                <input class="form-control" type="text" id="apellido" name="apellido" placeholder="Apellido del niño" required>
                            </label>    
                            
                            <label for="tipoidentificacion">Tipo de Identificación:
                            <select class="form-control" name="tipoidentificacion" id="tipoidentificacion" required>
                                <option value="">Seleccione</option>
                                <option value="registrocivil">Registro Civil</option>
                                <option value="tarjetaidentidad">Tarjeta de Identidad</option>
                            </select>
                            </label>
                            <br>
                            <br>
                            <label for="documentonino">Numero de Documento:
                                <input class="form-control" type="text" id="documentonino" name="documentonino" placeholder="Documento del niño" required>
                            </label>

                            <label for="nacimientonino">Fecha de Nacimiento:
                                <input class="form-control" type="date" id="nacimientonino" name="nacimientonino" placeholder="Fecha de nacimuneto del niño" required>
                            </label> 

                            <label for="doctrina">Doctrina Religiosa:
                            <select class="form-control" name="doctrina" id="doctrina" required>
                                <option value="">Seleccione</option>
                                <option value="cristianoevangelico">Cristiano-Evangelico</option>
                                <option value="catolico">Católico</option>
                                <option value="testigjehova">Testigo de Jehová</option>
                                <option value="mormon">Mormón</option>
                                <option value="otro">Otro</option>
                            </select> 
                            </label>    
                            <br>
                            <br>
                            <label for="vivecon">Vive con:
                            <select class="form-control" name="vivecon" id="vivecon" required>
                                <option value="">Seleccione</option>
                                <option value="ambospapas">Ambos Padres</option>
                                <option value="padre">Padre</option>
                                <option value="madre">Madre</option>
                                <option value="acudiente">Acudiente</option>
                            </select>
                            </label>

                            <label for="edada31dic">Edad al 31 de Diciembre
                                <p>Ejemplo: 5 años y 3 Meses</p>
                                <input class="form-control" type="text" id="edada31dic" name="edada31dic" required>
                            </label>

                            <label for="direccion">Direccion de Residencia: 
                                <input class="form-control" type="text" id="direccion" name="direccion" placeholder="Dirección de residencia" required>
                            </label>    
                            <br>
                            <br>
                            <label for="barrio">Barrio:
                                <input class="form-control" type="text" id="barrio" name="barrio" placeholder="Barrio de residencia " required>
                            </label>    
                            <br>
                            <br>
                            <label for="sistemasalud">EPS/Sisben/Prepagada:</label>
                                <input class="form-control" type="sistemasalud" id="sistemasalud" name="sistemasalud" placeholder="EPS" required>
                            <br>
                            <br>
                            <label for="en_tratamiento">El/la niñ@ se encuentra en tratamiento psicologico: </label>   
                                <select class="form-control" name="en_tratamiento" id="en_tratamiento" required>
                                    <option value="">Seleccione</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                            <br>
                            <br>
                            <label for="descripcion_tratamiento">Describa cúal: 
                                <textarea class="form-control" name="descripcion_tratamiento" id="descripcion_tratamiento" placeholder="Descripción" cols="30" rows="10" required></textarea>
                            </label>
                    </blockquote>
                    </div>
                </div>

                    
                <br>
                <!-- formulario de la madre -->

                <div class="card">
                    <div class="card-header">
                        <h3>Información de la madre</h3>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <label for="nombremadre">Nombre madre
                            <input type="text" id="nombremadre" name="nombremadre" placeholder="Nombre de la madre" required>
                        </label>
                        <br>
                        <br>
                        <label for="apellidomadre">Apellido madre
                            <input type="text" id="apellidomadre" name="apellidomadre" placeholder="Apellido de la madre" required>
                        </label>
                        <br>
                        <br>
                        <label for="nacimientomadre">Fecha de nacimiento madre
                            <input type="date" id="nacimientomadre" name="nacimientomadre" placeholder="fecha de nacimiento de la madre" required>
                        </label>
                        <br>
                        <br>
                        <label for="documentomadre">Numero de documento madre
                            <input type="text" id="documentomadre" name="documentomadre" placeholder="Documento de la madre" required>
                        </label>
                        <br>
                        <br>
                        <label for="celularmadre">Celular de la madre
                            <input type="text" id="celularmadre" name="celularmadre" placeholder="Celular de la madre" required>
                        </label>
                        <br>
                        <br>
                        <label for="correomadre">Correo de la madre
                            <input type="text" id="correomadre" name="correomadre" placeholder="Correo electronico" required>
                        </label>
                        <br>
                        <br>
                        <label for="empresamadre">Empresa donde labora
                            <input type="text" id="empresamadre" name="empresamadre" placeholder="Empresa en la que labora" required>
                        </label>
                        <br>
                        <br>
                        <label for="telempresamadre">Telefono de la empresa
                            <input type="text" id="telempresamadre" name="telempresamadre" placeholder="Telefono de la Empresa" required>
                        </label> 
                        <br>
                        <br>
                        <label for="estudiomadre">Ultimo estudio alcanzado
                            <select name="estudiomadre" id="estudiomadre" required>
                                <option value="">Seleccione</option>
                                <option value="bachiller">Bachiller</option>
                                <option value="tecnico">Técnico</option>
                                <option value="tecnologo">Técnologo</option>
                                <option value="profesional">profesional</option>
                            </select>
                        </label>
                      </blockquote>
                    </div>
                  </div>
                
                <br>

                <div class="card">
                    <div class="card-header">
                        <h3>Información del padre</h3>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <label for="nombrepadre">Nombres del padre
                            <input type="text" id="nombrepadre" name="nombrepadre" placeholder="Nombre del padre" required>
                        </label>
                        <br>
                        <br>
                        <label for="apellidopadre">Apellido padre
                            <input type="text" id="apellidopadre" name="apellidopadre" placeholder="Apellido del padre" required>
                        </label>
                        <br>
                        <br>
                        <label for="nacimientompadre">Fecha de nacimiento padre
                            <input type="date" id="nacimientompadre" name="nacimientompadre" placeholder="Fecha de nacimiento del padre" required>
                        </label>
                        <br>
                        <br>
                        <label for="documentopadre">Numero de documento padre
                            <input type="text" id="documentopadre" name="documentopadre"  placeholder="Numero de documento" required>
                        </label>
                        <br>
                        <br>
                        <label for="celularpadre">Celular del padre
                            <input type="text" id="celularpadre" name="celularpadre" placeholder="Numero de celular del padre" required>
                        </label>
                        <br>
                        <br>
                        <label for="correopadre">Correo del padre
                            <input type="text" id="correopadre" name="correopadre" placeholder="Correo electronico" required>
                        </label>
                        <br>
                        <br>
                        <label for="empresapadre">Empresa donde labora
                            <input type="text" id="empresapadre" name="empresapadre" placeholder="Empresa en la que labora" required>
                        </label>
                        <br>
                        <br>
                        <label for="telempresapadre">Telefono de la empresa
                            <input type="text" id="telempresapadre" name="telempresapadre" placeholder="Telefono de la empresa" required>
                        </label>
                        <br>
                        <br>
                        <label for="estudiopadre">Ultimo estudio alcanzado
                            <select name="estudiopadre" id="estudiopadre" required>
                                <option value="">Seleccione</option>
                                <option value="bachiller">Bachiller</option>
                                <option value="tecnico">Técnico</option>
                                <option value="tecnologo">Técnologo</option>
                                <option value="profesional">profesional</option>
                            </select>
                        </label>
                      </blockquote>
                    </div>
                  </div>

                
                <br>
                
                <div class="card">
                    <div class="card-header">
                        <h3>Información del Acudiente</h3>
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <label for="nombreacudiente">Nombre completo    
                            <input type="text" id="nombreacudiente" name="nombreacudiente" placeholder="Nombre del acudiente" required>
                        </label>
                        <br>
                        <br>
                        <label for="documentoacudiente">Numero de documento del acudiente
                            <input type="text" id="documentoacudiente" name="documentoacudiente" placeholder="Numero de documento" required>
                        </label>
                        <br>
                        <br>
                        <label for="celularacudiente">Celular del acudiente
                            <input type="text" id="celularacudiente" name="celularacudiente" placeholder="Celular del acuediente" required>
                        </label>
                        <br>
                        <br>
                        <label for="diracudiente">Dirección del acudiente
                            <input type="text" id="diracudiente" name="diracudiente" placeholder="Dirección del aciediente" required>
                        </label>
                        <br>
                        <br>
                        <label for="correoacudiente">Correo del Acudiente
                            <input type="text" id="correoacudiente" name="correoacudiente" placeholder="Correo del acudiente" required>
                        </label>
                      </blockquote>
                    </div>
                  </div>
                
                <br>
            
                </fieldset>
            <input class="btn btn-dark" type="reset">
            <input class="btn btn-success" type="submit" name="enviar">
            </form> 
            <br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
    </html>
    