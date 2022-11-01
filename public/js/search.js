let suggest = [];
let mrt = 'mrt_';
let mrt1 = 'mrt1_';
let area = 'area_';
let area1 = 'area1_';
let nbh = 'nbh_';
let nbh1 = 'nbh1_';
let countItems = 0;
function myFunction(su) {
    suggest = su;
    document.getElementById("suggest__search").style.display = "block";
}
$('#input1').on("input", function() {
    suggest.forEach((su) => {
            let suggestId = document.getElementById(su);
            su = su.toLowerCase();
            let in1 = document.getElementById("input1").value;
            if(in1 != "" ) {
                if(su.includes(in1))
                    suggestId.style.display = "block";
                else
                    suggestId.style.display = "none";
            }
            else
                suggestId.style.display = "none";
        })
})

function yourFunction() {
    let su = document.getElementById("suggest__search");
    su.style.display = "none";
}

document.addEventListener('click', function(event) {
    let toggle = document.getElementById("input2__toggle");
    let search2 = document.getElementById("inputSearch2");

    if(!search2.contains(event.target)) {
        toggle.style.display = "none";
    }
    else {
        if(toggle.style.display === "none")
            toggle.style.display = "block";
    }
})

function isCheck(id, id1) {
    let checkBox = document.getElementById(id);
    let checkDiv= document.getElementById("selected__word");
    let checkedItem = document.getElementById(id1);
    ++countItems;

    if(checkBox.checked == true) {
        checkDiv.style.display = "inline-block";
        if(countItems < 4) {
            checkDiv.style.height = "fit-content";
        }
        else {
            checkDiv.style.height = "100px";
        }
        if(true)
            checkedItem.style.display = "flex";
    }
    else {
        checkedItem.style.display = "none";
    }
}
function isCheckMrt(id) {
    isCheck(mrt+id, mrt1+id);
}
function isCheckArea(id) {
    isCheck(area+id, area1+id);
}
function isCheckNbh(id) {
    isCheck(nbh+id, nbh1+id);
}

function removeItem(id, id1) {
    let checkBox = document.getElementById(id);
    let checkedItem = document.getElementById(id1);
    let box = document.getElementById("selected__word");

    countItems--;
    if(countItems < 1) {
        box.style.display = "none";
        countItems = 0;
    }
    checkBox.checked = false;
    checkedItem.style.display = "none";
}
function removeItemMrt(id) {
    removeItem(mrt+id, mrt1+id);
}
function removeItemArea(id) {
    removeItem(area+id, area1+id);
}
function removeItemNbh(id) {
    removeItem(nbh+id, nbh1+id);
}
