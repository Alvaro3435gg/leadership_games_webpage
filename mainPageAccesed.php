<?php
require 'conexion.php'; // Incluir el archivo de conexión

// Obtener el id_usuario desde la URL
$id_usuario = $_GET['id_usuario'];

// Preparar la consulta SQL
$sql = "SELECT * FROM usuario_habilidades WHERE id_usuario = :id_usuario";

try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['id_usuario' => $id_usuario]);

    // Variables para almacenar habilidades
    $ability1 = null;
    $ability2 = null;
    $ability3 = null;
    $ability4 = null;
    $ability5 = null;
    $ability6 = null;

    // Obtener los resultados
    while ($row = $stmt->fetch()) {
        switch ($row['id_habilidad']) {
            case 1:
                $ability1 = $row['progreso'];
                break;
            case 2:
                $ability2 = $row['progreso'];
                break;
            case 3:
                $ability3 = $row['progreso'];
                break;
            case 4:
                $ability4 = $row['progreso'];
                break;
            case 5:
                $ability5 = $row['progreso'];
                break;
            case 6:
                $ability6 = $row['progreso'];
                break;
            default:
                // No hacer nada o manejar otro caso si es necesario
                break;
        }
    }

} catch (\PDOException $e) {
    echo "Error en la consulta: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUCA2 & Co. Accesed</title>
    <link rel="stylesheet" href="style/styles.css">
    <link rel="stylesheet" href="style/background.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Michroma&display=swap" rel="stylesheet">
<style>
    #ability1 .sidebar-element-progress-bar::before {
        width: <?php echo $ability1; ?>%;
    }

    #ability2 .sidebar-element-progress-bar::before {
        width: <?php echo $ability2; ?>%;
    }

    #ability3 .sidebar-element-progress-bar::before {
        width: <?php echo $ability3; ?>%;
    }

    #ability4 .sidebar-element-progress-bar::before {
        width: <?php echo $ability4; ?>%;
    }

    #ability5 .sidebar-element-progress-bar::before {
        width: <?php echo $ability5; ?>%;
    }

    #ability6 .sidebar-element-progress-bar::before {
        width: <?php echo $ability6; ?>%;
    }
</style>
</head>
<body>
<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="sidebar-element-button-container" id = "ability1">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Comunicacion</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage"><?php echo $ability1; ?>%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability2">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Colaboracion</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage"><?php echo $ability2; ?>%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability3">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Creatividad  innovacion</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage"><?php echo $ability3; ?>%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability4">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Pensamiento critico</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage"><?php echo $ability4; ?>%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability5">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Responsabilidad social e individual</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage"><?php echo $ability5; ?>%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability6">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Autogestion</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage"><?php echo $ability6; ?>%</div>
    </div>
</div>
<div id="overlay"></div>

<div id = "main">
<header>

    <nav>
        <div class="nav-left">
            <div class="logo">
                <i class="fas fa-bars bar-icon" onclick="openNav()" ></i>
                <img src="assets/camaraIcon.png" alt="EDUCA2 & Co. Logo">
                <h1>EDUCA2 & Co.</h1>
            </div>
            <ul>
                <li><a href="#mainPage" class="navElement">Inicio</a></li>
                <li><a href="#" class="navElement">Sobre Nosotros</a></li>
                <li><a href="#gamePage" class="navElement">Juegos</a></li>
                <li><a href="#personality" class="navElement">Personalidades</a></li>
                <li><a href="#" class="navElement">Contáctanos</a></li>
            </ul>
        </div>
        <div class="auth-buttons">
            <button class="login" onclick="window.location.href='mainPage.html'">Cerrar sesión</button>
        </div>
    </nav>
</header>

<div class="wrap">
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
    <img src="assets/left_glasses-Photoroom.png" alt="left_glasses-Photoroom." class="img" />
</div>

