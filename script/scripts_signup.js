document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    // Obtener valores de los campos
    const nombre_usuario = document.querySelector('input[placeholder="Username"]').value;
    const contrasena = document.querySelector('input[placeholder="Password"]').value;
    const correo_electronico = document.querySelector('input[placeholder="Mail"]').value;

    // Simple validación
    if (nombre_usuario === '' || contrasena === '' || correo_electronico === '') {
        alert('Please fill in all fields.');
        return;
    }

    // Verificar datos en la consola
    console.log('Nombre de usuario:', nombre_usuario);
    console.log('Contraseña:', contrasena);
    console.log('Correo electrónico:', correo_electronico);

    // Enviar los datos al servidor usando fetch
    fetch('crear_usuario.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'nombre_usuario': nombre_usuario,
            'contrasena': contrasena,
            'correo_electronico': correo_electronico,
        })
    })
        .then(response => response.text())
        .then(data => {
            console.log(data); // Mostrar respuesta del servidor en la consola
            alert('Sign Up successful!');
            window.location.href = 'login.html';
        })
        .catch(error => console.error('Error:', error));
});
