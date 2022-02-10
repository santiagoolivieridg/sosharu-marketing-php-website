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

    <title><?php echo $lang['servicios']?> | Sosharu Marketing</title>

</head>
<body>
    
  <?php include "navbar.php";?>

  <header class="servicio-header">
    <h1 class="montserrat align-Y titulo60 animatable anim-slidein"><?php echo $lang['servicios']?></h1>
  </header>

  <section class="servicios">
    <div class="container">

      <div class="servicios-content space">
        <div class="col1">
          <i class="icofont-comment icofont-2x red"></i>
        </div>
        <div class="col2">
            <h3 class="montserrat subtitulo21"><?php echo $lang['servicio_traducciones']?></h3>
            <p class="roboto parrafo15 parrafo_bold"><?php echo $lang['servicio_traducciones_p1']?></p>
            <div class="decoracion decoracion_servicios"></div>
            <div class="roboto parrafo15">
                <ul><?php echo $lang['servicio_traducciones_p2']?></ul>
            </div>
        </div>
      </div>
      
      <div class="servicios-content secondrow-margin space">
        <div class="col1">
          <i class="icofont-megaphone icofont-2x red"></i>
        </div>
        <div class="col2">
            <h3 class="montserrat subtitulo21"><?php echo $lang['servicio_publicidad']?></h3>
            <p class="roboto parrafo15 parrafo_bold"><?php echo $lang['servicio_publicidad_p1']?></p>
            <div class="decoracion decoracion_servicios"></div>
            <div class="roboto parrafo15">
                <ul><?php echo $lang['servicio_publicidad_p2']?></ul>
            </div>
        </div>
      </div>

      <div class="servicios-content space">
        <div class="col1">
          <i class="icofont-connection icofont-2x red"></i>
        </div>
        <div class="col2">
            <h3 class="montserrat subtitulo21"><?php echo $lang['servicio_redes']?></h3>
            <p class="roboto parrafo15 parrafo_bold"><?php echo $lang['servicio_redes_p1']?></p>
            <div class="decoracion decoracion_servicios"></div>
            <div class="roboto parrafo15">
                <ul><?php echo $lang['servicio_redes_p2']?></ul>
            </div>
        </div>
      </div>

      <div class="clearfix"></div>

      <div class="servicios-content">
        <div class="col1">
          <i class="icofont-rocket icofont-2x red"></i>
        </div>
        <div class="col2">
            <h3 class="montserrat subtitulo21"><?php echo $lang['servicio_desarrolloweb']?></h3>
            <p class="roboto parrafo15 parrafo_bold"><?php echo $lang['servicio_desarrolloweb_p1']?></p>
            <div class="decoracion decoracion_servicios"></div>
            <div class="roboto parrafo15">
                <ul><?php echo $lang['servicio_desarrolloweb_p2']?></ul>
            </div>
        </div>
      </div>

      <div class="servicios-content secondrow-margin">
        <div class="col1">
          <i class="icofont-copy-invert icofont-2x red"></i>
        </div>
        <div class="col2">
            <h3 class="montserrat subtitulo21"><?php echo $lang['servicio_redaccion']?></h3>
            <p class="roboto parrafo15 parrafo_bold"><?php echo $lang['servicio_redaccion_p1']?></p>
            <div class="decoracion decoracion_servicios"></div>
            <div class="roboto parrafo15">
                <ul><?php echo $lang['servicio_redaccion_p2']?></ul>
            </div>
        </div>
      </div>

    </div> <!--CIERRA CONTAINER-->
  </section>

  <div class="clearfix nomargin"></div>

  <?php include "formulario.php"; include "footer.php";?>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/anim-on-scroll.js"></script>
  <script src="js/menu.js"></script>
</body>
</html>