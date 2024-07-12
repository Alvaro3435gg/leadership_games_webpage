// scripts_signup.js
document.querySelector('form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evitar el envío del formulario

    // Obtener valores de los campos
    const username = document.querySelector('input[placeholder="Username"]').value;
    const password = document.querySelector('input[placeholder="Password"]').value;
    const personality = document.querySelector('input[placeholder="Personality"]').value;

    // Simple validación
    if (username === '' || password === '' || personality === '') {
        alert('Please fill in all fields.');
        return;
    }

    // Aquí puedes agregar la lógica para manejar el registro
    console.log('Username:', username);
    console.log('Password:', password);
    console.log('Personality:', personality);

    // Redirigir o mostrar un mensaje de éxito
    alert('Sign Up successful!');
});
