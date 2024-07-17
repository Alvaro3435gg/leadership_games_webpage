function openNav() {
document.getElementById("mySidebar").style.width = "35vw";
document.getElementById("overlay").style.display = "flex";
}

function closeNav() {
document.getElementById("mySidebar").style.width = "0";
document.getElementById("overlay").style.display = "none";
}






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

document.querySelector('.explore').addEventListener('mouseover', () => {
    document.querySelector('.arrow-button-logo').classList.add('animate');
});

document.querySelector('.explore').addEventListener('mouseout', () => {
    document.querySelector('.arrow-button-logo').classList.remove('animate');
});




