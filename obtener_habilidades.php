<?php
// Archivo obtener_habilidades.php

// Primero, establecer la conexión a la base de datos usando el archivo conexión.php
include 'conexión.php';

// Verificar si se recibió el parámetro id_usuario por GET
if (isset($_GET['id_usuario'])) {
    $id_usuario = $_GET['id_usuario'];

    // Consulta SQL para obtener las habilidades y su progreso del usuario específico
    $query = "SELECT * FROM usuario_habilidades WHERE id_usuario = $id_usuario";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);

    if ($result) {
        $habilidades = array();

        // Iterar sobre los resultados y almacenar en un array
        while ($row = mysqli_fetch_assoc($result)) {
            $habilidades[] = array(
                'id_habilidad' => $row['id_habilidad'],
                'progreso' => $row['progreso']
            );
        }

        // Preparar la respuesta como JSON
        $response = array(
            'success' => true,
            'habilidades' => $habilidades
        );

        // Enviar la respuesta como JSON
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // Si hay un error en la consulta
        $response = array(
            'success' => false,
            'message' => 'Error al obtener las habilidades'
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conn);
} else {
    // Si no se proporcionó el parámetro id_usuario
    $response = array(
        'success' => false,
        'message' => 'No se proporcionó el id_usuario'
    );
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
