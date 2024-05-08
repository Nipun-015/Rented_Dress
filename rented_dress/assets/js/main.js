// slick slider

$(document).ready(function () {
    $('.slider_main').slick({
        Infinity: true,
        autoplay: true,
        speed: 700,
        autoplaySpeed: 5000,
        slidesToShow: 3,
        slidesToScroll: 1,
        // speed: 8000,
        autoplaySpeed: 2000,
        dots: false,
        arrows: true,
        infinite: true,
        prevArrow: '<button type="button" class="prev"><i class="fas fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="next"><i class="fas fa-arrow-right"></i></button>',
    });
});