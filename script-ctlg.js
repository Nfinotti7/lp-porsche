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
    masonry: {
      columnWidth: 100,
      fitWidth: true,
    },
    getSortData: {
      brand: ".brand",
      year: ".year",
      price: ".price",
      menorvalor: ".price",
    },
  });

  $grid.isotope({
    sortAscending: {
      price: false,
      menorvalor: true,
      year: false,
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
        var carName = $(this).find(".brand").text();
        var carYear = $(this).find(".year").text();
        var carPrice = $(this).find(".price").text();

        const input = document.getElementById("searchbar").value.toUpperCase();

        if (
          carName.toUpperCase().indexOf(input) > -1 ||
          carYear.toUpperCase().indexOf(input) > -1 ||
          carPrice.toUpperCase().indexOf(input) > -1
        ) {
          return true;
        } else {
          return false;
        }
      },
    });
  });
});

// Pegar nome do carro atual, transformar para upper case
// Filtrar esse nome com o input do usuario pegando o input #searchbar
// Se esse nome atual tiver o texto buscado retornar true senao false
// Declare variables
// Loop through all list items, and hide those who don't match the search query
