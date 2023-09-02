window.onload = function () {
  const scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: "#navbar-sticky",
  });

  $(window).on("activate.bs.scrollspy", function () {
    if (!$("#navbar-sticky li a.active").length > 0) return;
    const linkOffsetLeft =
      $("#navbar-sticky li a.active").offset().left -
      $("#navbar-sticky").offset().left +
      $("#navbar-sticky").scrollLeft();
    const linkWidth = $("#navbar-sticky li a.active").width();

    $("#scroll__spy--underline").show();
    $("#scroll__spy--underline").animate({
      left: linkOffsetLeft,
      width: linkWidth,
    });

    if (linkOffsetLeft + linkWidth > $(window).width()) {
      $("#navbar-sticky").stop().animate({
        scrollLeft: linkOffsetLeft,
      });
    } else if ($("#navbar-sticky li a.active").offset().left < 0) {
      $("#navbar-sticky")
        .stop()
        .animate({
          scrollLeft: $("#navbar-sticky li a.active").offset().left,
        });
    }
  });

  lax.init();

  // Add a driver that we use to control our animations
  lax.addDriver("scrollY", function () {
    return window.scrollY;
  });

  const parallaxHeight = $(".parallax").height().toFixed() / 2;

  lax.addElements(
    ".parallax__bg--overlay", // Element selector rule
    {
      // Animation data
      scrollY: {
        opacity: [
          [`elInY+${parallaxHeight}`, "elOutY"],
          [0, 0.8],
        ],
      },
    }
  );

  lax.addElements(
    ".parallax__bg img", // Element selector rule
    {
      // Animation data
      scrollY: {
        scale: [
          ["elInY", "elOutY"],
          [1, 1.05],
        ],
      },
    }
  );

  lax.addElements(
    ".parallax__content--text", // Element selector rule
    {
      // Animation data
      scrollY: {
        opacity: [
          ["elInY", "elInY+400"],
          [0, 1],
        ],
      },
    }
  );

  const carCarousel = new Glide("#similar__cars--carousel", {
    type: "slide",
    startAt: 0,
    perView: 3,
    focusAt: "center",
    breakpoints: {
      1024: {
        perView: 2,
      },
      768: {
        perView: 1,
      },
    },
  }).mount();

  $(".technical__data--open").on("click", () => {
    $("#technical__data").addClass("active").css("display", "block");
  });

  $(".technical__data--close").on("click", () => {
    $("#technical__data").removeClass("active");
  });
};
