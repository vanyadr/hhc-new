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

document.addEventListener("DOMContentLoaded", () => {
   toggleBurger();
});
