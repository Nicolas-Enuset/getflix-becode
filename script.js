let dropdown = document.querySelector(".dropdown");

let carousel = document.querySelectorAll(".categoryItem");

if (window.location == "http://localhost/projets/PHP/Getflix/mainPage.php") {
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
}
