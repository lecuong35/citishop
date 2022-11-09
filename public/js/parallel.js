$('.slides__parallel').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    nextArrow: '.parallel__next',
    prevArrow: '.parallel__prev',
    responsive: [
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
});

$(".listed__price4").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    nextArrow: '.listed__next4',
    prevArrow: '.listed__prev4',
    responsive: [
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            }
        }
    ]
});

$(".listed__price5").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    nextArrow: '.listed__next5',
    prevArrow: '.listed__prev5',
    responsive: [
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
            }
        }
    ]
});
