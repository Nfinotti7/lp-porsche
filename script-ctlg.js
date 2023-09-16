("use strict");

const buttons = document.querySelectorAll(".sorts .button");

buttons.forEach((option) => {
  option.addEventListener("click", () => {
    document.querySelector("button.active").classList.remove("active");
    option.classList.add("active");
  });
});
$(document).ready(function () {
  var $grid = $(".grid").isotope({
    itemSelector: ".box-item",
    layoutMode: "fitRows",
    getSortData: {
      marca: ".marca",
      ano: ".year",
      preco: ".preco",
    },
  });

  $("#sorts").on("click", "button", function () {
    var sortByValue = $(this).attr("data-sort-by");
    $grid.isotope({ sortBy: sortByValue });
  });
});
