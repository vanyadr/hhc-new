const toggleBurger = () => {
   const btn = document.querySelector("#open-burger");
   const menu = document.querySelector("#burger");
   const closer = document.querySelector("#close-burger");

   btn.addEventListener("click", () => {
      menu.classList.add("active");
   });
   closer.addEventListener("click", () => {
      menu.classList.remove("active");
   });
};
const changeHeaderOnScroll = () => {
   const header = document.querySelector("header");

   document.addEventListener("scroll", () => {
      if (window.pageYOffset > 10) {
         header.classList.add("scrolled");
      } else {
         header.classList.remove("scrolled");
      }
   });
};

document.addEventListener("DOMContentLoaded", () => {
   changeHeaderOnScroll();
   toggleBurger();
});
