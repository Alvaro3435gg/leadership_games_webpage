const swiper = new Swiper('.swiper-container', {
    loop: false,              // Para que el swiper haga loop
    slidesPerView: 3,        // Número de slides visibles por vista
    spaceBetween: 40,        // Espacio entre slides
    initialSlide: 0,         // Slide inicial (segunda tarjeta)
    autoplay: {              // Configuración del autoplay
        delay: 2000,         // Intervalo de tiempo en milisegundos entre slides
        disableOnInteraction: false,  // No desactivar el autoplay al interactuar manualmente
    },
    loopAdditionalSlides: 0,
});


function changeGradient(element) {
    let initialGradient = 'linear-gradient(90deg, rgba(116,25,247,1) 0%, rgba(255,101,255,1) 100%)';
    let finalGradient = 'linear-gradient(90deg, rgba(255, 101, 255, 1) 0%, rgba(116, 25, 247, 1) 100%)';

    let initialColors = [116, 25, 247];
    let finalColors = [255, 101, 255];

    let currentColors = [...initialColors]; // Copia de los colores iniciales
    let currentIndex = 0;

    function updateGradient() {
        // Construye el gradiente con los colores actuales
        let gradientString = `linear-gradient(90deg, rgba(${currentColors[0]}, ${currentColors[1]}, ${currentColors[2]}, 1) 0%, rgba(${currentColors[0]}, ${currentColors[1]}, ${currentColors[2]}, 1) 100%)`;
        element.style.background = gradientString;

        // Actualiza los colores actuales hacia los finales o iniciales según corresponda
        for (let i = 0; i < 3; i++) {
            if (currentColors[i] !== finalColors[i]) {
                currentColors[i] += (finalColors[i] > initialColors[i]) ? 10 : -10;
                if ((finalColors[i] > initialColors[i] && currentColors[i] > finalColors[i]) || (finalColors[i] < initialColors[i] && currentColors[i] < finalColors[i])) {
                    currentColors[i] = finalColors[i];
                }
            }
        }

        // Si se alcanzan los valores finales o iniciales, cambia la dirección
        if (currentColors.every((color, index) => color === finalColors[index])) {
            finalColors.forEach((color, index) => { initialColors[index] = color; });
        } else if (currentColors.every((color, index) => color === initialColors[index])) {
            initialColors.forEach((color, index) => { finalColors[index] = color; });
        }
    }

    // Llama a updateGradient inicialmente
    updateGradient();

    // Establece el cambio cada 100 milisegundos (100 milisegundos)
    setInterval(updateGradient, 100);
}


function resetGradient(element) {
    element.style.background = 'linear-gradient(90deg, rgba(255, 101, 255, 1) 0%, rgba(116, 25, 247, 1) 100%)';
}

