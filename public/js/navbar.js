function showItemNav(id) {
    let chevronId1 = id + 'chevron1';
    let items = document.getElementById(id+'chev');
    let chevron = document.getElementById(chevronId1)
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
