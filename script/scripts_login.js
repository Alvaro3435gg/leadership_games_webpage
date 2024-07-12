document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    // Obtener valores de los campos
    const username = document.querySelector('input[type="text"]').value;
    const password = document.querySelector('input[type="password"]').value;

    // Simple validación
    if (username === '' || password === '') {
        alert('Please fill in all fields.');
        return;
    }

    // Aquí puedes agregar la lógica para manejar el inicio de sesión
    console.log('Username:', username);
    console.log('Password:', password);

    // Redirigir o mostrar un mensaje de éxito
    alert('Login successful!');
});
