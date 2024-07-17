<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];
    $correo_electronico = $_POST['correo_electronico'];

    // Imprimir los datos recibidos para depuración
    echo "Datos recibidos:<br>";
    echo "Nombre de usuario: " . htmlspecialchars($nombre_usuario) . "<br>";
    echo "Contraseña: " . htmlspecialchars($contrasena) . "<br>";
    echo "Correo electrónico: " . htmlspecialchars($correo_electronico) . "<br>";

    try {
        $stmt = $pdo->prepare("CALL crear_usuario(:nombre_usuario, :contrasena, :correo_electronico)");

        $stmt->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);
        $stmt->bindParam(':contrasena', $contrasena, PDO::PARAM_STR);
        $stmt->bindParam(':correo_electronico', $correo_electronico, PDO::PARAM_STR);

        $stmt->execute();

        echo "Usuario creado y habilidades asignadas exitosamente.";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
