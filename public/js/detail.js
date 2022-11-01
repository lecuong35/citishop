
$('.slider-img').slick({
  slidesToShow: 3,
  slidesToScroll: 3,
  arrows: true, 
  prevArrow: '.arrow_prev',
  nextArrow: '.arrow_next',
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 640,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    ]
});
// let defaultTransform = 0;
// function goNext() {
//     defaultTransform = defaultTransform - 474;
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) >= slider.scrollWidth / 1.7) defaultTransform = 0;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// next.addEventListener("click", goNext);
// function goPrev() {
//     var slider = document.getElementById("slider");
//     if (Math.abs(defaultTransform) === 0) defaultTransform = 0;
//     else defaultTransform = defaultTransform + 472;
//     slider.style.transform = "translateX(" + defaultTransform + "px)";
// }
// prev.addEventListener("click", goPrev);


document.getElementById('box-img-show').addEventListener('click',
function(){
    document.querySelector('.bg-modal').style.display = 'inline';
});

document.querySelector('.close').addEventListener('click',
function(){
    document.querySelector('.bg-modal').style.display = 'none';
    document.querySelector('.content').style.display = '';
    document.querySelector('.wrapper').style.display = '';
    document.querySelector('.footer').style.display = '';
});

document.getElementById('box-img-show').addEventListener('click',
function(){
    document.querySelector('.content').style.display = 'none';
    document.querySelector('.wrapper').style.display = 'none';
    document.querySelector('.footer').style.display = 'none';
});


$('.slider-for').slick({
slidesToShow: 1,
slidesToScroll: 1,
arrows: false,
fade: false,
asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
slidesToShow: 5,
asNavFor: '.slider-for',
dots: false,
arrows: false,
fade: false,
focusOnSelect: true,
responsive: [
{
  breakpoint: 1024,
  settings: {
    slidesToShow: 3,
    slidesToScroll: 3,
    infinite: true,
    dots: false
  }
},
{
  breakpoint: 640,
  settings: {
    slidesToShow: 2,
    slidesToScroll: 2
  }
},
]
});

$('a[data-slide]').click(function(e) {
e.preventDefault();
var slideno = $(this).data('slide');
$('.slider-nav').slick('slickGoTo', slideno - 1);
});


document.getElementById('login-face').addEventListener('click',
function(){
    document.querySelector('.modal-login').style.display = 'inline';
});



