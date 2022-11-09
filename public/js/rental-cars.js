$(document).ready(function () {
    $(".listed__price1").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: '.listed__next1',
        prevArrow: '.listed__prev1',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });

    $(".listed__price2").slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        nextArrow: '.listed__next2',
        prevArrow: '.listed__prev2',
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: false,
                }
            }
        ]
    });


})
