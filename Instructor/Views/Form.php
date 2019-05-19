<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Register Instructor</h2>
        </div>

        <div class="card-body">
            <!-- TEMP -->
            <form action = "<?= Config::webRoot ?>/instructor/store" method="POST">

                <div class="form-group">
                    <label for="ciInstructor"> Ci Instructor </label><br>
                    <input type="text" name="ciInstructor" id="ciInstructor" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="idRol"> Rol </label><br>
                    <input type="text" name="idRol" id="idRol" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="primerNombre">First Name</label><br>
                    <input type="text" name="primerNombre" id="primerNombre" class="form-control">
                </div>

                <!-- <div class="form-group">
                    <label for="segundoNombre">Last Name</label><br>
                    <input type="ciUsuario" name="segundoNombre" id="segundoNombre" class="form-control">
                </div> -- >

                <div class="form-group">
                    <label for="apellidoPaterno">Paternal Address</label><br>
                    <input type="text" name="apellidoPaterno" id="apellidoPaterno" class="form-control">
                </div>

                <!-- <div class="form-group">
                    <label for="apellidoMaterno">Maternal Address</label><br>
                    <input type="text" name="apellidoMaterno" id="apellidoMaterno" class="form-control">
                </div> -- >

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

                <!-- This is scope is reserve for Photography Instructor -- >
                <div class="form-group">
                    <label for="usuario">User</label><br>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                </div>

                <div class="form-group">
                    <label for="contrasenia">Password</label><br>
                    <input type="text" name="contrasenia" id="contrasenia" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="activo">Active</label><br>
                    <input type="text" name="activo" id="activo" class="form-control">
                </div -->
                

                
                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Accept</button>
                </div>
            </form>
        </div>
        
    </div>
 </div>