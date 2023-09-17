$(document).ready(function () {
  const buttons = document.querySelectorAll(".sorts .button");

  buttons.forEach((option) => {
    option.addEventListener("click", () => {
      document.querySelector("button.active").classList.remove("active");
      option.classList.add("active");
    });
  });
  var $grid = $(".ctlg-card").isotope({
    itemSelector: ".box-item",
    layoutMode: "fitRows",
    getSortData: {
      marca: ".marca",
      year: ".year",
      preco: ".preco",
      menorvalor: ".preco",
    },
  });

  $grid.isotope({
    sortAscending: {
      preco: false,
      menorvalor: true,
    },
  });
  $("#sorts").on("click", "button", function () {
    var sortByValue = $(this).attr("data-sort-by");
    $grid.isotope({ sortBy: sortByValue });
  });

  document.getElementById("searchbar").addEventListener("input", function () {
    $grid.isotope({
      // filter element with numbers greater than 50
      filter: function () {
        var carName = $(this).find(".marca").text();

        const input = document.getElementById("searchbar").value.toUpperCase();
        return carName.toUpperCase().indexOf(input) > -1 ? true : false;
      },
    });
  });
});

// Pegar nome do carro atual, transformar para upper case
// Filtrar esse nome com o input do usuario pegando o input #searchbar
// Se esse nome atual tiver o texto buscado retornar true senao false
// Declare variables
// Loop through all list items, and hide those who don't match the search query
