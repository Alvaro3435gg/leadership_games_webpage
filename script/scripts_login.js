document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    // Obtener valores de los campos
    const nombre_usuario = document.querySelector('input[placeholder="Username"]').value;
    const contrasena = document.querySelector('input[placeholder="Password"]').value;

    // Simple validación
    if (nombre_usuario === '' || contrasena === '') {
        alert('Please fill in all fields.');
        return;
    }

    console.log('Nombre de usuario:', nombre_usuario);
    console.log('Contraseña:', contrasena);

    // Enviar los datos al servidor usando fetch
    fetch('verificar_usuario.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            'nombre_usuario': nombre_usuario,
            'contrasena': contrasena
        })
    })
        .then(response => {
            // Verificar si la respuesta es ok (status 200)
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // Devolver la respuesta como texto
            return response.text();
        })
        .then(response => {
            console.log('Respuesta del servidor (texto):', response); // Mostrar la respuesta como texto en la consola
            try {
                const data = JSON.parse(response); // Intentar parsear la respuesta como JSON
                console.log('Datos parseados:', data); // Mostrar los datos parseados en la consola
                if (data.status === 'success') {
                    // Redirigir a mainPageAccesed.php con id_usuario como parámetro
                    window.location.href = `mainPageAccesed.php?id_usuario=${data.id_usuario}`;
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Datos de usuario o contraseña incorrectos',
                        confirmButtonText: 'Aceptar'
                    });

                }

            } catch (error) {
                console.error('Error al parsear JSON:', error);
                console.log('Contenido de la respuesta:', response); // Mostrar el contenido de la respuesta que causó el error
            }
        })
        .catch(error => console.error('Error en la solicitud:', error));
});
