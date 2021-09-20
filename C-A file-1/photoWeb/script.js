const toggle = document.querySelector(".toggle");
const menu = document.querySelector(".menu");
const items = document.querySelectorAll(".item");

 // Toggle mobile menu 
function toggleMenu() {
  if (menu.classList.contains("active")) {
    menu.classList.remove("active");
    toggle.querySelector("a").innerHTML = "<i class='fas fa-bars'></i>";
  } else {
    menu.classList.add("active");
    toggle.querySelector("a").innerHTML = "<i class='fas fa-times'></i>";
  }
}

 // Close Submenu From Anywhere 
function closeSubmenu(e) {
  let isClickInside = menu.contains(e.target);
}
 // Event Listeners 
toggle.addEventListener("click", toggleMenu, false);
for (let item of items) 
document.addEventListener("click", closeSubmenu, false);

// resize console.log
function sniffer(message) {

console.log("onResize has been: " + message);

}


