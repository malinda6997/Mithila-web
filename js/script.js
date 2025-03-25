let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () => {
    navbar.classList.toggle('active');
   
}


window.onscroll = () =>{
    shoppingcart.classList.remove('active');
    navbar.classList.remove('active');
}


var swiper = new Swiper(".home-slider", {
    autoplay: {
        delay:7500,
        disableOnInteraction: false,
    },
    grabCursor: true,
    loop: true,
});


