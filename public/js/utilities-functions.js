function clickToggle(id) {
    let ele = document.getElementById(id);

    if(ele.style.display === "none")
        ele.style.display = "flex"
    else
        ele.style.display = "none";
}
function clickToggleFlexCol(id) {
    let ele = document.getElementById(id);

    if(ele.style.display === "none") {
        ele.style.display = "flex";
        ele.style.flexDirection = "column";
    }
    else
        ele.style.display = "none";
}

function clickShowHide(id, id1, id2) {
    let ele = document.getElementById(id);
    let show = document.getElementById(id1);
    let hide = document.getElementById(id2);

    if(show.style.display === "none") {
        show.style.display = "block";
        hide.style.display = "none";
    }
    else {
        show.style.display = "none";
        hide.style.display = "block";
    }

    if(ele.style.display === "none") {
        ele.style.display = "flex";
        ele.style.flexDirection = "column";
    }
    else
        ele.style.display = "none";
}

function clickAddImg(id1, id2, id3, id4, id5, id6) {
    let ele1 = document.getElementById(id1);
    let ele2 = document.getElementById(id2);
    let ele3 = document.getElementById(id3);
    let ele4 = document.getElementById(id4);
    let ele5 = document.getElementById(id5)
    let ele6 = document.getElementById(id6);

    if(ele1.style.display === "none") {
        ele1.style.display = "block";
        ele2.style.display = "flex";
        ele3.style.display = "block";
        ele4.style.display = "none";
        ele5.style.display = "none";
        ele6.style.display = "flex";
    }
    else {
        ele1.style.display = "none";
        ele2.style.display = "none";
        ele3.style.display = "none";
        ele4.style.display = "block";
        ele5.style.display = "block";
    }
}

function chooseBody(id1, id2) {
    let text = document.getElementById(id1+'Text');
    let ele = document.getElementById(id2);

    if(ele.checked) {
        text.innerHTML = id2;
    }
}

function clickReplace(id1, id2) {
    let displayELe = document.getElementById(id1);
    let hiddenEle = document.getElementById(id2);

    if(displayELe.style.display === "none") {
        displayELe.style.display = "block";
        hiddenEle.style.display = "none";
    }
}

if(document.getElementById("minUsedCar")) {
    document.addEventListener('click', function(event) {
        let input = document.getElementById("minUsedCarInput");
        let min = document.getElementById("minUsedCar");

        if(input.contains(event.target) || input.value != "") {
            min.style.transform = "translate(-10px, -20px)";
        }
        else
            min.style.transform = "translate(0px, 0px)";

    })

    document.addEventListener('click', function(event) {
        let input = document.getElementById("maxUsedCarInput");
        let max = document.getElementById("maxUsedCar");

        if(input.contains(event.target) || input.value != "") {
            max.style.transform = "translate(-10px, -20px)";
        }
        else
            max.style.transform = "translate(0px, 0px)";
    })
}

function clickInputText(id1, id2) {
    let input = document.getElementById(id1);
    let placeholder = document.getElementById(id2);

    if(input.value != '') {
        placeholder.style.transform = "translate(0px, 0px)";
    }
    else placeholder.style.transform = "translate(0px, -5px)";
}


function blurInputText(id1, id2) {
    let input = document.getElementById(id1);
    let placeholder = document.getElementById(id2);

    if(input.value == '') {
        placeholder.style.transform = "translate(0, 25px)";
    }
}

function clickCondition(buttonId, textId) {
    let button = document.getElementById(buttonId);
    let text = document.getElementById(textId);

}

// function chooseCategory(text1, text2) {
//     let cate = document.getElementById("cate");
//     let cateText = document.getElementById("cateText");
//     document.getElementById("category").style.display = "none";
//     document.getElementById("formContent").style.display = "block";

//     cate.innerHTML = text1.toString();
//     cateText.innerHTML = text2.toString();
// }

function chooseBrand(id) {
      console.log('ok');
}

function chooseFee(content, id, valueId, feeId) {
    let brand = document.getElementById(valueId);
    let box = document.getElementById(id);
    let fee = document.getElementById(feeId);

    brand.value =  content.toString();
    box.style.display = "none";

    if(fee.style.display === "none") {
        fee.style.display = "block";
    }
    else {
        fee.style.display = "none";
    }
}

function chooseOptionals(content, id, checkId, boxId) {
    let optionals = document.getElementById("optionalChosen");
    let item = document.getElementById(id);
    let check = document.getElementById(checkId);
    let box = document.getElementById(boxId);

    if(item.checked === true) {
        optionals.value +=  content.toString() + ", ";
        check.style.display = "block";
        box.style.backgroundColor = "#cce9e4";
    }
    else {
        optionals.value = optionals.value.replace(content, "");
        optionals.value = optionals.value.replace(",", "");
        check.style.display = "none";
        box.style.backgroundColor = "#fff";
    }

}

function forSales() {
    let sale = document.getElementById("forSale");
    let textSale = document.getElementById("salePrice");

    if(sale.checked) {
        textSale.style.display = "block";
    } else {
        textSale.style.display = "none";
    }
}

function changeValueImage(imgId, inputId) {
    let image = document.getElementById(imgId);
    let [file] = document.getElementById(inputId).files;

    if(file) {
        image.setAttribute('src', URL.createObjectURL(file));
    }

    if(document.getElementById('buttonSave')) {
        document.getElementById("buttonSave").style.backgroundColor = "#008f79";
        document.getElementById("buttonSave").style.cursor = "pointer";
    }

    if(document.getElementById('buttonSaved')) {
        document.getElementById("buttonSaved").style.color = "#008f79";
        document.getElementById("buttonSaved").style.cursor = "pointer";
    }
}

function chooseCategory(cate, cateText, category_id) {
    let cateBox = document.getElementById('cate');
    let cateTextBox = document.getElementById('cateText');
    let category_idBox = document.getElementById('category_id');

    cateBox.innerHTML = cate.toString();
    cateTextBox.innerHTML = cateText.toString();
    category_idBox.setAttribute('value', category_id);

    document.getElementById('category').style.display = "none";
}

function chooseKinds(id, index, sizeOfKind) {
    let ele = document.getElementById(id);

    if(ele.style.display === "none") {
        ele.style.display = "flex";
        ele.style.flexDirection = "column";
    }
    else
        ele.style.display = "none";

    for(let i = 0; i < sizeOfKind; i++) {
        let brand = ('brand' + i).toString();
        if(document.getElementById(brand)) {
            let kind = document.getElementById(brand);
            if(i == index) {
                kind.style.display = "block";
                kind.setAttribute('name', 'brand_id');
            }
            else{
                kind.style.display = "none";
                kind.setAttribute('name', '')
            }
        }
    }
}
