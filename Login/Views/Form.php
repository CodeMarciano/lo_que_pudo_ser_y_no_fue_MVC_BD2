<?php require_once './resources/indexComponent/header.php'?>

            <h3>Login</h3>

            <form action="<?= Config::webRoot ?>/login/verify" method="POST">

                <div class="input-field col s12">
                    <label for="usuario"> User </label><br>
                    <input type="text" name="usuario" id="usuario" class="validate" required>
                </div>

                <div class="input-field col s12">
                    <label for="contrasenia"> Password </label><br>
                    <input type="password" name="contrasenia" id="contrasenia" class="validate" required>
                </div>
                <button type="submit" class="btn btn-info">Aceptar</button>

            </form>
<?php require_once './resources/indexComponent/footer.php'?>