<div class="circle" id="circle1"></div>
<div class="circle" id="circle2"></div>
<div class="circle" id="circle3"></div>
<div class="circle" id="circle4"></div>
<div class="circle" id="circle6"></div>
<div class="circle" id="circle5"></div>








    <main>
    <section class="hero" id = "mainPage">
        <div class="hero-image">
            <img src="assets/gamer.png" alt="Training Competencies" class="gamer">
        </div>
        <div class="hero-content">
            <h1>FORMANDO COMPENTENCIAS PARA LA VIDA</h1>
            <div class="right-content">
                <a href="#gamePage"><img src="assets/arrow-Photoroom.png" alt="arrow"></a>
                <p>Desarrollando nuestras habilidades</p>
            </div>
            <a href="#gamePage">
                <div class="hero-buttons">
                    <button class="explore">Explóralo Ahora<img src="assets/arrowimage.png" alt="arrow" class="arrow-button-logo"></button>
                </div>
            </a>
        </div>
    </section>
    <section class="games" id="gamePage">
        <h2>Play the games</h2>
        <div class = "overflow-container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/comuncation_image.png" alt="Communication">
                            <div class="card-content">
                                <span class="tag">#trends</span>
                                <p>July 22, 2028</p>
                                <h3>Communication</h3>
                                <a href="https://www.chess.com/" target="_blank"><button id="updateButton1" class="play" onclick="updateHabilidad(1)">Play →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/criticalThinking_image.png" alt="Critical thinking">
                            <div class="card-content">
                                <span class="tag">#news</span>
                                <p>July 15, 2028</p>
                                <h3>Critical thinking</h3>
                                <a href="https://www.chess.com/" target="_blank"><button class="play">Play →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/CreativitiyInovation_image.png" alt="Creativity and innovation">
                            <div class="card-content">
                                <span class="tag">#trends</span>
                                <p>July 08, 2028</p>
                                <h3>Creativity and innovation</h3>
                                <a href="https://www.chess.com/" target="_blank"><button class="play">Play →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/selfManagement_image.png" alt="Self-management">
                            <div class="card-content">
                                <span class="tag">#trends</span>
                                <p>July 22, 2028</p>
                                <h3>Self-management</h3>
                                <a href="https://www.chess.com/" target="_blank"><button class="play">Play →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/collaboration_image.png" alt="Collaboration">
                            <div class="card-content">
                                <span class="tag">#trends</span>
                                <p>July 15, 2028</p>
                                <h3>Collaboration</h3>
                                <a href="https://www.chess.com/" target="_blank"><button class="play">Play →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/socialResponsability_image.png" alt="Personal and Social responsibility">
                            <div class="card-content">
                                <span class="tag">#trends</span>
                                <p>July 08, 2028</p>
                                <h3>Personal and Social responsibility</h3>
                                <a href="https://www.chess.com/" target="_blank"><button class="play">Play →</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class ="otherGames" id="personality">
        <h2>Personalities</h2>
        <div class='container-courses-accessed'>
            <ul>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/criticalThinking_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/inspector.jpg' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
                <li>
                    <a class='normal' href='#'>
                        <img src='assets/CreativitiyInovation_image.png' alt='Imagen del producto'>
                    </a>
                    <div class='info'>
                        <h3>Single-origin coffee whatever</h3>
                        <p>Williamsburg tofu polaroid, 90's Bushwick irony locavore ethnic meh messenger bag Truffaut jean shorts.</p>
                    </div>
                </li>
            </ul>
        </div>
    </section>

</main>

</div>

<script>
function updateHabilidad(id_habilidad) {
    // Obtener el id_usuario desde la página (supongamos que está almacenado en una variable PHP)
    var id_usuario = <?php echo $id_usuario; ?>; // Asegúrate de definir $id_usuario antes de esta línea

    // Datos que se enviarán en la solicitud
    var requestData = { id_usuario: id_usuario, id_habilidad: id_habilidad };

    // Realizar la solicitud al servidor
    fetch('actualizar_habilidad.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(requestData),
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Ocurrió un error al actualizar la habilidad.');
        }
        // Manejar la respuesta si es necesaria
        return response.json(); // O puedes usar response.text() dependiendo de la respuesta esperada
    })
    .then(data => {
        console.log('Respuesta del servidor:', data);
        // Aquí puedes actualizar la interfaz de usuario si es necesario
    })
    .catch(error => {
        console.error('Error al actualizar la habilidad:', error);
        // Manejar el error, mostrar un mensaje al usuario, etc.
    });

    // Mostrar en consola los datos enviados
    console.log('Datos enviados:', requestData);
}
</script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="script/scripts_mainPageAccess.js"></script>
<script src="script/mouseHover.js"></script>


</body>
</html>
