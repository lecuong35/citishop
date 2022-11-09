$('.motorBrandNames').slick({
    infinite: true,
    slidesToShow: 11,
    slidesToScroll: 2,
    nextArrow: '.brands__next1',
    prevArrow: '.brands__prev1',
    responsive: [
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 3,
                arrows: false,
                infinite: false,
            }

        }
    ]
});

$(".listed__price10").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    nextArrow: '.listed__next10',
    prevArrow: '.listed__prev10',
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

$(".listed__price11").slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    nextArrow: '.listed__next11',
    prevArrow: '.listed__prev11',
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
