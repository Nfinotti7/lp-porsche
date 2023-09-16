import PhotoSwipeLightbox from "./assets/photoswipe/photoswipe-lightbox.esm.min.js";

window.onload = function () {
  $(document).on("click", ".scroll__link", function (e) {
    e.preventDefault();
    const href = $(this).attr("href");
    $("html, body").animate(
      {
        scrollTop: $(href).offset().top - 80,
      },
      250
    );
  });

  if ($("#navbar-sticky").length > 0) {
    const firstScrollSpyEl = document.querySelector('[data-bs-spy="scroll"]');
    firstScrollSpyEl.addEventListener("activate.bs.scrollspy", () => {
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
  }

  if ($(".parallax").length > 0) {
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
            ["elInY", "elInY+300"],
            [0, 1],
          ],
        },
      }
    );
  }

  if ($("#similar__cars--carousel").length > 0) {
    new Glide("#similar__cars--carousel", {
      type: "carousel",
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
  }

  if ($("#gallery-carousel").length > 0) {
    new Glide("#gallery-carousel", {
      type: "carousel",
      startAt: 0,
      perView: 1,
      focusAt: "center",
    }).mount();
  }

  if ($("#technical__data").length > 0) {
    $(".technical__data--open").on("click", () => {
      $("#technical__data").addClass("active").css("display", "block");
    });

    $(".technical__data--close").on("click", () => {
      $("#technical__data").removeClass("active");
    });
  }

  if ($(".view__360--section").length > 0) {
    $(".view__360--section .iframe__shield button").on("click", function () {
      $(this).closest(".iframe__shield").hide();
      console.log("clicked");
    });

    $(".view__360--section .iframe__wrapper").on("mouseleave", function () {
      $(this).find(".iframe__shield").show();
    });
  }

  const intervalGoogleSelect = setInterval(() => {
    $("#google__translate select").addClass("form-control");
    $("#google__translate select").attr("id", "google__translate--select");
    if ($("#google__translate select").hasClass("form-control"))
      clearInterval(intervalGoogleSelect);
  }, 500);

  if ($("#gallery").length > 0) {
    const galleryLightbox = new PhotoSwipeLightbox({
      gallery: "#gallery",
      children: "a",
      pswpModule: () => import("./assets/photoswipe/photoswipe.esm.min.js"),
    });
    galleryLightbox.init();
  }

  if ($("#btn__send--form").length > 0) {
    grecaptcha.ready(function () {
      grecaptcha.render("btn__send--form", {
        sitekey: "6LeXAQ4oAAAAAMj0DhaC7J17S-jDUlPlxlrFB3k7",
      });
    });

    $("#btn__send--form").on("click", function (e) {
      e.preventDefault();
      const form = $(this).closest("form");

      if (!form[0].checkValidity()) {
        form[0].reportValidity();
        return;
      }

      Swal.fire({
        title: "Enviando...",
        html: "Aguarde um momento...",
        allowOutsideClick: false,
        allowEscapeKey: false,
        didOpen: async () => {
          Swal.showLoading();
          const token = await grecaptcha.execute();

          try {
            const result = await $.ajax({
              type: "POST",
              url: "./enviar.php",
              data: form.serializeArray(),
            });

            console.log(result);
            if (result == "sucesso") {
              Swal.fire({
                title: "Sucesso",
                text: "Sua mensagem foi enviada com sucesso!",
                icon: "success",
                // timer: 3000,
                // showProgressBar: true,
                confirmButtonText: "Ok",
              }).then((res) => {
                location.reload();
              });
            } else {
              Swal.fire({
                title: "Erro",
                text: "Ocorreu um erro ao enviar a mensagem, tente novamente mais tarde.",
                icon: "error",
                // timer: 3000,
                // showProgressBar: true,
                confirmButtonText: "Ok",
              }).then((res) => {
                location.reload();
              });
            }
          } catch (e) {
            console.log(e);
            Swal.fire({
              title: "Erro",
              text: "Ocorreu um erro ao enviar a mensagem, tente novamente mais tarde.",
              icon: "error",
              // timer: 3000,
              // showProgressBar: true,
              confirmButtonText: "Ok",
            }).then((res) => {
              location.reload();
            });
          }
        },
      });
    });

    const $input = document.querySelector(".phone-mask");
    $input.addEventListener("input", handleInput, false);

    function handleInput(e) {
      e.target.value = phoneMask(e.target.value);
    }

    function phoneMask(phone) {
      return phone
        .replace(/\D/g, "")
        .replace(/^(\d)/, "($1")
        .replace(/^(\(\d{2})(\d)/, "$1) $2")
        .replace(/(\d{4})(\d{1,5})/, "$1-$2")
        .replace(/(-\d{5})\d+?$/, "$1");
    }
  }
};

// if ($('.seccion').length > 0) {
const imagenes = [
  "./public/img01.jpg",
  "./public/img02.jpg",
  "./public/img03.jpg",
  "./public/img04.jpg",
  "./public/img05.jpg",
  "./public/img06.jpg",
  "./public/img07.jpg",
  "./public/img08.jpg",
];
const imagenWrapper = document.querySelector(".imagenWrapper");
const imagenPreview = document.getElementById("imagenPreview");
const range = document.getElementById("imgRange");
const imagenTags = [];
imagenWrapper.classList.add("cargando"); //Se agrega el loader al iniciar

window.addEventListener("load", () => {
  let imgLoaded = 0; //Acumulador que nos va a servir para saber cuando se cargan todas las imagenes
  imagenes.map((imgSrc, index) => {
    if (index == 0) imagenPreview.setAttribute("src", imgSrc); //Renderizamos la primer imagen
    const imagen = new Image(); //Creamos el elemento imagen. Esto nos sirve para no hacer un nuevo request cada que cambia el valor del range
    imagen.setAttribute("src", imgSrc);
    imagen.addEventListener("load", () => {
      imgLoaded++; //Aumentamos el incrementador cuando cada imagen sea cargada
      imagenTags[index] = imagen;
      if (imgLoaded == imagenes.length)
        imagenWrapper.classList.remove("cargando"); //Se remueve el loader cuando todas las imagenes estan cargadas
    });
  });
  range.addEventListener("input", () => {
    console.log(range.value);
    let val = range.value;
    imagenPreview.setAttribute("src", imagenTags[val - 1].getAttribute("src")); //Obtenemos el src de las tags previamente creadas y se lo pasamos al preview para que lo renderize
  });
});
