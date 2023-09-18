<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="./public/favicon.ico" type="image/x-icon">
    <link rel="icon" href="./public/favicon.ico" type="image/x-icon">
    <title>Esportivos de Luxo - Brasil</title>

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;500;600;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/glidejs/glide.core.min.css">
    <link rel="stylesheet" href="./assets/photoswipe/photoswipe.css">
    <link rel="stylesheet" href="./assets/glidejs/glide.theme.min.css">
    <link rel="stylesheet" href="./assets/lity/lity.min.css">
    <link rel="stylesheet" href="style.css">


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
    gtag('js', new Date());

    gtag('config', 'G-SBE0R83WT7');
    </script>
</head>
<!--<header>
    <div>
      <a href="#banner" class="logo">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 4500 300">
          <title>Porsche</title>
          <path
            d="M502 221c48.1 0 74-25.9 74-74V74c0-48.1-25.9-74-74-74H0v300h68v-79h434zm6-143v65c0 7.8-4.2 12-12 12H68V66h428c7.8 0 12 4.2 12 12zm228 222c-48.1 0-74-25.9-74-74V74c0-48.1 25.9-74 74-74h417c48.1 0 74 25.9 74 74v152c0 48.1-25.9 74-74 74H736zm411-66c7.8 0 12-4.2 12-12V78c0-7.8-4.2-12-12-12H742c-7.8 0-12 4.2-12 12v144c0 7.8 4.2 12 12 12h405zm675-36c39.844 16.757 67.853 56.1 68 102h-68c0-54-25-79-79-79h-361v79h-68V0h502c48.1 0 74 25.9 74 74v50.14c0 46.06-23.75 71.76-68 73.86zm-12-43c7.8 0 12-4.2 12-12V78c0-7.8-4.2-12-12-12h-428v89h428zm162-81c0-48.1 25.9-74 74-74h492v56h-486c-7.8 0-12 4.2-12 12v42c0 7.8 4.2 12 12 12h422c48.1 0 74 25.9 74 74v30c0 48.1-25.9 74-74 74h-492v-56h486c7.8 0 12-4.2 12-12v-42c0-7.8-4.2-12-12-12h-422c-48.1 0-74-25.9-74-74V74zm661 0c0-48.1 25.9-74 74-74h480v66h-474c-7.8 0-12 4.2-12 12v144c0 7.8 4.2 12 12 12h474v66h-480c-48.1 0-74-25.9-74-74V74zM3817 0v300h-68V183h-407v117h-68V0h68v117h407V0h68zm156 56v66h527v56h-527v66h527v56h-595V0h595v56h-527z">
          </path>
        </svg>
      </a>
    </div>
  </header>-->

