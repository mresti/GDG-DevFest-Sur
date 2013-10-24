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
  <link href="style/style.css" rel="stylesheet">
  
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon/favicon.png">
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
  <div class="container">
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
<script src="js/custom.js"></script>
</body>
</html>
