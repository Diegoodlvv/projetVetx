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
    const carouselWrapperBloc1 = document.getElementById('carouselWrapperBloc1');
    const backBloc1 = document.getElementById('backBloc1');
    const nextBloc1 = document.getElementById('nextBloc1');

    let currentIndex = 0;

    function updateCarousel() {
        const translateValue = -currentIndex * 780;
        carouselWrapperBloc1.style.transform = translateX({ translateValue });
    }

    function nextSlide() {
        if (currentIndex < 2) {
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
            currentIndex = 2;
        }
        updateCarousel();
    }
    //CAROUSSEL NUMER0 2
    backBloc1.addEventListener('click', nextSlide);
    nextBloc1.addEventListener('click', prevSlide);

});


