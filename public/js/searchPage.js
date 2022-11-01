function changeBg(bgId, eleId) {
    let bg = document.getElementById(bgId);
    let circle = document.getElementById(eleId);

    if (bg.style.backgroundColor == "rgb(240 241 241 / var(--tw-bg-opacity))") {
        bg.style.backgroundColor = "rgb(2 105 88 / var(--tw-bg-opacity))";
        circle.style.transform = "translateX(27px)";
    }
    else {
        bg.style.backgroundColor = "rgb(240 241 241 / var(--tw-bg-opacity))";
        circle.style.transform = "translateX(0px)";
    }
}

function cateFilter(id) {
    let item = document.getElementById(id);
    if(item.style.display == "none") {
        item.style.display = "block";
    }
    else
        item.style.display = "none";
}
function cateSubFilter(id1, id2) {
    let item = document.getElementById(id1);
    let itemList = document.getElementById(id2);
    if(item) {
        if(item.style.display == "none")
                item.style.display = "block";
        else
            item.style.display = "none";
    }

    if(itemList ) {
        if(itemList.style.display == "none")
            itemList.style.display = "block";
        else
            itemList.style.display = "none";
    }
}

document.addEventListener('click', function(event) {
    let input = document.getElementById("minimumInput");
    let min = document.getElementById("minimum");

    if(input.contains(event.target) || input.value != "") {
        min.style.transform = "translate(-10px, -20px)";
    }
    else
        min.style.transform = "translate(0px, 0px)";

})

document.addEventListener('click', function(event) {
    let input = document.getElementById("maximumInput");
    let max = document.getElementById("maximum");

    if(input.contains(event.target) || input.value != "") {
        max.style.transform = "translate(-10px, -20px)";
    }
    else
        max.style.transform = "translate(0px, 0px)";
})

document.addEventListener('click', function(event) {
   let modalBox = document.getElementById("moreFilter");
   let modal = document.getElementById("filter1");
   // let modalContent = document.getElementById("modalContent1");
   if(!modal.contains(event.target) && modalBox.style.display == "none") {
       modal.style.zIndex = "9";
   }
})

function showModalSearch(id) {
    let modal = document.getElementById(id);
    let gender = document.getElementById("genderModal");
    let type = document.getElementById("typeModal");
    let access = document.getElementById("accessModal");
    let condition = document.getElementById("conditionModal");
    let price = document.getElementById("priceModal");
    let ship = document.getElementById("shipModal");
    let caro = document.getElementById("carousellModal");
    let deal = document.getElementById("dealModal");
    let footer = document.getElementById("footerModal");

    if(modal.style.display == "none") {
        modal.style.display = "block";
        gender.style.display = "none";
        type.style.display = "none";
        access.style.display = "none";
        condition.style.display = "none";
        price.style.display = "none";
        ship.style.display = "none";
        caro.style.display = "none";
        deal.style.display = "none";
        footer.style.display = "none";
    }
    else {
        modal.style.display = "none";
        gender.style.display = "block";
        type.style.display = "block";
        access.style.display = "block";
        condition.style.display = "block";
        price.style.display = "block";
        ship.style.display = "block";
        caro.style.display = "block";
        deal.style.display = "block";
        footer.style.display = "block";
    }

}

function changeZ(id) {
    let box = document.getElementById(id);
    box.style.zIndex = "11";
}
