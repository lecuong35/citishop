
$('.slides__show').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    nextArrow: '.button__next',
    prevArrow: '.button__prev',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 5,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }

    ]
});

$('.bicycle__topic').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 5,
    nextArrow: '.bi__next',
    prevArrow: '.bi__prev',
});

$('.slashed__price').slick({
    infinite: true,
    slidesToShow: 5,
    slidesToScroll: 2,
    nextArrow: '.slash__next',
    prevArrow: '.slash_prev',
    responsive: [
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 2,
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }
    ]
});

// function slashUnSLick() {
//     $('.slashed__price').unslick();
// }


let count1 = 0;
let next = document.getElementById("next");
let prev = document.getElementById("prev");

$('.button__prev').click( function () {
    count1--;
    if(count1 < 0) {
        count1 = 0;
        prev.style.display = "none";
        next.style.display = "flex";
    }
    else {
        prev.style.display = "flex";
        next.style.display = "flex";
    }
})
$('.button__next').click( function () {
    count1++;
    if(count1 > 2) {
        count1 = 2;
        next.style.display = "none";
        prev.style.display = "flex";
    }
    else {
        next.style.display = "flex";
        prev.style.display = "flex";
    }
})

function showItems(id) {
    let chevronId = id + 'chevron';
    let items = document.getElementById(id);
    let chevron = document.getElementById(chevronId)
    // items.style.display = "block";
    let isShow = items.style.display;
    if(isShow === "none") {
        items.style.display = "block";
        chevron.style.transform = "rotate(-180deg)"
    }
    else {
        items.style.display = "none";
        chevron.style.transform = "rotate(0deg)"
    }
}

function clickTopic(id) {
    let bi = document.getElementById("bi1");
    let co = document.getElementById("co2");
    let le = document.getElementById("le3");
    let ik = document.getElementById("ik4");
    let bro = document.getElementById("bro5");
    let pl = document.getElementById("pl6");

    if(id === 1) {
        bi.style.display = "flex";
        co.style.display = "none";
        le.style.display = "none";
        ik.style.display = "none";
        bro.style.display = "none";
        pl.style.display = "none";
    }
    else if(id === 3) {
        bi.style.display = "none";
        co.style.display = "none";
        le.style.display = "flex";
        ik.style.display = "none";
        bro.style.display = "none";
        pl.style.display = "none";

        $('.lego__topic').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            nextArrow: '.le__next',
            prevArrow: '.le__prev',
        });
    }
    else if(id === 2) {
        bi.style.display = "none";
        co.style.display = "flex";
        le.style.display = "none";
        ik.style.display = "none";
        bro.style.display = "none";
        pl.style.display = "none";

        $('.coffee__topic').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            nextArrow: '.co__next',
            prevArrow: '.co__prev',
        });
    }
    else if(id === 4) {
        bi.style.display = "none";
        co.style.display = "none";
        le.style.display = "none";
        ik.style.display = "flex";
        bro.style.display = "none";
        pl.style.display = "none";

        $('.ikea__topic').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            nextArrow: '.ik__next',
            prevArrow: '.ik__prev',
        });
    }
    else if(id === 5) {
        bi.style.display = "none";
        co.style.display = "none";
        le.style.display = "none";
        ik.style.display = "none";
        bro.style.display = "flex";
        pl.style.display = "none";

        $('.brompton__topic').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            nextArrow: '.bro__next',
            prevArrow: '.bro__prev',
        });
    }
    else{
        bi.style.display = "none";
        co.style.display = "none";
        le.style.display = "none";
        ik.style.display = "none";
        bro.style.display = "none";
        pl.style.display = "flex";

        $('.plants__topic').slick({
            infinite: true,
            slidesToShow: 5,
            slidesToScroll: 5,
            nextArrow: '.pl__next',
            prevArrow: '.pl__prev',
        });

    }
}