<body data-bs-spy="scroll" data-bs-target="#navbar-sticky">
    <section id="banner">
        <figure class="img-banner">
            <img src="./public/banner-2.jpg" alt="" width="100%" height="100%">
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

    <?php if(!$isSold){ ?>
    <section class="sticky-menu">
        <div class="container">
            <nav class="navigation">
                <ul class="nav-menu" role="tablist" id="navbar-sticky">
                    <li class="nav-item"><a class="scroll__link" href="#about">Sobre o STO</a></li>
                    <li class="nav-item"><a class="scroll__link" href="#exterior-360-view">360° Exterior</a></li>
                    <li class="nav-item"><a class="scroll__link" href="#interior-360-view">360° Interior</a></li>
                    <li class="nav-item"><a class="technical__data--open">Dados Técnicos</a></li>
                    <li class="nav-item"><a class="scroll__link" href="#gallery">Galeria</a></li>
                    <li class="nav-item"><a class="scroll__link" href="#contact">Contato</a></li>
                    <span id="scroll__spy--underline"></span>
                </ul>
            </nav>
        </div>
    </section>

    <section id="about">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-lg-8 px-0">
                    <div class="about__img--wrapper">
                        <!-- <figure>
                  <a href="./public/img02.jpg" data-lity>
                    <img src="./public/img02.jpg" alt=""
                      width="100%" class="about__img">
                  </a>
                </figure> -->
                        <iframe src="https://www.youtube.com/embed/JxnLn2Zw15M" frameborder="0" scrolling="no"
                            allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="about__content py-4">
                        <h1 class="about__content--title">Lamborghini STO</h1>
                        <p>O Huracan STO - que significa em italiano <b>Super Trofeo Omologata</b>, ou homologação - é
                            essencialmente projetado para ser uma versão de estrada do carro de corrida Huracan Super
                            Trofeo Evo da
                            Lamborghini, trazendo grandes emoções e uma olhar que vai virar a cabeça onde quer que você
                            vá.</p>
                        <a class="scroll__link btn btn_01" href="#contact">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
                            </svg>
                            Conhecer agora
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="parallax-section">
        <div class="parallax">
            <div class="parallax__bg">
                <figure>
                    <img class="" src="./public/lamb-4-2.jpg" alt="">
                </figure>
                <div class="parallax__bg--overlay"></div>
            </div>
            <div class="container">
                <div class="parallax__content">
                    <h2 class="parallax__content--title">Motor V10 de 5,2 litros naturalmente aspirado.</h2>
                    <p class="parallax__content--text"></p>
                </div>
            </div>
        </div>
        <div class="parallax">
            <div class="parallax__bg">
                <figure>
                    <img src="./public/lamb-2-2.jpg" alt="">
                </figure>
                <div class="parallax__bg--overlay"></div>
            </div>
            <div class="container">
                <div class="parallax__content">
                    <h2 class="parallax__content--title">Scoop superior para ajudar no resfriamento do V10.</h2>
                    <p class="parallax__content--text"></p>
                </div>
            </div>
        </div>
        <div class="parallax">
            <div class="parallax__bg">
                <figure>
                    <img src="./public/lamb-1-2.jpg" alt="">
                </figure>
                <div class="parallax__bg--overlay"></div>
            </div>
            <div class="container">
                <div class="parallax__content">
                    <h2 class="parallax__content--title">Aumento de estabilidade durante as curvas.</h2>
                    <p class="parallax__content--text"></p>
                </div>
            </div>
        </div>
    </section>

    <section id="exterior-360-view" class="view__360--section">
        <div class="container my-4">
            <h2 class="section__title">360° Exterior</h2>
        </div>
        <div class="iframe__wrapper">
            <figure>
                <img src="./public/banner-2.jpg" alt="Imagem 360 Exterior">
            </figure>
            <div class="iframe__shield">
                <a href="https://esportivosdeluxo.com.br/teste/rot/" data-lity>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section id="parallax-section-02">
        <div class="parallax">
            <div class="parallax__bg">
                <figure>
                    <img src="./public/lamb-3-2.jpg" alt="">
                </figure>
                <div class="parallax__bg--overlay"></div>
            </div>
            <div class="container">
                <div class="parallax__content">
                    <h2 class="parallax__content--title">Estimulando a Emoção</h2>
                    <p class="parallax__content--text">Extensões de Alcântara em toda a cabine, enquanto os
                        interruptores estilo
                        caça e um enorme botão vermelho de partida.</p>
                </div>
            </div>
        </div>
        <div class="parallax">
            <div class="parallax__bg">
                <figure>
                    <img src="./public/bancos-12.jpg" alt="">
                </figure>
                <div class="parallax__bg--overlay"></div>
            </div>
            <div class="container">
                <div class="parallax__content">
                    <h2 class="parallax__content--title">Desempenho e Estilo Funcional</h2>
                    <p class="parallax__content--text">Abordagem voltada para a pista, usando materiais leves e de alta
                        qualidade,
                        principalmente fibra de carbono.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="interior-360-view" class="view__360--section">
        <div class="container my-4">
            <h2 class="section__title">360° Interior</h2>
        </div>
        <div class="iframe__wrapper">
            <figure>
                <img src="./public/foto-4.jpg" alt="Imagem 360 Exterior">
            </figure>
            <div class="iframe__shield">
                <a href="https://esportivosdeluxo.com.br/teste/interno/" data-lity>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607zM10.5 7.5v6m3-3h-6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- begin : gallery-->

    <section id="gallery">
        <div class="container my-4">
            <h2 class="section__title">Galeria</h2>
        </div>
        <div class="glide" id="gallery-carousel">
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
            <div class="glide__track" data-glide-el="track">
                <ul class="glide__slides">
                    <li class="glide__slide">
                        <div class="container-fluid p-0">
                            <div class="gallery__grid">
                                <div class="">
                                    <a href="./public/foto-1.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-1.jpg" alt="">
                                    </a>
                                </div>
                                <div class="v-stretch">
                                    <a href="./public/foto-2.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-2.jpg" alt="">
                                    </a>
                                </div>
                                <div class="h-stretch">
                                    <a href="./public/foto-3.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-3.jpg" alt="">
                                    </a>
                                </div>
                                <div class="">
                                    <a href="./public/foto-4.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-4.jpg" alt="">
                                    </a>
                                </div>
                                <div class="">
                                    <a href="./public/foto-5.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-5.jpg" alt="">
                                    </a>
                                </div>
                                <div class="big-stretch">
                                    <a href="./public/foto-6.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-6.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="glide__slide">
                        <div class="container-fluid p-0">
                            <div class="gallery__grid">
                                <div class="">
                                    <a href="./public/foto-7.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-7.jpg" alt="">
                                    </a>
                                </div>
                                <div class="v-stretch">
                                    <a href="./public/foto-8.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-8.jpg" alt="">
                                    </a>
                                </div>
                                <div class="h-stretch">
                                    <a href="./public/foto-9.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-9.jpg" alt="">
                                    </a>
                                </div>
                                <div class="">
                                    <a href="./public/foto-10.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-10.jpg" alt="">
                                    </a>
                                </div>
                                <div class="">
                                    <a href="./public/foto-11.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-11.jpg" alt="">
                                    </a>
                                </div>
                                <div class="big-stretch">
                                    <a href="./public/foto-12.jpg" data-pswp-width="900" data-pswp-height="650"
                                        target="_blank">
                                        <img src="./public/foto-12.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!--end : gallery-->

    <section id="contact">
        <div class="container">
            <div class="form__wrapper">
                <h2>GOSTOU?</h2>
                <p>ENTRE EM CONTATO COM A LOJA!</p>
                <form action="POST">
                    <div class="mb-3">
                        <input name="nome" type="text" placeholder="* Nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <input name="telefone" type="text" placeholder="* Telefone" class="form-control phone-mask"
                            required>
                    </div>
                    <div class="mb-3">
                        <input name="email" type="email" placeholder="* Email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <textarea name="mensagem" rows="5" placeholder="Mensagem" class="form-control"></textarea>
                    </div>
                    <button id="btn__send--form" class="btn btn-msg">ENVIAR MENSAGEM</button>
                </form>
                <hr class="w-25 mx-auto">
                <a href="https://api.whatsapp.com/send?phone=559999999999" class="btn btn-wpp">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        fill="currentColor" viewBox="0 0 308 308" xml:space="preserve">
                        <g id="XMLID_468_">
                            <path id="XMLID_469_"
                                d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156   c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687   c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887   c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153   c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348   c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802   c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922   c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0   c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458   C233.168,179.508,230.845,178.393,227.904,176.981z" />
                            <path id="XMLID_470_"
                                d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716   c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396   c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z    M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188   l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677   c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867   C276.546,215.678,222.799,268.994,156.734,268.994z" />
                        </g>
                    </svg>
                    INICIAR CONVERSA POR WHATSAPP
                </a>
            </div>
        </div>
        </div>
    </section>
    <?php } ?>

    <!--  <section id="cars-carousel">
      <div class="container">
        <h2 class="section__title">Opções Similares</h2>
      </div>
      <div class="container-fluid">
        <div id="similar__cars--carousel">
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
              </svg>
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
              </svg>
            </button>
          </div>
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
              <li class="glide__slide">
                <div class="row">
                  <div class="col-6">
                    <div class="similar__cars--title">
                      <h3>Macan</h3>
                    </div>
                  </div>
                  <div class="col-6">
                    <figure class="similar__cars--figure">
                      <img
                        src="https://www.pngkey.com/png/full/237-2375714_2018-porsche-macan-sport-edition-near-los-angeles.png"
                        alt="">
                    </figure>
                  </div>
                  <div class="col-12 mt-4">
                    <div class="similar__cars--table">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="collum2">195 kW/265 cv</td>
                            <td class="collum1">Potência (kW)/Potência (cv)</td>
                          </tr>
                          <tr>
                            <td class="collum2">6,4s</td>
                            <td class="collum1">Aceleração 0-100 km/h</td>
                          </tr>
                          <tr>
                            <td class="collum2">232 km/h</td>
                            <td class="collum1">Velocidade máxima</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a href="#" class="btn btn_01 mt-3">Saiba Mais</a>
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="row">
                  <div class="col-6">
                    <div class="similar__cars--title">
                      <h3>Macan</h3>
                    </div>
                  </div>
                  <div class="col-6">
                    <figure class="similar__cars--figure">
                      <img
                        src="https://www.pngkey.com/png/full/237-2375714_2018-porsche-macan-sport-edition-near-los-angeles.png"
                        alt="">
                    </figure>
                  </div>
                  <div class="col-12 mt-4">
                    <div class="similar__cars--table">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="collum2">195 kW/265 cv</td>
                            <td class="collum1">Potência (kW)/Potência (cv)</td>
                          </tr>
                          <tr>
                            <td class="collum2">6,4s</td>
                            <td class="collum1">Aceleração 0-100 km/h</td>
                          </tr>
                          <tr>
                            <td class="collum2">232 km/h</td>
                            <td class="collum1">Velocidade máxima</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a href="#" class="btn btn_01 mt-3">Saiba Mais</a>
                  </div>
                </div>
              </li>
              <li class="glide__slide">
                <div class="row">
                  <div class="col-6">
                    <div class="similar__cars--title">
                      <h3>Macan</h3>
                    </div>
                  </div>
                  <div class="col-6">
                    <figure class="similar__cars--figure">
                      <img src="./public/img-carousel.png" alt="">
                    </figure>
                  </div>
                  <div class="col-12 mt-4">
                    <div class="similar__cars--table">
                      <table class="table">
                        <tbody>
                          <tr>
                            <td class="collum2">195 kW/265 cv</td>
                            <td class="collum1">Potência (kW)/Potência (cv)</td>
                          </tr>
                          <tr>
                            <td class="collum2">6,4s</td>
                            <td class="collum1">Aceleração 0-100 km/h</td>
                          </tr>
                          <tr>
                            <td class="collum2">232 km/h</td>
                            <td class="collum1">Velocidade máxima</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <a href="#" class="btn btn_01 mt-3">Saiba Mais</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
          </div>
        </div>
      </div>
    </section>-->

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

    <!-- Pop up Datos técnico-->

    <section id="technical__data" style="display: none;">
        <button class="technical__data--close">
            <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="2" stroke="white"
                class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <div class="technical__data--header">
            <div class="container">
                <h2>Lamborghini Huracan STO</h2>
                <div class="technical__data--header__data">
                    <div>
                        <h3>472kW/639 cv</h3>
                        <p>Potência (kW)/Potencia (cv)</p>
                    </div>
                    <div>
                        <h3>3 s</h3>
                        <p>Aceleração 0 - 100 km/h</p>
                    </div>
                    <div>
                        <h3>310 km/h</h3>
                        <p>Velocidade máxima</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="technical__data--content">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="technical__data--content__data">
                            <h2 class="technical__data--title">Dados técnicos</h2>
                            <div class="accordion" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            Motor
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                        <div class="accordion-body">

                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="d-none">
                                                        <th style="width: 40px;"></th>
                                                        <th></th>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Motor</td>
                                                            <td class="collum2">V10, 90°, MPI + DSI</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Diâmetro</td>
                                                            <td class="collum2">84.5 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Curso</td>
                                                            <td class="collum2">92.8 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Cilindrada</td>
                                                            <td class="collum2">5.204 cm³</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Potência (kW)</td>
                                                            <td class="collum2">470 kW</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Potência (cv)</td>
                                                            <td class="collum2">639cv</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Rotação máxima do motor</td>
                                                            <td class="collum2">8.000 rpm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Torque máximo</td>
                                                            <td class="collum2">565 Nm</td>
                                                        </tr>
                                                        <!--<tr>
                                <td scope="row">Máxima potência por litro (kW/l)</td>
                                <td class="collum2">98,00 kW/l</td>
                              </tr>
                              <tr>
                                <td scope="row">Máxima potência por litro (cv/l)</td>
                                <td class="collum2">133,00 cv/l</td>
                              </tr>-->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                            Performance
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Velocidade máxima</td>
                                                            <td class="collum2">310 km/h</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Aceleração 0 - 100km/h</td>
                                                            <td class="collum2">3 s</td>
                                                        </tr>
                                                        <!--<tr>
                                <td scope="row">Aceleração 0 - 100 km/h com pacote Sport Chrono</td>
                                <td class="collum2">6,2 s</td>
                              </tr>-->
                                                        <tr>
                                                            <td scope="row">Aceleração 0 - 200km/h</td>
                                                            <td class="collum2">9 s</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Frenagem de 100 a 0 km/h</td>
                                                            <td class="collum2">30 m</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Frenagem de 200 a 0 km/h</td>
                                                            <td class="collum2">110 m</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                            Rodas e Pneus
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Rodas Diantenrias (Jantes)</td>
                                                            <td class="collum2">8,5 x 20 J/ARO</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Rodas Traseiras (Jantes)</td>
                                                            <td class="collum2">11 x 20 J/ARO</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Pneus Diantenrios</td>
                                                            <td class="collum2">Sport 245/30 R20</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Pneus Traseiros</td>
                                                            <td class="collum2">Sport 305/30 R20</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                            Direção, Suspenção e Freios
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Sistema de Controle</td>
                                                            <td class="collum2">Controle Eletrônico de Estabilidade
                                                                (integrando ABS e TCS)</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tipos de Suspenção</td>
                                                            <td class="collum2">Suspensão magneto-reológica</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Sistema de Direção</td>
                                                            <td class="collum2">Direção assistida eletromecânica (EPS)
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Freios Dianteiros</td>
                                                            <td class="collum2">Carbono cerâmicos Ventilados, Tipo:
                                                                CCM-R, Diâmetro: 390, Espessura:
                                                                34</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Freios Traseiros</td>
                                                            <td class="collum2">Carbono cerâmicos Ventilados, Tipo:
                                                                CCM-R, Diâmetro: 360, Espessura:
                                                                28</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                                            Transmissão, Corpo e Chassis
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Transmição</td>
                                                            <td class="collum2">Traseira</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tração</td>
                                                            <td class="collum2">AWD</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Largura</td>
                                                            <td class="collum2">1.922 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Câmbio</td>
                                                            <td class="collum2">Automático LDF com 7 velocidades</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Segurança</td>
                                                            <td class="collum2">Airbags</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Chassis</td>
                                                            <td class="collum2">Híbrido em alumínio e fibra de carbono
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Corpo</td>
                                                            <td class="collum2">Alumínio e material sintético</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Espelhos</td>
                                                            <td class="collum2">Eletrico, aquecido e dobrável</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Aerodinâmica</td>
                                                            <td class="collum2">Splitter dianteiro e asa traseira com 3
                                                                regulagens manuais</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                                            Carroceria
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Comprimento</td>
                                                            <td class="collum2">4.547 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Largura (sem retrovisor)</td>
                                                            <td class="collum2">1.945 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Largura (com retrovisor)</td>
                                                            <td class="collum2">2.236 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Altura</td>
                                                            <td class="collum2">1.220 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Entre-eixos</td>
                                                            <td class="collum2">2.620 mm</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Peso Seco</td>
                                                            <td class="collum2">1.339 kg</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Distribuição de Peso</td>
                                                            <td class="collum2">% 41/59</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven"
                                            aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                                            Autonomia
                                        </button>
                                    </h2>
                                    <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Consumo</td>
                                                            <td class="collum2">0,40 km/l</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tanque de combustível</td>
                                                            <td class="collum2">83 l</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="technical__data--content__serial mt-5">
                            <h2 class="technical__data--title">Itens de série</h2>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Design Interior
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Composição Banco</td>
                                                            <td class="collum2">Alcantra Esportivo Bicolor</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Cor Banco</td>
                                                            <td class="collum2">Bianco Leda com costura invertida</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tipo Banco</td>
                                                            <td class="collum2">Esportivo</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tipo Cinto</td>
                                                            <td class="collum2">Comum</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Cor Cinto</td>
                                                            <td class="collum2">Grigio Sirius</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Cor Cinto</td>
                                                            <td class="collum2">Grigio Sirius</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tapete</td>
                                                            <td class="collum2">Fibra de Carbono</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Costura Volante</td>
                                                            <td class="collum2">Bianco Leda</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tela</td>
                                                            <td class="collum2">Sitema de Telemetria</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Detalhes painel</td>
                                                            <td class="collum2">Dark Chrome e Carbon Twill</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                            aria-controls="collapseTwo">
                                            Design exterior
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">Pintura</td>
                                                            <td class="collum2">Blue Cepheus</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Cor de Constraste</td>
                                                            <td class="collum2">Arancio Xanto</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Tipo Rodas</td>
                                                            <td class="collum2">Monobloco Forjado de Aluminio</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Cor Rodas</td>
                                                            <td class="collum2">Matt Black</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Calota Central</td>
                                                            <td class="collum2">Preta</td>
                                                        </tr>
                                                        <tr>
                                                            <td scope="row">Pinças de Freio</td>
                                                            <td class="collum2">Laranja</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="true" aria-controls="collapseThree">
                                            Acessórios
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tbody>

                                                        <tr>
                                                            <td>Lifting system</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Escrita Lamborghini STO no painel</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Proteção externa para retrovisores em fibra de carbono
                                                                Mate</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Controle de Viagem</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Camera de Ré</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Sistema Anti roubo</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Luzes de porta com a logo STO</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 d-none d-lg-block">
                        <div class="technical__data--figure--wrapper">
                            <figure class="technical__data--figure">
                                <img src="./public/tracos-1.jpg" alt="Esqueleto Macan">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>