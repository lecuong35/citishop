function getURL(url, id, idURL) {
    let form = document.getElementById(id);
    form.setAttribute('action', url+idURL+'/edit');
}

function getAddURL(url, id) {
    let form = document.getElementById(id);
    form.setAttribute('action', url);
}
 function postURL(url, id) {
    let form = document.getElementById(id);
    form.setAttribute('action', url);
 }

 function changeName(id) {
    let but = document.getElementById(id);
    but.style.cursor = "pointer";
    but.disabled = false;
 }

 function chooseKind(id, size) {
    let kind = document.getElementById(id);
    for(let i = 0; i < parseInt(size); i++) {
        let brand = document.getElementById('edit'+i);
        let select = document.getElementById('brand_cate'+i);
        if(kind.options[i].selected == true) {
            brand.style.display = "block";
            select.setAttribute('name', 'brand_id');
        }
        else {
            brand.style.display = "none";
            select.setAttribute('name', '');
        }
    }
    
 }

 function chooseKindAdd(id, size) {
    let kind = document.getElementById(id);
    for(let i = 0; i < parseInt(size); i++) {
        let brand = document.getElementById('add'+i);
        let select = document.getElementById('brand_for_cate'+i);
        if(kind.options[i].selected == true) {
            brand.style.display = "block";
            select.setAttribute('name', 'kind_id');
        }
        else {
            brand.style.display = "none";
            select.setAttribute('name', '');
        }
    }
    
 }