let btnCategory = document.querySelector(".btnCategory");
let selectionMenu = document.querySelector(".selectionMenu");

if (window.location == "http://localhost/projets/PHP/Getflix/mainPage.php") {
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
}

let btnRedirection = document.querySelectorAll(".selectionMenu button");

let titleCategory = document.querySelectorAll("#category h3");

let btnCat = [];

if (window.location == "http://localhost/projets/PHP/Getflix/category.php") {
  titleCategory[0].style.display = "none";
  titleCategory[1].style.display = "none";
  titleCategory[2].style.display = "none";
  titleCategory[3].style.display = "none";
  titleCategory[4].style.display = "none";
  console.log(btnCat);
}

btnRedirection.forEach((btn) => {
  btn.addEventListener("click", () => {
    btnCat.push(btn.value);
    return btnCat;

    // console.log(btn.value);
    // switch (btn.value) {
    //   case "action":
    //     titleCategory[0].style.display = "";
    //     break;
    //   case "thriller":
    //     titleCategory[1].style.display = "";
    //     break;
    //   case "comedy":
    //     titleCategory[2].style.display = "";
    //     break;
    //   case "sci-fi":
    //     titleCategory[3].style.display = "";
    //     break;
    //   case "drama":
    //     titleCategory[4].style.display = "";
    //     break;
    // }
  });
});
