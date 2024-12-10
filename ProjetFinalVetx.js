var btn = document.querySelector('.burgermenu_h')
const text = document.querySelector('.BurgerButtons')

btn.addEventListener('click', () => {
    text.classList.toggle('BurgerButtons2');
});

var btn2 = document.querySelector('.pages')
const text2 = document.querySelector('.pagesheader')

btn2.addEventListener('click', () => {
    text2.classList.toggle('pagesheader2');
});

document.addEventListener('DOMContentLoaded', function () {
    const carouselPart = document.getElementById('carouselPart');
    const backPart = document.getElementById('backPart');
    const nextPart = document.getElementById('nextPart');

    let currentIndex = 0;

    function updateCarousel() {
        const translateValue = -currentIndex * 550;
        carouselPart.style.transform = `translateX(${translateValue}px)`;
    }

    function nextSlide() {
        if (currentIndex < 4) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }

    function prevSlide() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = 4;
        }
        updateCarousel();
    }
    //CAROUSSEL NUMER0 2
    backPart.addEventListener('click', nextSlide);
    nextPart.addEventListener('click', prevSlide);

});


document.addEventListener('DOMContentLoaded', function () {
    const carouselPart2 = document.getElementById('Carousel_woc');
    const backPart2 = document.getElementById('Gauche_woc');
    const nextPart2 = document.getElementById('Droite_woc');
    let body = document.querySelector('body');

    let currentIndex2 = 0;

    function updateCarousel() {
        const translateValue2 = -currentIndex2 * 102;
        carouselPart2.style.transform = `translateY(${translateValue2}%)`;
    }



    function nextSlide() {
        if (currentIndex2 < 2) {
            currentIndex2++;
        } else {
            currentIndex2 = 0;
        }
        updateCarousel();
    }

    function prevSlide() {
        if (currentIndex2 > 0) {
            currentIndex2--;
        } else {
            currentIndex2 = 2;
        }
        updateCarousel();
    }
    //CAROUSSEL NUMER0 2
    nextPart2.addEventListener('click', nextSlide);
    backPart2.addEventListener('click', prevSlide);

});
