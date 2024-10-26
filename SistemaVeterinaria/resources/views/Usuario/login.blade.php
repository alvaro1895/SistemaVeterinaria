<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GatoNegro</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="SistemaVeterinaria\routes\web.php">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">
    <link rel="stylesheet" href="\css\login.css">
    <link href="https://cdb.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha.84-0evhe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"crossorigin="anonymous">
</head>
<body>

    <br><br><br><br><br>
<!-- <table class="ini">-->
    <!-- Contenedor principal para el formulario de inicio de sesión -->
    <div class="login-container">
        <!-- Contenedor de la cabecera del formulario, incluye la imagen del logo -->
        <div class="login-header">
            <!-- Imagen del logo -->
            <img src="\img\logo2.png" alt="Gato Negro" class="login-image">
        </div>
        <!-- Formulario de inicio de sesión -->
        <form class="login-form" action="/" method="get" >
            <h2 style="color:white">GATO NEGRO</h2> <BR>
            <!-- Campo de entrada para el email (obligatorio) -->
            <input type="email" id="email" name="email" placeholder="Email" class="login-input" required><br>
            <!-- Campo de entrada para la contraseña (obligatorio) -->
            <input type="password" id="password" placeholder="Contraseña" class="login-input" required><br>
            <!-- Enlace para recuperar la contraseña -->
            <a href="{{ route('olvidarcontraseña') }}" class="register-user">Olvide mi contraseña</a><br>
            <!-- Enlace para registrar un nuevo usuario -->
            <a href="{{ route('registrarusuario') }}" class="register-user">Registrar Usuario</a><br>
            <!-- Botón para enviar el formulario (iniciar sesión) -->
            <button type="submit" class="login-button" href="{{route('inicio')}}">Ingresar</button><br>
        </form>
    </div>
<br>
<br>
    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
</body>
</html>
