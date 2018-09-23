function run_first() {
    if(sessionStorage.item_id) {
        document.getElementById(sessionStorage.item_id.toString()).classList.add("text-white");
    }
    else {
        document.getElementById("0").classList.add("text-white");
    }
}

function nav_item_selected(item_id) {
    for(i = 0; i < 6; i++) {
        document.getElementById(i.toString()).classList.remove("text-white");
    }
    document.getElementById(item_id.toString()).classList.add("text-white");

    //store item_id in sessionStorage
    sessionStorage.item_id = item_id;
}
