<?php
require 'conexion.php';

try {
    // Obtener los datos JSON enviados en la solicitud
    $data = json_decode(file_get_contents('php://input'), true);

    // Obtener el id_usuario y el id_habilidad desde la solicitud JSON
    $id_usuario = $data['id_usuario'];
    $id_habilidad = $data['id_habilidad'];

    // Preparar la consulta SQL con un límite de progreso máximo de 100
    $sql = "UPDATE usuario_habilidades
            SET progreso = CASE
                              WHEN progreso + 10 > 100 THEN 100
                              ELSE progreso + 10
                            END
            WHERE id_usuario = :id_usuario AND id_habilidad = :id_habilidad";
            
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_usuario' => $id_usuario, 'id_habilidad' => $id_habilidad]);

    // Si necesitas devolver alguna respuesta al cliente
    $response = ['message' => 'Habilidad actualizada correctamente'];
    header('Content-Type: application/json');
    echo json_encode($response);

    // Console log para depuración
    error_log('Datos recibidos: ' . json_encode($data));

} catch (\PDOException $e) {
    // Manejar errores de conexión o de consulta
    $response = ['error' => 'Error al actualizar la habilidad: ' . $e->getMessage()];
    header('Content-Type: application/json');
    http_response_code(500);
    echo json_encode($response);
}

exit; // Terminar el script PHP después de manejar la solicitud POST
?>
