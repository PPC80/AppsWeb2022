let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");

menu.addEventListener("click", function() {
    navbar.classList.toggle("active");
});

window.onscroll = () => {
    navbar.classList.remove("active");
}

// loader
window.addEventListener("load", function(){
    document.getElementById("loader").classList.toggle("loader2")
});

// avatar
function mostrarAvatar() {
    // Supongamos que la URL del avatar se almacena en una variable llamada "avatarUrl"
    var avatarUrl = "./img/user-solid.svg";
    var avatar = document.getElementById("avatar");
    avatar.src = avatarUrl;
}

function cerrarSesion() {
    var avatar = document.getElementById("avatar");
    avatar.src = "";
}

// avatar sub menus
let subMenu = document.getElementById("subMenu");

function toggleMenu (){
    subMenu.classList.toggle("open-menu") ;
}
