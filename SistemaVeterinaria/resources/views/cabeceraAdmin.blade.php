<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GatoNegro</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="\css\responsive.css">
    <link rel="stylesheet" href="\css\style.css">
    <link rel="stylesheet" href="\css\carrusel.css">
    <link rel="stylesheet" href="\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="\css\tabla.css">
</head>
<body>
<nav>
    <div class="nav-header">
            <!-- Botón para mostrar el menú -->
            <button class="nav-toggle">
                <i class="fas fa-bars"></i> <!-- Icono de menú -->
            </button>

        <img class="log" src="\img\logo2.png" alt="logoempresa" usemap="#log">
        <map name="log">
            <area shape="circle" coords="1253,132,1321" href="..\html\gatonegro.html" alt="">
        </map>

        <label class="logo">
            <a style="color:yellow" class="gatonegro" href="..\html\gatonegro.html">Gato Negro</a>
        </label>

    </div>


    <ul class="nav-menu">
        <li><a class="active" href="..\html\TablaUsuario.html">Gestión Usuarios</a></li>
        <li><a class="active" href="..\html\TablaServicio.html">Gestión Servicios</a></li>
        <li><a class="active" href="..\html\TablaProductos.html">Gestión Productos</a></li>
        <li><a class="active" href="..\html\gatonegro.html">Cerrar Admin</a></li>


        <div class="nav-header">
            <img class="log" src="..\img\login.png" alt="logoempresa" usemap="#login">
            <map name="login">
                <area shape="circle" coords="1253,132,1321" href="{{route('cerrarSesion')}}" alt="">
            </map>
        </div>
    </ul>

</nav>