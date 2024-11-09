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
    <!-- Stack para agregar estilos específicos en las secciones -->
    @stack('styles')
</head>
<body>

    <!--incluir cabecera del usuario-->
    @include('partials._cabecera_usuario')

    <!-- Contenido de la página -->
    <main>
    @yield('contenido')
    </main>

    <!--incluir pie de pagina del usuario-->
    @include('partials._pie_de_pagina_usuario')

    <!-- Stack para agregar scripts específicos en las secciones -->
    @stack('scripts')

</body>
</html>