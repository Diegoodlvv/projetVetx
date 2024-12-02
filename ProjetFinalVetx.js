var btnburger = document.querySelector('.burgermenu_h')
var btnburger2 = document.querySelector('.BurgerMenu')


btnburger.addEventListener('click', () => {
    btnburger2.classList.toggle('BurgerMenu');
});


var btnqs1 = document.querySelector(".button_qs1");
var btnqs2 = document.querySelector(".button_qs2");
var btnqs3 = document.querySelector(".button_qs3");
var btnqs4 = document.querySelector(".button_qs4");
var btn2 = document.querySelector('.button2_qs');

btnqs1.addEventListener('click', () => {
    btnqs1.classList.toggle('.button2_qs');
});

btnqs2.addEventListener('click', () => {
    btnqs2.classList.toggle('.button2_qs');
});

btnqs3.addEventListener('click', () => {
    btnqs3.classList.toggle('.button2_qs');
});

btnqs4.addEventListener('click', () => {
    btnqs4.classList.toggle('.button2_qs');
});

// btn.addEventListener('click', () => {
//     text.classList.toggle('buttonhidden');
// });