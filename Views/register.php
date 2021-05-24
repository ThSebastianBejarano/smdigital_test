<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo RUTA_URL; ?>Assets/css/styleLogin.css">

    <title>Register Test</title>
</head>
<body>
    
    <div class="container">
        <form action="<?php echo RUTA_URL; ?>Home/addUser" method="POST" class="login-user">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">REGISTRARSE</p>
            <div class="input-group">
                <input type="text" placeholder="Usuario" name="name" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Correo Electronico" name="email" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Constraseña" name="pass" required>
            </div>
            <div class="input-group">
                <button class="btn" type="submit">Registrarse</button>
            </div>
            <p class="login-register-text">Ya tienes una cuenta... <a href="<?php echo RUTA_URL;?>Home/index/">Iniciar Sesion.</a></p>
        </form>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>