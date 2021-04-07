let dropdown = document.querySelector(".dropdown");

let carousel = document.querySelectorAll(".categoryItem");

dropdown.addEventListener("mouseover", () => {
  carousel.forEach((el) => {
    el.style.zIndex = "-1";
  });
});

dropdown.addEventListener("mouseout", () => {
  carousel.forEach((el) => {
    el.style.zIndex = "";
  });
});
