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
        if (currentIndex < 3) {
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
            currentIndex = 3;
        }
        updateCarousel();
    }
    //CAROUSSEL NUMER0 2
    backPart.addEventListener('click', nextSlide);
    nextPart.addEventListener('click', prevSlide);

});


