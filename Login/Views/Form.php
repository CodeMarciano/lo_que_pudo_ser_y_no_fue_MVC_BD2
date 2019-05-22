<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="../resources/materialize/css/materialize-icons.css">
    <link rel="stylesheet" href="../resources/materialize/css/materialize.min.css">
</head>
<body>

<div class="section container" style="width: 700px;">
    <div class="row">
        <div class="card-panel">
            <h3>Login</h3>

            <form action="<?= Config::webRoot ?>/login/verify" method="POST">

                <div class="input-field col s12">
                    <label for="usuario"> User </label><br>
                    <input type="text" name="usuario" id="usuario" class="validate" required>
                </div>

                <div class="input-field col s12">
                    <label for="contrasenia"> Password </label><br>
                    <input type="text" name="contrasenia" id="contrasenia" class="validate" required>
                </div>
                <button type="submit" class="btn btn-info">Aceptar</button>

            </form>

        </div>
    </div>
</div>
<script src="../resources/materialize/js/materialize.min.js"></script>
</body>
</html>