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
    <link rel="stylesheet" href="\css\reestablecer.css">
</head>
<body>

    
    <br><br><br><br><br><br><br><br><br>

<h1 class="venta"> Restablecer contraseña</h1>
 <!--   <table class="ini">-->
        <div class="login-container">
            <div class="login-header">
                <img src="\img\logo2.png" alt="Gato Negro" class="login-image">           
            </div> 
            <form class="login-form" action="/login" method="get">    
                <label for="texto" style="color:white">Ingresa la nueva contraseña para tu cuenta a continuación></label><br>                
                <label type="password" style="color:white">Nueva contraseña</label><br>
                <input type="password" id="password" placeholder="Contraseña" class="login-input" required><br>
                <label type="password" style="color:white">Confirmar contraseña</label><br>
                <input type="password" id="password" placeholder="Contraseña" class="login-input" required><br>
                <button type="submit" class="login-button">Crear contraseña</button><br>
            </form>
        </div>
<!--   </table>--> 
<br>
<br>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
   
</body>
</html>
