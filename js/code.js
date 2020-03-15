const boton = document.querySelector(".responsive-button");
const menu = document.querySelector(".list-menu");
boton.addEventListener("click", toogleMenu);
function toogleMenu(){
  if (menu.classList.contains("active")) {
    menu.classList.remove("active")
  }else{
    menu.classList.add("active");
  }
}