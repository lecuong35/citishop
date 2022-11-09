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
    infinite: true,
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

$(".caItems").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: '.item__next',
    prevArrow: '.item__prev',
});

$('.caItems').on('touchstart touchmove mousemove mouseenter', function(e) {
    $('.listed__price').slick('slickSetOption', 'swipe', false, false);
    $('.caItems').slick('slickSetOption', 'accessibility', true, false);
});

$('.caItems').on('touchend mouseover mouseout', function(e) {
    $('.listed__price').slick('slickSetOption', 'swipe', true, false);
    $('.caItems').slick('slickSetOption', 'accessibility', false, false);
});

$(".listed__price3").on('init reInit afterChange', function(event, slick, currentSlide, nextSlide) {

    var $elSlide = $(slick.$slides[currentSlide]);

    var sliderObj = $elSlide.closest('.slick-slider');

    if (sliderObj.hasClass('caItems')) {
        return;
    }
});

$(".listed__price3").slick({
    infinite: true,
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

$(".caItems3").slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    nextArrow: '.item__next3',
    prevArrow: '.item__prev3',
});

$('.caItems3').on('touchstart touchmove mousemove mouseenter', function(e) {
    $('.listed__price3').slick('slickSetOption', 'swipe', false, false);
    $('.caItems3').slick('slickSetOption', 'accessibility', true, false);
});

$('.caItems3').on('touchend mouseover mouseout', function(e) {
    $('.listed__price3').slick('slickSetOption', 'swipe', true, false);
    $('.caItems3').slick('slickSetOption', 'accessibility', false, false);
});
