$('.brandNames').slick({
    infinite: true,
    slidesToShow: 11,
    slidesToScroll: 11,
    nextArrow: '.brands__next',
    prevArrow: '.brands__prev',
    responsive: [
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
                arrows: false,
                infinite: false,
            }

        }
    ]
});

$('.slides__show').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    nextArrow: '.slides__next',
    prevArrow: '.slides__prev',
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

$(".listed__price").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

    var $elSlide = $(slick.$slides[currentSlide]);

    var sliderObj = $elSlide.closest('.slick-slider');

    if (sliderObj.hasClass('caItems')) {
        return;
    }
});

$(".listed__price").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '.listed__next',
    prevArrow: '.listed__prev',
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

id = ['car1', 'car2', 'car3', 'car4', 'car5'];


id.forEach((slickId) => {
    $("#caItems" + slickId).slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '#item__next' + slickId,
        prevArrow: '#item__prev' + slickId,
    });
})


$('.imgBox1').on('touchstart touchmove mousemove mouseenter', function(e) {
    $('.listed__price').slick('slickSetOption', 'swipe', false, false);
});

$('.imgBox1').on('touchend mouseover mouseout', function(e) {
    $('.listed__price').slick('slickSetOption', 'swipe', true, false);
});

$(".listed__price3").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

    var $elSlide = $(slick.$slides[currentSlide]);

    var sliderObj = $elSlide.closest('.slick-slider');

    if (sliderObj.hasClass('caItems')) {
        return;
    }
});



$(".listed__price3").slick({
    infinite: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    nextArrow: '.listed__next3',
    prevArrow: '.listed__prev3',
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

id2 = ['car1', 'car2', 'car3', 'car4', 'car5'];
id2.forEach((slickId) => {
    $("#caItems3" + slickId).slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        nextArrow: '#item__next3' + slickId,
        prevArrow: '#item__prev3' + slickId,
    });
})


$('.imgBox').on('touchstart touchmove mousemove mouseenter', function(e) {
    $('.listed__price3').slick('slickSetOption', 'swipe', false, false);
});

$('.imgBox').on('touchend mouseover mouseout', function(e) {
    $('.listed__price3').slick('slickSetOption', 'swipe', true, false);
});
