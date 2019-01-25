$(document).ready(function () {
    $('.main-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
    });

    let menuBtn = $('.top-menu-btn');
    let menu = $('.top-menu');

    menuBtn.on('click', (event) => {
        event.preventDefault();
        menu.toggleClass('active');
    })
});