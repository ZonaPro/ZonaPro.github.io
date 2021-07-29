document.getAnimations("icon-menu").addEvenlistener("click", mostrar_menu);

function mostrar_menu(){

    document.getElementById("move-content").classList.toggle('move-content-all');
    document.getElementById("show-menu").classList.toggle('show-lateral');
}