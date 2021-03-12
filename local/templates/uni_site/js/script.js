$( document ).ready(function() {
    var mySwiper = new Swiper('.slider-main', {
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
});