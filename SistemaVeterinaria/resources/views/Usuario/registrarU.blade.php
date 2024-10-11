<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GatoNegro</title>
    <link rel="icon" href="img/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="..\css\responsive.css">
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\carrusel.css">
    <link rel="stylesheet" href="..\css\footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="..\css\tabla.css">
    <link rel="stylesheet" href="..\css\registrarU.css">
</head>
<body>
    

    <br><br><br><br><br><br>

<h1 class="venta"> Registro de Usuario</h1>
        <div class="login-container">
            <div class="login-header">
                <img src="\img\logo2.png" alt="Gato Negro" class="login-image">           
            </div> 
            <form class="login-form" action="\" method="get"> 
                <label for="texto" style="color:white">Ingrese sus datos:</label><br>    
                <div>
                    <input type="text" name="nombre" placeholder="Nombre" class="login-input1" required >
                    <input type="text" name="apellido" placeholder="Apellido" class="login-input1" required>
                </div>                
                <input type="tel" name="telefono" placeholder="Teléfono" class="login-input" required><br>
                <input type="email" name="email" placeholder="Email" class="login-input" required><br>
                <input type="password" name="password" placeholder="Contraseña" class="login-input" required><br>
                <input type="password" name="confirm-password" placeholder="Confirmar contraseña" class="login-input" required>
    <br>
                <div>
                    <input type="checkbox" name="terms" id="terms" required>
                    <label style="color:white" for="terms">Yo acepto los <a href="#" class="register-user" target="_blank">Términos y Condiciones</a></label>

                  <!-- <label for="terms">Yo acepto los <a href="termCondi.html" class="register-user">Términos y Condiciones</a></label>--> 
                </div>   
                <br>
                <button type="submit" class="login-button">Registrarse ahora</button>          
            </form>
        </div>
<br>
<br>

    <!--Codigo JS abajo (ponerlos todos ahi. sino fallan)-->
    <script src="..\js\carrusel.js"></script>
    <script src="..\js\boton.js"></script>
 
    
</body>
</html>
