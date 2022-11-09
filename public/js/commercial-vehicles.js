$('.slides__commercial').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    nextArrow: '.commercial__next',
    prevArrow: '.commercial__prev',
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

$(".listed__price6").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    nextArrow: '.listed__next6',
    prevArrow: '.listed__prev6',
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

$(".listed__price7").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 1,
    nextArrow: '.listed__next7',
    prevArrow: '.listed__prev7',
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

