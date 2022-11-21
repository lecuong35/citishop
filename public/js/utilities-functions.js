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

    placeholder.style.transform = "translate(0px, -25px)";
}

function blurInputText(id1, id2) {
    let input = document.getElementById(id1);
    let placeholder = document.getElementById(id2);

    if(input.value === "") {
        placeholder.style.transform = "translate(0, 0)";
    }
}
