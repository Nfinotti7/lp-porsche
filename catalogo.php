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
    <link rel="stylesheet" href="./assets/glidejs/glide.core.min.css" />
    <link rel="stylesheet" href="./assets/photoswipe/photoswipe.css" />
    <link rel="stylesheet" href="./assets/glidejs/glide.theme.min.css" />
    <link rel="stylesheet" href="./assets/lity/lity.min.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="style-catalogo.css" />


    <script defer src="https://www.google.com/recaptcha/api.js"></script>
    <script defer src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script defer src="./assets/bootstrap/js/bootstrap.min.js"></script>
    <script defer src="./assets/jquery.min.js"></script>
    <script defer src="./assets/lax.min.js"></script>
    <script defer src="./assets/glidejs/glide.min.js"></script>
    <script defer src="./assets/lity/lity.min.js"></script>
    <script defer src="script.js" type="module"></script>
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
    <script src="/path/to/isotope.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<!-- or -->
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
</head>
<header class="hdr-catalogo">
    <div>
        <a href="#banner" class="logo">ESPORTIVOS DE LUXO
            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4500 300">
                <title>Porsche</title>
                <path
                    d="M502 221c48.1 0 74-25.9 74-74V74c0-48.1-25.9-74-74-74H0v300h68v-79h434zm6-143v65c0 7.8-4.2 12-12 12H68V66h428c7.8 0 12 4.2 12 12zm228 222c-48.1 0-74-25.9-74-74V74c0-48.1 25.9-74 74-74h417c48.1 0 74 25.9 74 74v152c0 48.1-25.9 74-74 74H736zm411-66c7.8 0 12-4.2 12-12V78c0-7.8-4.2-12-12-12H742c-7.8 0-12 4.2-12 12v144c0 7.8 4.2 12 12 12h405zm675-36c39.844 16.757 67.853 56.1 68 102h-68c0-54-25-79-79-79h-361v79h-68V0h502c48.1 0 74 25.9 74 74v50.14c0 46.06-23.75 71.76-68 73.86zm-12-43c7.8 0 12-4.2 12-12V78c0-7.8-4.2-12-12-12h-428v89h428zm162-81c0-48.1 25.9-74 74-74h492v56h-486c-7.8 0-12 4.2-12 12v42c0 7.8 4.2 12 12 12h422c48.1 0 74 25.9 74 74v30c0 48.1-25.9 74-74 74h-492v-56h486c7.8 0 12-4.2 12-12v-42c0-7.8-4.2-12-12-12h-422c-48.1 0-74-25.9-74-74V74zm661 0c0-48.1 25.9-74 74-74h480v66h-474c-7.8 0-12 4.2-12 12v144c0 7.8 4.2 12 12 12h474v66h-480c-48.1 0-74-25.9-74-74V74zM3817 0v300h-68V183h-407v117h-68V0h68v117h407V0h68zm156 56v66h527v56h-527v66h527v56h-595V0h595v56h-527z">
                </path>
            </svg>-->
        </a>
    </div>
</header>

<body data-bs-spy="scroll" data-bs-target="#navbar-sticky">
    <section id="banner">
        <figure class="img-banner">
            <img src="./public/banner-2.jpg" alt="" width="100%" height="100%" />
        </figure>

        <div class="banner__content">
            <div class="d-flex align-items-center justify-content-center">
                <h2 class="section__title">Lamborghini Huracan STO</h2>
            </div>
            <?php if($isSold){ ?>
            <div class="item__sold--title">
                <h2>VENDIDO</h2>
            </div>
            <?php } ?>
            <div class="container">
                <div class="banner__content--texts">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-4">
                            <h3>472kW/639 cv</h3>
                            <p>Potência (kW)/Potencia (cv)</p>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4">
                            <h3>3 s</h3>
                            <p>Aceleração 0 - 100 km/h</p>
                        </div>
                        <div class="col-6 col-md-6 col-lg-4">
                            <h3>310 km/h</h3>
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
                    <li class="nav-item">Home</li>
                </ul>
                <h5>BUSCAR POR TERMOS:</h5><input type="text" name="search" placeholder="MARCA, MODELO, ANO">
            </nav>
        </div>
    </section>

    <section id="catalogo-bd">
        <div class="btn-section">
            <button class="button active" data-filter=".marca">Marca</button>
            <button class="button" data-filter=".ano">Ano</button>
            <button class="button" data-filter=".maiorvalor">Maior valor</button>
            <button class="button" data-filter=".menorvalor">Menor valor</button>
        </div>
        <div class="container">
            <div class="ctlg-car">
                <figure><img src="./public/imglamb.jpg" alt=""></figure>
                <h3>LAMBORGHINI AVENTADOR</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/AMvalhalla.jpg" alt=""></figure>
                <h3>ASTON MARTIN VALHALLA</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/AMdb12.jpg" alt=""></figure>
                <h3>ASTON MARTIN DB12</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/LBurus.webp" alt=""></figure>
                <h3>LAMBORGHINI URUS</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/FRRpurosangue.webp" alt=""></figure>
                <h3>FERRARI PUROSANGUE</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/FRRroma.jpg" alt=""></figure>
                <h3>FERRARI ROMA</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/FRRlaferrari.jpg" alt=""></figure>
                <h3>FERRARI LAFERRARI</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/PRSC911turbos.webp" alt=""></figure>
                <h3>PORSCHE 911 TURBO S</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
            <div class="ctlg-car">
                <figure><img src="./public/PRSCpanamera.webp" alt=""></figure>
                <h3>PORSCHE PANAMERA</h3>
                <p>Ano: xxxx</p>
                <p>Valor: xxxx</p>
                <div class="overlay">
                    <a href="#">Saiba mais</a>
                </div>
            </div>
        </div>


    </section>
</body>

</html>
