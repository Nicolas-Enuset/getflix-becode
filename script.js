let btnCategory = document.querySelector(".btnCategory");
let selectionMenu = document.querySelector(".selectionMenu");

selectionMenu.style.display = "none";

btnCategory.addEventListener("mouseover", () => {
  selectionMenu.style.display = "";
});

selectionMenu.addEventListener("mouseover", () => {
  selectionMenu.style.display = "";
});

btnCategory.addEventListener("mouseout", () => {
  selectionMenu.style.display = "none";
});

selectionMenu.addEventListener("mouseout", () => {
  selectionMenu.style.display = "none";
});

let btnRedirection = document.querySelectorAll(".selectionMenu button");

btnRedirection.forEach((btn) => {
  btn.addEventListener("click", () => {
    location.href = "http://localhost/projets/PHP/Getflix/category.php";
    btnValue = btn.value;
    console.log(btnValue);
  });
});
