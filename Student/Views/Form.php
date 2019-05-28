<?php include("./resources/indexcomponent/header.php") ?>
    <div class="section container">
        <div class="row">
            <form action="prueba.php" method="post" class="col s12">
                <div class="row card-panel">

                    <h3>Registro Estudiante</h3>

                    <div class="input-field col s6">
                        <input type="text" name="primerNombre" id="primerNombre" class="validate" required>
                        <label for="primerNombre">Primer Nombre:</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="segundoNombre" id="segundoNombre">
                        <label for="segundoNombre">Segundo Nombre:</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="validate" required>
                        <label for="apellidoPaterno">Apellido Paterno:</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="apellidoMaterno" id="apellidoMaterno">
                        <label for="apellidoMaterno">Apellido Materno:</label>
                    </div>

                    <div class="input-field col s3">
                        <input type="text" name="fechaNacimiento" placeholder="Fecha de Nacimiento"
                               id="calcularNacimiento" class="datepicker">
                    </div>
                    <!--                Para que muestre la edad-->
                    <div class="input-field col s3" id="dibujarEdad">
                        <!--                    <input disabled type="text">-->
                    </div>

                    <div class="input-field col s5" id="opcionMenorEdad" hidden>
                        <select name="opcion" id="valorSelect">
                            <!--                        <option value="" disabled selected>Opcion</option>-->
                            <option value="No" selected>No</option>
                            <option value="Si">Si</option>
                        </select>
                        <label style="font-size: 14px;">ci Estudiante (opcional para menor de edad)</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="ci" id="ci" class="validate desabilitar" required>
                        <label for="ci">CI:</label>
                    </div>

                    <div class="file-field input-field col s6">
                        <div class="btn desabilitar">
                            <span>Archivo</span>
                            <input type="file" class="desabilitar">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate desabilitar" type="text" name="ciAnverso"
                                   placeholder="imagen CI Anverso:" required>
                        </div>
                    </div>

                    <div class="file-field input-field col s6">
                        <div class="btn desabilitar">
                            <span>Archivo</span>
                            <input type="file" class="desabilitar">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate desabilitar" type="text" name="ciReverso"
                                   placeholder="imagen CI Reverso:" required>
                        </div>
                    </div>

                    <div class="file-field input-field col s6">
                        <div class="btn">
                            <span>Archivo</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" name="fotografia" placeholder="Fotagrafia"
                                   required>
                        </div>
                    </div>

                    <p class="col s12">
                        El estudiante esta: &nbsp;&nbsp;&nbsp;
                        <label>
                            <input class="with-gap" name="activo" type="radio" value="activo" checked/>
                            <span>Activo</span>
                        </label>
                        &nbsp;
                        <label>
                            <input class="with-gap" name="activo" type="radio" value="inactivo"/>
                            <span>Inactivo</span>
                        </label>
                    </p>
                    <!--                DESDE AQUI EMPIZA FORMULARIO TUTOR-->
                    <div class="col s12">
                        <h3>Tutor</h3>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="primerNombreTutor" id="primerNombreTutor" class="validate" required>
                        <label for="primerNombreTutor">Primer Nombre:</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="segundoNombreTutor" id="segundoNombreTutor">
                        <label for="segundoNombreTutor">Segundo Nombre:</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="apellidoPaternoTutor" id="apellidoPaternoTutor" class="validate"
                               required>
                        <label for="apellidoPaternoTutor">Apellido Paterno:</label>
                    </div>

                    <div class="input-field col s6">
                        <input type="text" name="apellidoMaternoTutor" id="apellidoMaternoTutor">
                        <label for="apellidoMaternoTutor">Apellido Materno:</label>
                    </div>

                    <div class="input-field col s3">
                        <select name="tipoTutor">
                            <option value="1" disabled selected>tipo tutor</option>
                            <option value="2">abuelo</option>
                            <option value="3">padre</option>
                        </select>
                    </div>

                    <div class="input-field col s9">
                        <input type="text" name="direccionTutor" id="direccionTutor">
                        <label for="direccionTutor">Direccion del Tutor:</label>
                    </div>

                    <div class="input-field col s4">
                        <input type="text" name="numeroCelular" id="numeroCelular">
                        <label for="numeroCelular">Numero Celular:</label>
                    </div>

                    <div class="file-field input-field col s8">
                        <div class="btn">
                            <span>Archivo</span>
                            <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text" placeholder="Fotografia">
                        </div>
                    </div>

                    <div class="col s3">
                        <button class="btn" type="submit" style="width: 150px; height: 40px;">Enviar</button>
                    </div>

                </div> <!--End row card panel-->

            </form>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll(".datepicker");
            var instancer = M.Datepicker.init(elems, {
                format: 'yyyy-mm-dd',
                i18n: {
                    months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio',
                        'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                    weekdaysShort: ['Dom', 'Lun', 'Mar', 'Mier', 'Jue', 'Vier', 'Sab'],
                    weekdaysAbbrev: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
                    monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Agost', 'Sep', 'Oct', 'Nov', 'Dic']
                }
            });

        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>
    <script src="../Student/Views/js/app.js"></script>
    <script src="../Student/Views/js/manejoSelect.js"></script>

<?php include("./resources/indexcomponent/footer.php") ?>