<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136014371-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-136014371-1');
    </script>

    <!-- Resto de la web -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Cada subpágina tiene que tener su propia descripción">
    <meta name="keywords" content="palabra clave 1, palabra clave 2, palabra clave 3"/>
    <meta http-equiv="expires" content="tiempo de caducidad en segundos"/>

    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="/images/favicons/safari-pinned-tab.svg" color="#ed1c24">
    <link rel="shortcut icon" href="/images/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#ed1c24">
    <meta name="msapplication-config" content="/images/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link href="css/reset.css" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="css/icofont.min.css" rel="stylesheet">

    <title>Sosharu Marketing | Agencia de Marketing Digital & Traducciones 🥇</title>

    <link rel="stylesheet" href="css/jquery.bxslider.css">
</head>
<body>
  <?php include "navbar.php";?>

  <header class="slider">
    <div class="responsive">
      <div class="in-middle slider-content animatable anim-slidein">
          <h1 class="montserrat"><?php echo $lang['slide1_encabezado']?></h1>
          <p class="roboto"><?php echo $lang['slide1_subtitulo']?><br><?php echo $lang['slide1_subtitulo2']?></p>
          <a class="btn-clear btn-red roboto" href="servicios.php"><?php echo $lang['masinfo']?></a>
      </div>
      <picture>
        <source srcset="images/language-slide.webp" type="image/webp">
        <source srcset="images/language-slide.jpg" type="image/jpeg">
        <img alt="<?php echo $lang['slide1_encabezado']?>" src="images/language-slide.jpg">
      </picture>
    </div>

    <div class="responsive">
        <div class="in-middle slider-content animatable anim-slidein">
          <h2 class="montserrat"><?php echo $lang['slide2_encabezado']?></h2>
          <p class="roboto"><?php echo $lang['slide2_subtitulo']?><br><?php echo $lang['slide2_subtitulo2']?></p>
          <a class="btn-clear btn-red roboto" href="servicios.php"><?php echo $lang['masinfo']?></a>
        </div>
        <picture>
          <source srcset="images/marketing-slide.webp" type="image/webp">
          <source srcset="images/marketing-slide.jpg" type="image/jpeg">
          <img alt="<?php echo $lang['slide2_encabezado']?>" src="images/marketing-slide.jpg">
        </picture>
    </div>

    <div class="responsive">
      <div class="in-middle slider-content animatable anim-slidein">
        <h3 class="montserrat"><?php echo $lang['slide3_encabezado']?></h3>
        <p class="roboto"><?php echo $lang['slide3_subtitulo']?></p>
        <a href="servicios.php" class="btn-clear btn-red roboto"><?php echo $lang['masinfo']?></a>
      </div>
      <picture>
          <source srcset="images/slide3.webp" type="image/webp">
          <source srcset="images/slide3.jpg" type="image/jpeg">
          <img alt="<?php echo $lang['slide3_encabezado']?>" src="images/slide3.jpg">
        </picture>
    </div>
  </header>

  <section class="about">
    <div class="container">
      <h3 class="montserrat subtitulo35"><?php echo $lang['about']?></h3>
      <div class="decoracion margin-auto"></div>
      <div class="parrafo15 roboto">
        <?php echo $lang['home_presentacion']?>
      </div>
    </div>
  </section>

  <section class="servicios gris">
    <div class="container">
      <h3 class="montserrat subtitulo35"><?php echo $lang['servicios']?></h3>
      <div class="decoracion margin-auto"></div>
      
      <div class="animatable anim-slideleft">
        <div class="servicios-content space">
          <div class="col1">
              <i class="icofont-comment icofont-2x red"></i>
          </div>
          <div class="col2">
              <p class="montserrat subtitulo21"><?php echo $lang['servicio_traducciones']?></p>
              <p class="roboto parrafo15">
              <?php echo $lang['servicio_traducciones_p1']?>
              </p>
              <a class="btn-clear roboto" href="servicios.php"><?php echo $lang['leermas']?></a>
          </div>
        </div>
        <div class="servicios-content secondrow-margin space">
            <div class="col1">
              <i class="icofont-megaphone icofont-2x red"></i>
            </div>
            <div class="col2">
                <p class="montserrat subtitulo21"><?php echo $lang['servicio_publicidad']?></p>
                <p class="roboto parrafo15">
                    <?php echo $lang['servicio_publicidad_p1']?>
                </p>
                <a class="btn-clear roboto" href="servicios.php"><?php echo $lang['leermas']?></a>
            </div>
          </div>
  
          <div class="servicios-content space">
              <div class="col1">
                <i class="icofont-connection icofont-2x red"></i>
              </div>
              <div class="col2">
                  <p class="montserrat subtitulo21"><?php echo $lang['servicio_redes']?></p>
                  <p class="roboto parrafo15">
                      <?php echo $lang['servicio_redes_p1']?>
                  </p>
                  <a class="btn-clear roboto" href="servicios.php"><?php echo $lang['leermas']?></a>
              </div>
            </div>

            <div class="servicios-content space">
              <div class="col1">
                <i class="icofont-rocket icofont-2x red"></i>
              </div>
              <div class="col2">
                  <p class="montserrat subtitulo21"><?php echo $lang['servicio_desarrolloweb']?></p>
                  <p class="roboto parrafo15">
                      <?php echo $lang['servicio_desarrolloweb_p1']?>
                  </p>
                  <a class="btn-clear roboto" href="servicios.php"><?php echo $lang['leermas']?></a>
              </div>
            </div>

            <div class="servicios-content secondrow-margin space">
              <div class="col1">
                <i class="icofont-copy-invert icofont-2x red"></i>
              </div>
              <div class="col2">
                  <p class="montserrat subtitulo21"><?php echo $lang['servicio_redaccion']?></p>
                  <p class="roboto parrafo15">
                      <?php echo $lang['servicio_redaccion_p1']?>
                  </p>
                  <a class="btn-clear roboto" href="servicios.php"><?php echo $lang['leermas']?></a>
              </div>
            </div>
      </div>
      
      <div class="clearfix"></div>
    </div>
  </section>

  <?php include "formulario.php"; include "footer.php";?>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/anim-on-scroll.js"></script>

    <script>
        $(function(){
          $('.slider').bxSlider({
            auto: true,
            mode: 'fade',
            pager: false,
            speed: 700,
            stopAutoOnClick: true,
            pause: 4500,
          });
        });
    </script>
</body>
</html>