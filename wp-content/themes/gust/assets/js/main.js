

(() => {
  const mobileMenu = document.querySelector(".js-menu-container");
  const openMenuBtn = document.querySelector(".js-open-menu");
  const closeMenuBtn = document.querySelector(".js-close-menu");
  const menuItems = document.querySelectorAll(".mobile-menu__item");

  const toggleMenu = () => {
    const isMenuOpen =
      openMenuBtn.getAttribute("aria-expanded") === "true" || false;
    openMenuBtn.setAttribute("aria-expanded", !isMenuOpen);
    mobileMenu.classList.toggle("is-open");

    const scrollLockMethod = !isMenuOpen
      ? "disableBodyScroll"
      : "enableBodyScroll";
    // bodyScrollLock[scrollLockMethod](document.body);
  };

  openMenuBtn.addEventListener("click", toggleMenu);
  closeMenuBtn.addEventListener("click", toggleMenu);

  menuItems.forEach((item) => {
    item.addEventListener("click", () => {
      toggleMenu(); // Закрывает модальное окно при нажатии на элемент меню
    });
  });

  window.matchMedia("(min-width: 768px)").addEventListener("change", (e) => {
    if (!e.matches) return;
    mobileMenu.classList.remove("is-open");
    openMenuBtn.setAttribute("aria-expanded", false);
  });
})();



// ------------модификация картинок------------
//
// const programListItem = document.getElementById("program-list");
//
//   const img2 = document.querySelector(".spec-programs-img-2");
//   const imagesContainer = document.querySelector(".spec-programs-images");
//   const img1 = document.querySelector(".spec-programs-img-1");
//
// if (window.matchMedia("(max-width: 768px)").matches) {
//
//   programListItem.addEventListener("click", function () {
//     img2.style.display = "none";
//
//     imagesContainer.style.width = "226px";
//     imagesContainer.style.height = "226px";
//
//     img1.style.width = "226px";
//     img1.style.height = "226px";
//   });
// }
//
//
