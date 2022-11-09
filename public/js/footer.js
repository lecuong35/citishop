function clickToggle(id) {
    let toggle = document.getElementById(id);

    if(toggle.style.display == "none") {
        toggle.style.display = "block";
    }
    else {
        toggle.style.display = "none";
    }
}
