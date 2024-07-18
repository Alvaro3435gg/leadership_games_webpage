<?php
require 'conexion.php'; // Incluir el archivo de conexión

// Obtener el id_usuario desde la URL
$id_usuario = $_GET['id_usuario'];

// Preparar la consulta SQL para obtener habilidades
$sql_habilidades = "SELECT * FROM usuario_habilidades WHERE id_usuario = :id_usuario";

// Variables para almacenar habilidades
$ability1 = null;
$ability2 = null;
$ability3 = null;
$ability4 = null;
$ability5 = null;
$ability6 = null;

try {
    // Ejecutar la consulta de habilidades
    $stmt_habilidades = $pdo->prepare($sql_habilidades);
    $stmt_habilidades->execute(['id_usuario' => $id_usuario]);

    // Obtener los resultados de habilidades
    while ($row = $stmt_habilidades->fetch()) {
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

    // Preparar la consulta SQL para obtener el nombre de usuario
    $sql_nombre_usuario = "SELECT nombre_usuario FROM usuarios WHERE id_usuario = :id_usuario";
    $stmt_nombre_usuario = $pdo->prepare($sql_nombre_usuario);
    $stmt_nombre_usuario->execute(['id_usuario' => $id_usuario]);

    // Obtener el resultado del nombre de usuario
    $nombre_usuario = $stmt_nombre_usuario->fetchColumn();

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
    .otherGames h2 {
        top:285vh;
    }
</style>
</head>
<body>
<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <h3>Habilidades</h3>
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
            <div class="sidebar-element-title">Creatividad e innovacion</div>
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
                <li><a href="#gamePage" class="navElement">Juegos</a></li>
                <li><a href="#personality" class="navElement">Personalidades</a></li>
                <li><strong>Bienvenidx!<br><?php echo $nombre_usuario; ?></strong></li>
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
        <h2>Juegos</h2>
        <div class = "overflow-container">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/comuncation_image.png" alt="Communication">
                            <div class="card-content">
                                <span class="tag">#tendencias</span>
                                <p>Julio 22, 2028</p>
                                <h3>Comunicación</h3>
                                <a href="https://www.chess.com/" target="_blank"><button id="updateButton1" class="play" onclick="updateHabilidad(1)">Jugar →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/criticalThinking_image.png" alt="Critical thinking">
                            <div class="card-content">
                                <span class="tag">#noticias</span>
                                <p>Julio 15, 2028</p>
                                <h3>Colaboración</h3>
                                <a href="https://www.chess.com/" target="_blank"><button id="updateButton2" class="play" onclick="updateHabilidad(2)">Jugar →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/CreativitiyInovation_image.png" alt="Creativity and innovation">
                            <div class="card-content">
                                <span class="tag">#tendencias</span>
                                <p>Julio 08, 2028</p>
                                <h3>Creatividad e innovación</h3>
                                <a href="https://www.chess.com/" target="_blank"><button id="updateButton3" class="play" onclick="updateHabilidad(3)">Jugar →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/selfManagement_image.png" alt="Self-management">
                            <div class="card-content">
                                <span class="tag">#tendencias</span>
                                <p>Julio 22, 2028</p>
                                <h3>Pensamiento Crítico</h3>
                                <a href="https://www.chess.com/" target="_blank"><button id="updateButton4" class="play" onclick="updateHabilidad(4)">Jugar →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/collaboration_image.png" alt="Collaboration">
                            <div class="card-content">
                                <span class="tag">#tendencias</span>
                                <p>Julio 15, 2028</p>
                                <h3>Responsabilidad social y personal</h3>
                                <a href="https://www.chess.com/" target="_blank"><button id="updateButton5" class="play" onclick="updateHabilidad(5)">Jugar →</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card">
                            <img src="assets/socialResponsability_image.png" alt="Personal and Social responsibility">
                            <div class="card-content">
                                <span class="tag">#tendencias</span>
                                <p>Julio 08, 2028</p>
                                <h3>Autogestión</h3>
                                <a href="https://www.chess.com/" target="_blank"><button id="updateButton6" class="play" onclick="updateHabilidad(6)">Jugar →</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section class="otherGames" id="personality">
    <h2>Personalidades</h2>
    <div class="container-courses-accessed">
        <ul>
            <li>
                <a class="normal">
                    <img src="assets/Inspector.png" alt="Imagen del Inspector">
                </a>
                <div class="info">
                    <h3>ISTJ (Inspector)</h3>
                    <p>Organizado, confiable y tradicional.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Protector.png" alt="Imagen del Protector">
                </a>
                <div class="info">
                    <h3>ISFJ (Protector)</h3>
                    <p>Compasivo, leal y dedicado al cuidado de los demás.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Abogado.png" alt="Imagen del Abogado">
                </a>
                <div class="info">
                    <h3>INFJ (Abogado)</h3>
                    <p>Intuitivo, empático y buscador de significado.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Arquitecto.png" alt="Imagen del Arquitecto">
                </a>
                <div class="info">
                    <h3>INTJ (Arquitecto)</h3>
                    <p>Analítico, estratégico y visionario.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Virtuoso.png" alt="Imagen del Virtuoso">
                </a>
                <div class="info">
                    <h3>ISTP (Virtuoso)</h3>
                    <p>Práctico, reservado y amante de las experiencias.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Aventurero.png" alt="Imagen del Aventurero">
                </a>
                <div class="info">
                    <h3>ISFP (Aventurero)</h3>
                    <p>Creativo, independiente y amante de la estética.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Mediador.png" alt="Imagen del Mediador">
                </a>
                <div class="info">
                    <h3>INFP (Mediador)</h3>
                    <p>Idealista, compasivo y buscador de autenticidad.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Pensador.png" alt="Imagen del Pensador">
                </a>
                <div class="info">
                    <h3>INTP (Pensador)</h3>
                    <p>Lógico, curioso e innovador.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Emprendedor.png" alt="Imagen del Emprendedor">
                </a>
                <div class="info">
                    <h3>ESTP (Emprendedor)</h3>
                    <p>Entusiasta, adaptable y amante de la acción.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Animador.png" alt="Imagen del Animador">
                </a>
                <div class="info">
                    <h3>ESFP (Animador)</h3>
                    <p>Sociable, espontáneo y amante de la diversión.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Campeón.png" alt="Imagen del Campeón">
                </a>
                <div class="info">
                    <h3>ENFP (Campeón)</h3>
                    <p>Empático, entusiasta y buscador de nuevas ideas.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Innovador.png" alt="Imagen del Innovador">
                </a>
                <div class="info">
                    <h3>ENTP (Innovador)</h3>
                    <p>Inteligente, curioso y amante de los desafíos.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Organizador.png" alt="Imagen del Organizador">
                </a>
                <div class="info">
                    <h3>ESTJ (Organizador)</h3>
                    <p>Práctico, decidido y enfocado en resultados.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Consúl.png" alt="Imagen del Cónsul">
                </a>
                <div class="info">
                    <h3>ESFJ (Cónsul)</h3>
                    <p>Sociable, empático y dedicado al bienestar de los demás.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Protagonista.png" alt="Imagen del Protagonista">
                </a>
                <div class="info">
                    <h3>ENFJ (Protagonista)</h3>
                    <p>Carismático, empático y líder inspirador.</p>
                </div>
            </li>
            <li>
                <a class="normal">
                    <img src="assets/Comandante.png" alt="Imagen del Comandante">
                </a>
                <div class="info">
                    <h3>ENTJ (Comandante)</h3>
                    <p>Estratégico, ambicioso y líder decidido.</p>
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
