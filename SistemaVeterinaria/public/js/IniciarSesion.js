
// Cuando el usuario hace clic en "Olvide contraseña"
document.getElementById('forgot-password').addEventListener('click', function() {
    // Oculta el formulario de inicio de sesión
    document.querySelector('.login-container').style.display = 'none';
    // Muestra el formulario para restablecer la contraseña
    document.querySelector('.reset-password-container').style.display = 'block';
});

// Cuando el usuario hace clic en "Registrar Usuario"
document.getElementById('register').addEventListener('click', function() {
    // Oculta el formulario de inicio de sesión
    document.querySelector('.login-container').style.display = 'none';
    // Muestra el formulario de registro de usuario
    document.querySelector('.register-container').style.display = 'block';
});

// Cuando el usuario hace clic en "Enviar correo" para restablecer la contraseña
document.getElementById('send-reset-email').addEventListener('click', function(e) {
    e.preventDefault(); // Previene que el formulario se envíe de forma predeterminada
    // Simula el envío de un correo electrónico para restablecer la contraseña
    alert('Correo de restablecimiento enviado');
    // Oculta el formulario de restablecimiento de contraseña
    document.querySelector('.reset-password-container').style.display = 'none';
    // Muestra el formulario para ingresar una nueva contraseña
    document.querySelector('.new-password-container').style.display = 'block';
});

// Cuando el usuario crea una nueva contraseña y hace clic en "Crear contraseña"
document.getElementById('create-password').addEventListener('click', function(e) {
    e.preventDefault(); // Previene que el formulario se envíe de forma predeterminada
    // Obtiene los valores de los campos de nueva contraseña y confirmación de contraseña
    const newPassword = document.getElementById('new-password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    // Verifica si las contraseñas ingresadas coinciden
    if (newPassword === confirmPassword) {
        // Si coinciden, muestra un mensaje de éxito
        alert('Contraseña restablecida exitosamente');
        // Oculta el formulario de nueva contraseña
        document.querySelector('.new-password-container').style.display = 'none';
        // Muestra el formulario de inicio de sesión
        document.querySelector('.login-container').style.display = 'block';
    } else {
        // Si las contraseñas no coinciden, muestra un mensaje de error
        alert('Las contraseñas no coinciden');
    }
});

// Cuando el usuario hace clic en el botón "Ingresar" en el formulario de inicio de sesión
document.getElementById('login-btn').addEventListener('click', function(e) {
    e.preventDefault(); // Previene que el formulario se envíe de forma predeterminada
    // Simula un inicio de sesión exitoso y muestra un mensaje
    alert('Inicio de sesión exitoso');
    // Redirige al usuario a la página de inicio
    window.location.href = "pagina_de_inicio.html";
});

// Cuando el usuario hace clic en el botón "Registrar Usuario" en el formulario de registro
document.getElementById('register-btn').addEventListener('click', function(e) {
    e.preventDefault(); // Previene que el formulario se envíe de forma predeterminada
    // Verifica si el checkbox de términos y condiciones está marcado
    if (document.getElementById('terms').checked) {
        // Si el usuario aceptó los términos, muestra un mensaje de éxito
        alert('Registro exitoso');
        // Oculta el formulario de registro
        document.querySelector('.register-container').style.display = 'none';
        // Muestra el formulario de inicio de sesión
        document.querySelector('.login-container').style.display = 'block';
    } else {
        // Si el usuario no aceptó los términos, muestra un mensaje de advertencia
        alert('Debe aceptar los términos y condiciones');
    }
});
