window.onload = function () {
  lax.init();

  // Add a driver that we use to control our animations
  lax.addDriver("scrollY", function () {
    return window.scrollY;
  });

  lax.addElements(
    ".parallax__bg--overlay", // Element selector rule
    {
      // Animation data
      scrollY: {
        opacity: [
          [
            $(".parallax").offset().top,
            $(".parallax").offset().top + $(".parallax").height() - 200,
          ],
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
          [
            $(".parallax").offset().top,
            $(".parallax").offset().top + $(".parallax").height(),
          ],
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
          [
            $(".parallax").offset().top,
            $(".parallax").offset().top +
              $(".parallax__content").height() +
              $(".parallax__content--title").height() * 2,
          ],
          [0, 1],
        ],
      },
    }
  );
};
