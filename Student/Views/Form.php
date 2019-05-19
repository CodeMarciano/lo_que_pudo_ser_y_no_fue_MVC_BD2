<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Student</h2>
        </div>

        <div class="card-body">
            <!-- TEMP -->
            <form action = "<?= Config::webRoot ?>/student/store" method="POST">

                <div class="form-group">
                    <label for="ciEstudiante">Ci Student </label><br>
                    <input type="text" name="ciEstudiante" id="ciEstudiante" class="form-control">
                </div>

                <div class="form-group">
                    <label for="primerNombre">First Name</label><br>
                    <input type="text" name="primerNombre" id="primerNombre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="segundoNombre">Last Name</label><br>
                    <input type="ciUsuario" name="segundoNombre" id="segundoNombre" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellidoPaterno">Fisrt Address</label><br>
                    <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control">
                </div>

                <div class="form-group">
                    <label for="apellidoMaterno">Last Address</label><br>
                    <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control">
                </div>

                <div class="form-group">
                    <label for="direccion">Location</label><br>
                    <input type="text" name="direccion" id="direccion" class="form-control">
                </div>

                <div class="form-group">
                    <label for="numeroCelular">Phone Number</label><br>
                    <input type="text" name="numeroCelular" id="numeroCelular" class="form-control">
                </div>

                <div class="form-group">
                    <label for="genero">Gender</label><br>
                    <input type="text" name="genero" id="genero" class="form-control">
                </div>

                <div class="form-group">
                    <label for="fechaNacimiento">Birth Date</label><br>
                    <input type="text" name="fechaNacimiento" id="fechaNacimiento" class="form-control">
                </div>

<!--                <div class="form-group">-->
<!--                    <label for="fotografia">Photo</label><br>-->
<!--                    <input type="text" name="fotografia" id="fotografia" class="form-control">-->
<!--                </div>-->
<!--                -->
<!--                <div class="form-group">-->
<!--                    <label for="imagenCiAnverso">Image Ci Obverse</label><br>-->
<!--                    <input type="text" name="imagenCiAnverso" id="imagenCiAnverso" class="form-control">-->
<!--                </div>-->
<!---->
<!--                <div class="form-group">-->
<!--                    <label for="imagenCiReverso">image Ci Reverse</label><br>-->
<!--                    <input type="text" name="imagenCiReverso" id="imagenCiReverso" class="form-control">-->
<!--                </div>-->
                
                <div class="form-group">
                    <label for="activo">Active</label><br>
                    <input type="text" name="activo" id="activo" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-info">Create a User</button>
                </div>
            </form>
        </div>
        
    </div>
 </div>