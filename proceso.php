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

    <title><?php echo $lang['process']?> | Sosharu Marketing</title>

</head>
<body>
    
<?php include "navbar.php";?>

  <header class="proceso-header">
      <h1 class="montserrat align-Y titulo60 animatable anim-slidein"><?php echo $lang['process']?></h1>
    </header>

  <section class="proceso">
    <div class="responsive img-fullwidth desktopOnly">
      <picture>
          <source srcset="images/entrevista.webp" type="image/webp">
          <source srcset="images/entrevista.jpg" type="image/jpeg">
          <img alt="<?php echo $lang['proceso_entrevista']?>" src="images/entrevista.jpg">
      </picture>
    </div>
      <div class="proceso-info">
        <div class="container">
          <h3 class="montserrat subtitulo35 animatable anim-slidein"><?php echo $lang['proceso_entrevista']?></h3>
          <div class="decoracion"></div>
          <div class="roboto parrafo15">
            <p><?php echo $lang['proceso_entrevista_p1']?></p>
          </div>
        </div>
        
      </div>

      <div class="clearfix"></div>

      <div id="img_analisis" class="responsive img-fullwidth">
        <picture>
            <source srcset="images/analisis_de_notas.webp" type="image/webp">
            <source srcset="images/analisis_de_notas.jpg" type="image/jpeg">
            <img alt="<?php echo $lang['proceso_analisis']?>" src="images/analisis_de_notas.jpg">
        </picture>
      </div>

      <div class="proceso-info">
        <div class="container">
          <h3 class="montserrat subtitulo35 animatable anim-slidein"><?php echo $lang['proceso_analisis']?></h3>
          <div class="decoracion"></div>
          <div class="roboto parrafo15">
            <p><?php echo $lang['proceso_analisis_p1']?></p>
          </div>
        </div>
      </div>
      
      <div class="clearfix"></div>

      <div class="responsive img-fullwidth">
        <picture>
            <source srcset="images/manos_a_la_obra.webp" type="image/webp">
            <source srcset="images/manos_a_la_obra.jpg" type="image/jpeg">
            <img alt="<?php echo $lang['proceso_manosalaobra']?>" src="images/manos_a_la_obra.jpg">
        </picture>
      </div>
      <div class="proceso-info">
        <div class="container">
          <h3 class="montserrat subtitulo35 animatable anim-slidein"><?php echo $lang['proceso_manosalaobra']?></h3>
          <div class="decoracion"></div>
          <div class="roboto parrafo15">
            <p><?php echo $lang['proceso_manosalaobra_p1']?></p>
          </div>
        </div>
  </section>

  <div class="clearfix"></div>

  <?php include "formulario.php"; include "footer.php";?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/anim-on-scroll.js"></script>
  <script src="js/menu.js"></script>
</body>
</html>