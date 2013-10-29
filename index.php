<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">

	<!-- Web app for GoogleChrome -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="128x128" href="img/gdgdevfest_square.png">

  <!-- Title -->
  <title>GDG DevFest Sur 2013</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  
  <!-- Google web fonts -->
  <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
  <!-- Stylesheets -->
  <link href="style/bootstrap.css" rel="stylesheet">
  <link href="style/flexslider.css" rel="stylesheet">
  <link rel="stylesheet" href="style/font-awesome.css">
  <!--[if IE 7]>
  <link rel="stylesheet" href="style/font-awesome-ie7.css">
  <![endif]-->		
  <link href="style/style5.css" rel="stylesheet">
  
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">

<!-- Google + recommends for mobile devices-->
<script type="text/javascript">
  (function() {
    var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
    po.src = "https://apis.google.com/js/plusone.js?publisherid=104298429774470156908";
    var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
</head>

<body>
    <!-- Bootstrap navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                <span class="sr-only">Navegación</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
            </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
            <ul class="nav navbar-nav">
            <!-- Navigation links. Note down the class name. It is important -->
            <li><a href="#entradas" class="anchorLink">Entradas</a></li>
            <li><a href="#informacion" class="anchorLink">Información</a></li>
            <li><a href="#organizadores" class="anchorLink">Organizadores</a></li>
						<li><a href="#ponentes" class="anchorLink">Ponentes</a></li>
						<li><a href="#programa" class="anchorLink">Programa</a></li>
						<li><a href="#colaboradores" class="anchorLink">Colaboradores</a></li>
            <li><a href="#patrocinadores" class="anchorLink">Patrocinadores</a></li>
			<li><a href="#masinfo" class="anchorLink">Más...</a></li>
            </ul>
            </nav>
        </div>
    </div>

		<?php include("_entradas.php"); ?>
		<?php include("_informacion.php"); ?>
		<?php include("_organizadores.php"); ?>
		<?php include("_ponentes.php"); ?>
		<?php include("_programa.php"); ?>
		<?php include("_colaboradores.php"); ?>
		<?php include("_patrocinadores.php"); ?>

<!-- Footer -->
<footer>
  <div id="masinfo" class="container">
    <div class="row">
      <div  class="col-md-12">
            <div class="head">
               <h2>Localización</h2>
               <div class="bor"></div>
            </div>
            <div class="well">
              <h5 class="aligncenter">Rectorado de la Universidad de Córdoba. Avenida Medina Azahara s/n</h5>
            </div>
            <div id="map">
              <!-- Location map renders through Google Maps API V3-->
            </div>
      </div>
    </div>
	<div class="row" id="#concursos">
      <div class="col-md-12">
            <div class="head">
               <h2>Concurso Twitter</h2>
               <div class="bor"></div>
            </div>
            <div class="well">
              <strong>El m&aacute;s tuitero se llevar&aacute; un fant&aacute;stico Chromecast</strong>
			  <p>Ser el que m&aacute;s utilice el hashtag #DevFestSur te puede llevar a conseguir un Chromecast. Para ello solo debes tener en cuenta las siguientes bases del concurso y ser el que m&aacute;s tuits publica con su cuenta de Twitter.</p>
			  <p><strong>Bases</strong></p>
			  <ul>
				<li>Para que el tuit contabilice debe incluir el hashtag #DevFestSur</li>
				<li>Los Retuits tambi&eacute;n cuentan para el concurso</li>
				<li>El periodo para acumular tuits comienza el 25/10/2013 a las 0:00h y termina al finalizar el evento, es decir, a las 19:00h del 31/10/2013.</li>
				<li>El ganador/a debe estar inscrito en el evento y presente para recoger el regalo.</li>
				<li>Los que acaben entre las 5 primeras pposiciones de la clasificaci&oacute;n final tendr&aacute;n un premio de consolaci&oacute;n.</li>
				<li>El recuento de los tuits se realizan a trav&eacute;s de un servicio externo a la organizaci&oacute;n del evento, por lo que no nos responsabilizamos de la veracidad de los mismos.</li>
				<li>Se puede seguir la evolución del concurso <a href="https://www.hashtracking.com/reports/devfestsur/devfestsur/concurso">aqu&iacute;</a>.</li>
			  </ul>
			  <p>Mucha suerte a todos/as los participantes.</p>
            </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
            <p>Contacta con nosotros - Escríbenos a <a href="mailto:gdgdevfestsur@gmail.com">gdgdevfestsur@gmail.com</a></p>
            <div class="border"></div>
      </div>
    </div>

  <div class="clearfix"></div>

  </div>
</footer>		

<!-- JS -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<script src="js/jquery.anchor.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="js/custom.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-44336207-1', 'gdgdevfest.com');
  ga('send', 'pageview');

</script>
</body>
</html>
