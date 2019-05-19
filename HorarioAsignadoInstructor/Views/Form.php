<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Login</h2>
        </div>

        <div class="card-body">
            <!-- TEMP -->
            <form action = "<?= Config::webRoot ?>/login/verify" method="POST">

                <div class="form-group">
                    <label for="usuario"> User </label><br>
                    <input type="text" name="usuario" id="usuario" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="contrasenia"> Password </label><br>
                    <input type="text" name="contrasenia" id="contrasenia" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-info">Accept</button>
                </div>
            </form>
        </div>
        
    </div>
 </div>