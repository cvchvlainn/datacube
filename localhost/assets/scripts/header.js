// общие переменные
let body = document.querySelector("body");

// гамбургер меню
let btnHamburger = document.querySelector(".header-menu__btnHamburgerMenu");
let menuHamburger = document.querySelector(".header-menu__hamburgerMenu");

btnHamburger.addEventListener("click", (event) => {
   event.preventDefault();

   menuHamburger.classList.toggle("active");
   
   if(menuHamburger.classList.contains("active")) {
      menuHamburger.style.display = "flex";
   } else {
      menuHamburger.style.display = "none";
   }
});

// модальное окно
let openModalBtns = document.querySelectorAll(".header-menu__openModal");
let darkening = document.querySelector(".darkening");

openModalBtns.forEach((btn) => {
   btn.addEventListener("click", (event) => {
      event.preventDefault();
   
      darkening.style.display = "flex";
      body.style.overflowY = "hidden";
   });
});

let btnClose = document.querySelector(".modal-window__close");

btnClose.addEventListener("click", () => {
   darkening.style.display = "none";
   body.style.overflowY = "auto";
});

let modalAuth = document.querySelector(".modal-window__auth");
let modalReg = document.querySelector(".modal-window__reg");
let btnAuth = document.querySelector(".modal-window__content__noteAuth");
let btnReg = document.querySelector(".modal-window__content__noteReg");

btnReg.addEventListener("click", (event) => {
   event.preventDefault();

   modalAuth.style.display = "none";
   modalReg.style.display = "block";
});

btnAuth.addEventListener("click", (event) => {
   event.preventDefault();

   modalAuth.style.display = "block";
   modalReg.style.display = "none";
});