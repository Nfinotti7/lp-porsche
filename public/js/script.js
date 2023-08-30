window.onload = function () {
  const scrollSpy = new bootstrap.ScrollSpy(document.body, {
    target: "#navbar-sticky",
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
          ["elInY", "elOutY"],
          [0, 1],
        ],
      },
    }
  );
};

$(".dados__tecnicos--open").on("click", () => {
  $("#tecnicos").addClass("active").css("display", "block");
});

$(".dados__tecnicos--close").on("click", () => {
  $("#tecnicos").removeClass("active");
});
