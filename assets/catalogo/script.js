$(document).ready(function () {
  const buttons = document.querySelectorAll('.sorts .button');

  buttons.forEach((option) => {
    option.addEventListener('click', () => {
      document.querySelector('button.active').classList.remove('active');
      option.classList.add('active');
    });
  });

  const $grid = $('#catalogo-bd .grid').isotope({
    itemSelector: '.grid-item',
    layoutMode: 'fitRows',
    // percentPosition: true,
    // masonry: {
    //   columnWidth: '.grid-sizer',
    // },
    getSortData: {
      brand: '.brand',
      year: '.year',
      price: '.price',
      menorvalor: '.price',
    },
    sortAscending: {
      brand: true,
      price: false,
      menorvalor: true,
      year: false,
    },
  });

  $('#sorts').on('click', 'button', function () {
    var sortByValue = $(this).attr('data-sort-by');
    $grid.isotope({ sortBy: sortByValue });
  });

  document.getElementById('searchbar').addEventListener(
    'input',
    debounce(function () {
      $grid.isotope({
        // filter element with numbers greater than 50
        filter: function () {
          var carName = $(this).find('.brand').text();
          var carYear = $(this).find('.year').text();
          var carPrice = $(this).find('.price').text();

          const input = document.getElementById('searchbar').value.toUpperCase();

          if (carName.toUpperCase().indexOf(input) > -1 || carYear.toUpperCase().indexOf(input) > -1 || carPrice.toUpperCase().indexOf(input) > -1) {
            return true;
          } else {
            return false;
          }
        },
      });
    }, 1000)
  );

  // debounce so filtering doesn't happen every millisecond
  function debounce(fn, threshold) {
    var timeout;
    threshold = threshold || 100;
    return function debounced() {
      clearTimeout(timeout);
      var args = arguments;
      var _this = this;
      function delayed() {
        fn.apply(_this, args);
      }
      timeout = setTimeout(delayed, threshold);
    };
  }
});
