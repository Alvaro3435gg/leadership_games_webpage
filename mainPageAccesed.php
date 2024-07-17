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
        <div class="sidebar-element-percentage">30%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability2">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Colaboracion</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage">30%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability3">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Creatividad  innovacion</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage">30%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability4">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Pensamiento critico</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage">30%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability5">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Responsabilidad social e individual</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage">30%</div>
    </div>
    <div class="sidebar-element-button-container" id = "ability6">
        <div class="sidebar-element-icon"><i class="fas fa-tasks"></i></div>
        <div class="sidebar-element-content">
            <div class="sidebar-element-title">Autogestion</div>
            <div class="sidebar-element-progress-bar"></div>
        </div>
        <div class="sidebar-element-percentage">30%</div>
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
                <li><a href="#mainPage" class="navElement">Home</a></li>
                <li><a href="#" class="navElement">About</a></li>
                <li><a href="#gamePage" class="navElement">Games</a></li>
                <li><a href="#personality" class="navElement">Personality</a></li>
                <li><a href="#" class="navElement">Contact</a></li>
            </ul>
        </div>
        <div class="auth-buttons">
            <button class="login" onclick="window.location.href='mainPage.html'">Sign Up</button>
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
            <h1>TRAINING COMPETENCIES FOR LIFE</h1>
            <div class="right-content">
                <a href="#gamePage"><img src="assets/arrow-Photoroom.png" alt="arrow"></a>
                <p>Navigating skills for life</p>
            </div>
            <a href="#gamePage">
                <div class="hero-buttons">
                    <button class="explore">Explore Now<img src="assets/arrowimage.png" alt="arrow" class="arrow-button-logo"></button>
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
                                <a href="https://www.chess.com/" target="_blank"><button class="play">Play →</button></a>
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
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="script/scripts_mainPageAccess.js"></script>
<script src="script/mouseHover.js"></script>


</body>
</html>
