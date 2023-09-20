<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon" />
    <link rel="icon" href="./public/favicon.ico" type="image/x-icon" />
    <title>Esportivos de Luxo - Catálogo</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
      rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;900&display=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./assets/lity/lity.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./assets/catalogo/style.css" />

    <script defer src="https://www.google.com/recaptcha/api.js"></script>
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script defer src="./assets/jquery.min.js"></script>
    <script defer src="./assets/isotope.min.js"></script>
    <script defer src="script.js" type="module"></script>
    <script defer src="./assets/catalogo/script.js"></script>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SBE0R83WT7"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-SBE0R83WT7");
    </script>
  </head>
  <body>
    <section id="banner">
      <figure class="img-banner">
        <img src="./public/banner-2.jpg" alt="" width="100%" height="100%" />
      </figure>

      <div class="banner__content">
        <div class="d-flex align-items-center justify-content-center">
          <h2 class="section__title">Lamborghini Huracan STO</h2>
        </div>

        <div class="container">
          <div class="banner__content--texts">
            <div class="row">
              <div class="col-6 col-md-6 col-lg-4">
                <h3 class="brand"></h3>472kW/639 cv</h3>
                <p>Potência (kW)/Potencia (cv)</p>
              </div>
              <div class="col-6 col-md-6 col-lg-4">
                <h3 class="brand"></h3>3 s</h3>
                <p>Aceleração 0 - 100 km/h</p>
              </div>
              <div class="col-6 col-md-6 col-lg-4">
                <h3 class="brand"></h3>310 km/h</h3>
                <p>Velocidade máxima</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="sticky-menu">
      <div class="container">
        <nav class="navigation">
          <ul class="nav-menu">
            <li class="nav-item"><a href="">Home</a></li>
            <li class="search-item">
              <h5>BUSCAR POR TERMOS:</h5>
              <input type="search" id="searchbar" placeholder="MARCA, MODELO, ANO">
            </li>
          </ul>
        </nav>
      </div>
    </section>

    <section id="catalogo-bd">
      <div class="sorts" class="button-group" id="sorts">
        <button class="button active" data-sort-by="brand">Marca</button>
        <button class="button" data-sort-by="year">Ano</button>
        <button class="button" data-sort-by="price">Maior valor</button>
        <button class="button" data-sort-by="menorvalor">Menor valor</button>
      </div>
      <div class="container">
        <div class="grid">
          <!-- <div class="grid-sizer col-12 col-md-6 col-lg-4 grid-item"></div> -->
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/imglamb.jpg" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">LAMBORGHINI AVENTADOR</h3>
                <p class="year">Ano: 2022</p>
                <p class="price">Valor: R$950.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/AMvalhalla.jpg" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">ASTON MARTIN VALHALLA</h3>
                <p class="year">Ano: 2021</p>
                <p class="price">Valor: R$500.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/FRRroma.jpg" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">FERRARI ROMA</h3>
                <p class="year">Ano: 2023</p>
                <p class="price">Valor: R$600.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/AMdb12.jpg" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">ASTON MARTIN DB12</h3>
                <p class="year">Ano: 2020</p>
                <p class="price">Valor: R$950.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/LBurus.webp" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">LAMBORGHINI URUS</h3>
                <p class="year">Ano: 2019</p>
                <p class="price">Valor: R$400.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/FRRpurosangue.webp" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">FERRARI PUROSANGUE</h3>
                <p class="year">Ano: 2020</p>
                <p class="price">Valor: R$800.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/FRRlaferrari.jpg" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">FERRARI LAFERRARI</h3>
                <p class="year">Ano: 2021</p>
                <p class="price">Valor: R$700.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/PRSC911turbos.webp" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">PORSCHE 911 TURBO S</h3>
                <p class="year">Ano: 2022</p>
                <p class="price">Valor: R$300.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 col-lg-4 grid-item">
            <div class="box-item">
              <figure><img src="./public/PRSCpanamera.webp" alt=""></figure>
              <div class="box-item--desc">
                <h3 class="brand">PORSCHE PANAMERA</h3>
                <p class="year">Ano: 2017</p>
                <p class="price">Valor: R$400.000</p>
              </div>
              <div class="overlay">
                <a href="https://api.whatsapp.com/send?phone=559999999999">Saiba mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'pt'
          },
          'google__translate'
        );
      }
    </script>
    <script type="text/javascript"
      src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <footer>
      <div class="container">
        <div class="footer__wrapper">
          <div class="footer__top">
            <div>
              <label for="google__translate--select">Alterar Idioma</label>
              <div id="google__translate"></div>
            </div>
            <div>
              <a href="./politica-de-privacidade.html">Política de Privacidade</a>
            </div>
          </div>
          <div class="footer__bottom w-100">
            <p>&copy; 2023 Rotas Motors. Todos os direitos reservados.</p>
            <p>Desenvolvido por Rotas Motors</p>
          </div>
        </div>
      </div>
    </footer>
  </body>

</html>
