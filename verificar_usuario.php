<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos recibidos
    $nombre_usuario = $_POST['nombre_usuario'];
    $contrasena = $_POST['contrasena'];

    try {
        // Preparar la consulta SQL para seleccionar al usuario por nombre de usuario
        $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre_usuario = :nombre_usuario");
        $stmt->bindParam(':nombre_usuario', $nombre_usuario, PDO::PARAM_STR);
        $stmt->execute();
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verificar si se encontró un usuario y si la contraseña es válida
        if ($usuario && $contrasena == $usuario['contrasena']) {
            // Usuario y contraseña correctos
            echo json_encode(['status' => 'success']);
        } else {
            // Usuario o contraseña incorrectos
            echo json_encode(['status' => 'error', 'message' => 'Invalid username or password']);
        }
    } catch (Exception $e) {
        // Error en la consulta SQL
        echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
    }
}
?>
