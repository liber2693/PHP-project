﻿<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Pagina Web</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <?php include('views/cabecera.php');?>

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.png">

  <!-- JOSE 25-10-2018 11:13 pm -->
  <!-- Bootstrap CSS File -->
  <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="js/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="js/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">
  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">
  <!-- JOSE 25-10-2018 11:13 pm -->

</head>

<body>
  <!-- Page Content
	================================================== -->
  <!-- Hero -->
  <!--<section class="hero">-->


	<!-- <div class="container text-center">
	  <div class="row">
		<div class="col-md-12">
		  <a class="hero-brand" href="index.php" title="Home"><img alt="Bell Logo" src="img/images/logos.jpg"></a>
		</div>
	  </div>-->

	  <!--<div class="col-md-12">
		  <h1>
			A theme with personality
		  </h1> -->

		<!--<p class="tagline">
		  This is a powerful theme with some great features that you can use in your future projects.
		</p> -->
		<!--<a class="btn btn-full" href="#nosotros">Empezar</a>
	  </div>
	</div>-->

	<div id="home" class="slider-area">
	<div class="bend niceties preview-2">
	  <div id="ensign-nivoslider" class="slides">
		<img src="img/slider/slider1.jpg" alt="" title="#slider-direction-1" />
		<img src="img/slider/slider3.jpg" alt="" title="#slider-direction-2" />
		<img src="img/slider/slider4.jpg" alt="" title="#slider-direction-3" />
		<img src="img/slider/slider2.jpg" alt="" title="#slider-direction-4" />
	  </div>

	  <!-- direction 1 -->
	  <div id="slider-direction-1" class="slider-direction slider-one">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
			  <div class="slider-content text-center">
				<!-- layer 1 -->
				<div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
					<a class="hero-brand" href="index.php" title="Home">
					<img src="img/images/logos.jpg" width="25%" height="15%" style="margin-top: 15%; margin-left: 36%;"></a>

				  <!--<h2 class="title1">The Best Business Information </h2> -->
				</div>
				<!-- layer 2 -->
				<div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
				  <!--<h1 class="title2">We're In The Business Of Helping You Start Your Business</h1> -->
				</div>
				<!-- layer 3 -->
				<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
				  <br><br><br><br>
				  <a class="ready-btn right-btn page-scroll" href="#nosotros">Comenzar</a>
				  <!--<a class="ready-btn page-scroll" href="#about">Learn More</a> -->
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>


	  <!-- direction 2 -->
	  <div id="slider-direction-2" class="slider-direction slider-two">
		<div class="container">
		  <div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
			  <div class="slider-content text-center">
				<!-- layer 1 -->
				<div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
					<a class="hero-brand" href="index.php" title="Home">
					<img src="img/images/logos.jpg" width="25%" height="15%" style="margin-top: 15%; margin-left: 36%;"></a>

				<!-- <h2 class="title1">The Best business Information </h2> -->
				</div>
				<!-- layer 2 -->
				<div class="layer-1-2 wow slideInUp " data-wow-duration="2s" data-wow-delay=".1s">
			   <!--<h1 class="title2">Helping Business Security  & Peace of Mind for Your Family</h1> -->
				</div>
				<!-- layer 3 -->
				<div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
				  <br><br><br><br>
				  <a class="ready-btn right-btn page-scroll" href="#nosotros">Comenzar</a>
				  <!--<a class="ready-btn page-scroll" href="#about">Learn More</a> -->
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>

	</div>
  </div>
  <!-- /Hero -->


  <!-- Header -->
  <header id="header">
	<div class="container">

	  <div id="logo" class="pull-left">
		<a href="index.php"><img src="img/images/logos.jpg" alt="" title="" width="130" height="80"></img></a>
		<!-- Uncomment below if you prefer to use a text image -->
		<!--<h1><a href="#hero">Bell</a></h1>-->
	  </div>

	  <nav id="nav-menu-container">
		<ul class="nav-menu">
		  <li><a href="#nosotros">Nosotros</a></li>
		  <li><a href="#features">Noticias</a></li>
		  <li><a href="#portfolio">Productos</a></li>
		  <li><a href="#catalogo">Catálogo</a></li>
		  <!--<li><a href="#team">Team</a></li>-->
		  <!-- Menu Despegable-->
		<!--  <li class="menu-has-children"><a href="">Drop Down</a>
			<ul>
			  <li><a href="#">Drop Down 1</a></li>
			  <li class="menu-has-children"><a href="#">Drop Down 2</a>
				<ul>
				  <li><a href="#">Deep Drop Down 1</a></li>
				  <li><a href="#">Deep Drop Down 2</a></li>
				  <li><a href="#">Deep Drop Down 3</a></li>
				  <li><a href="#">Deep Drop Down 4</a></li>
				  <li><a href="#">Deep Drop Down 5</a></li>
				</ul>
			  </li>
			  <li><a href="#">Drop Down 3</a></li>
			  <li><a href="#">Drop Down 4</a></li>
			  <li><a href="#">Drop Down 5</a></li>
			</ul>
		  </li> -->
		  <li><a href="#ubicacion">Ubicación</a></li>
		  <li><a href="#contact">Contáctanos</a></li>
		  <!-- Button to Open the Modal -->
		  
		</ul>
	  </nav>
	  <!-- #nav-menu-container -->

	  <nav class="nav social-nav pull-right d-none d-lg-inline">
		<a href="#"><i class="fa fa-twitter"></i></a> 
		<a href="#"><i class="fa fa-facebook"></i></a> 
		<a href="#"><i class="fa fa-linkedin"></i></a> 
		<a href="#"><i class="fa fa-envelope"></i></a>
	  </nav>
	</div>
  </header>
  <!-- #header -->





  <!-- nosotros -->
  <section class="features" id="nosotros">
	<div class="container">
	  <h2 class="text-center">Nosotros</h2>


	  <p>
		¿Qué es MaschinenWerk 2000,C.A?
	  </p>
	  <p align="justify">
		Nos dedicamos a brindar apoyo integral a nuestros clientes en todas sus necesidades de
		Sistemas de Inspección, Verificación de Peso, Tecnología de Códigos de Barras, Marcaje de Productos con Suministros
		Asociados y Sistemas de Automatización para las Industrias de Alimentos, Farmacéuticas y Textiles, así como
		Desempolvadores, Blísteadoras, Tableteadoras para el Sector Farmacéutico.
	  </p>
	  <p align="justify">
		Para el Sistema de Inspección y Control de Calidad en línea contamos con nuestra representada exclusiva Inglesa
		Loma Systems, con aplicaciones para detección de metales o partículas contaminantes, de igual manera verificación
		de peso en línea con sus respectivos sistemas de rechazos.
	  </p>
	  <p align="justify">
		Para el caso de codificación e impresión a tinta continua, nuestra representada exclusiva Linx Printing technologies
		ofrece equipos de alta calidad, robustos y confiables para todo tipo de aplicaciones industriales e insumos o
		consumibles garantizados.
	  </p>
	  <p align="justify">
		Ofrecemos líneas completas de automatización robótica guiado por visión (BPA): aplicaciones como picking & place
		sofisticado para artículos individuales envasados ​​y no envasados ​​para apilar o cargar en sus respectivos envases,
		envolturas o máquinas HFFS.
	  </p>
	  <p align="justify">
		· Soluciones para envases flexibles y otros-difícil de manipular: sistemas delta o cartesianos para adaptarnos a los
		productos de nuestros clientes y aumentar la producción sin tiempos de paradas indeseados.
	  </p>
	  <p align="justify">
		· Sistemas llave en mano para aplicaciones de Embalaje: soluciones de automatización completas de embalaje que toman el
		control de su línea de envasado desde el final del procesamiento a través de paletizado.
	  </p>
	  <p align="justify">
		Entregamos asesoría en los procesos productivos con nuestra tecnología, poniendo a disposición nuestra Área de
		Ingeniería, experiencia y creatividad, en el desarrollo y puesta en marcha de cada uno de los proyectos de
		nuestros clientes.
	  </p>
	  <br><br>

<div class="features">
  <center><h2>Empresas Representadas</h2></center>
  <div class="container">
	<div class="owl-carousel owl-theme">
	  <div class="item">
		<a href="https://blueprintautomation.com/en/" target="_blank"><img src="img/images/empresas(1).png" class="img-fluid" height="42" width="42"></a>
	  </div>
	  <div class="item">
		<a href="http://www.kraemerag.ch/es/" target="_blank"><img src="img/images/empresas(2).png" class="img-fluid" height="42" width="42"></a>
	  </div>
	  <div class="item">
		<a href="http://www.solpak.com.co/sitespk/" target="_blank"><img src="img/images/empresas(3).png" class="img-fluid" height="42" width="42"></a>
	  </div>
	  <div class="item">
		<a href="https://www.loma.com/en" target="_blank"><img src="img/images/empresas(4).png" class="img-fluid" height="42" width="42"></a>
	  </div>
	  <div class="item">
		<a href="https://www.linxglobal.com/en/" target="_blank"><img src="img/images/empresas(5).png" class="img-fluid" height="42" width="42"></a>
	  </div>
	  <div class="item">
		<a href="https://www.ptipacktech.com/" target="_blank"><img src="img/images/empresas(6).png" class="img-fluid" height="42" width="42"></a>
	  </div>
	</div>
  </div>
</div>


	  <div class="row stats-row">
		<div class="stats-col text-center col-md-3 col-sm-6">
		  <div class="circle">
			<span class="stats-no" data-toggle="counter-up">1000</span><b> Clientes Satisfechos</b>
		  </div>
		</div>

		<div class="stats-col text-center col-md-3 col-sm-6">
		  <div class="circle">
			<span class="stats-no" data-toggle="counter-up">200</span><b> Maquinaria</b>
		  </div>
		</div>

		<div class="stats-col text-center col-md-3 col-sm-6">
		  <div class="circle">
			<span class="stats-no" data-toggle="counter-up">1,500</span><b> Horas de Soporte</b>
		  </div>
		</div>

		<div class="stats-col text-center col-md-3 col-sm-6">
		  <div class="circle">
			<span class="stats-no" data-toggle="counter-up">20</span><b> Trabajadores</b>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!-- /nosotros -->

  <!-- Parallax -->
  <div class="block bg-primary block-pd-lg block-bg-overlay text-center" data-bg-img="img/parallax-bg.jpg" data-settings='{"stellar-background-ratio": 0.6}' data-toggle="parallax-bg">
	<!-- <h2>Welcome to a perfect theme</h2> -->

	 <!-- <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="img/gadgets.png"> -->
	 <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="img/gadgets.png">
</div>
  <!-- /Parallax -->


<section id="menu" class="parallax-section" style="background-position: 50% 63px;">
  <div class="container">
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10">
         <div class="wow fadeInUp section-title animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
            <h2>Food Menu</h2>
            <h4>we have special menus</h4>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
          <div class="media-object pull-left">
            <img src="images/gallery-img1.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$24</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Breakfast</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp animated" data-wow-delay="0.9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeInUp;">
          <div class="media-object pull-left">
            <img src="images/gallery-img2.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$36</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">New Pizza</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp animated" data-wow-delay="1.2s" style="visibility: visible; animation-delay: 1.2s; animation-name: fadeInUp;">
          <div class="media-object pull-left">
            <img src="images/gallery-img3.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$24</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Mushroom</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="media wow fadeInUp animated" data-wow-delay="1s" style="visibility: visible; animation-delay: 1s; animation-name: fadeInUp;">
          <div class="media-object pull-left">
            <img src="images/gallery-img4.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$32</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Seafood</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp animated" data-wow-delay="1.3s" style="visibility: visible; animation-delay: 1.3s; animation-name: fadeInUp;">
          <div class="media-object pull-left">
            <img src="images/gallery-img5.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$64</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Spicy Beef</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>

        <div class="media wow fadeInUp animated" data-wow-delay="1.6s" style="visibility: visible; animation-delay: 1.6s; animation-name: fadeInUp;">
          <div class="media-object pull-left">
            <img src="images/gallery-img6.jpg" class="img-responsive" alt="Food Menu">
            <span class="menu-price">$45</span>
          </div>
          <div class="media-body">
            <h3 class="media-heading">Dinner</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitquisque tempus ac eget diam et.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


  <!-- Features -->
  <section class="features" id="features">
	<div class="container">
	  <h2 class="text-center">Noticias</h2>

	  <div class="row">
		<div class="feature-col col-lg-4 col-xs-12">
		  <div class="card card-block text-center">
			<div>
			  <div class="feature-icon">
				<span class="fa fa-rocket"></span>
			  </div>
			</div>

			<div>
			  <h3>Custom Design</h3>
			  <p>Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
			</div>
		  </div>
		</div>

		<div class="feature-col col-lg-4 col-xs-12">
		  <div class="card card-block text-center">
			<div>
			  <div class="feature-icon">
				<span class="fa fa-envelope"></span>
			  </div>
			</div>

			<div>
			  <h3>Responsive Layout</h3>
			  <p>Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
			</div>
		  </div>
		</div>

		<div class="feature-col col-lg-4 col-xs-12">
		  <div class="card card-block text-center">
			<div>
			  <div class="feature-icon">
				<span class="fa fa-bell"></span>
			  </div>
			</div>

			<div>
			  <h3>Innovative Ideas</h3>
			  <p>Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
			</div>
		  </div>
		</div>
	  </div>

	  <div class="row">
		<div class="feature-col col-lg-4 col-xs-12">
		  <div class="card card-block text-center">
			<div>
			  <div class="feature-icon">
				<span class="fa fa-database"></span>
			  </div>
			</div>

			<div>
			  <h3>Good Documentation</h3>
			  <p>Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
			</div>
		  </div>
		</div>

		<div class="feature-col col-lg-4 col-xs-12">
		  <div class="card card-block text-center">
			<div>
			  <div class="feature-icon">
				<span class="fa fa-cutlery"></span>
			  </div>
			</div>

			<div>
			  <h3>
				  Excellent Features</h3>

			  <p>Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
			</div>
		  </div>
		</div>

		<div class="feature-col col-lg-4 col-xs-12">
		  <div class="card card-block text-center">
			<div>
			  <div class="feature-icon">
				<span class="fa fa-dashboard"></span>
			  </div>
			</div>

			<div>
			  <h3>Retina Ready</h3>
			  <p>Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
  </section>
  <!-- /Features -->


  <!-- Call to Action -->
  <section class="cta">
	<div class="container">
	  <div class="row">
		<div class="col-lg-9 col-sm-12 text-lg-center text-center">
			<img src="img/images/logo1.png" alt="" title="" width="180" height="60"></img> &nbsp;&nbsp;
			<img src="img/images/logo2.png" alt="" title="" width="180" height="60"></img>
		  <!--<p>
			Lorem ipsum dolor sit amet, nec ad nisl mandamus imperdiet, ut corpora cotidieque cum. Et brute iracundia his, est eu idque dictas gubergren
		  </p>-->
		</div>
		<!--
		<div class="col-lg-3 col-sm-12 text-lg-right text-center">
		  <a class="btn btn-ghost" href="#">Buy This Theme</a>
		</div>
	  -->
	  </div>
	</div>
  </section>
  <!-- /Call to Action -->


  <!-- Portfolio -->
  <section class="portfolio" id="portfolio">
	<div class="container text-center">
	  <h2>Productos</h2>
	  <p align="center">SECCIÓN EN CONSTRUCCIÓN</p>
	</div>
  </section>


  <!-- Portfolio -->
  <section class="portfolio" id="catalogo">
	<div class="container text-center">
	  <h2>Catálogo</h2>
	  <p align="center">Haga Click en el Archivo que desee Visualizar.</p>
	</div>

	<div class="portfolio-grid">
	  <div class="row">
		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/cw3_400ul_automatic_checkweigher.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">CW3 400UL Automatic Checkweigher</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/cw3_automatic_checkweigher_heavyweight.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">CW3 Checkweigher Heavyweight</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/cw3_checkweigher.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">CW3 Checkweigher</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/iq3_metal_detector_conveyors.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">IQ3+ Metal Detector Convveyor</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>
	  </div>

	  <div class="row">
		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/linx_5900.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">Linx 5900</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/linx_8900.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">Linx 8900</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/linx_sl302.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">Linx SL302</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>
		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/loma.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">Loma Systems</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>
	  </div>

	  <div class="row">
		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/loma_iq3_metal_detector.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">Loma IQ3 Metal Detector</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/x_ray_inspection_system.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">X RAY Inspection System</h3>
				</div>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-lg-3 col-sm-6 col-xs-12">
		  <div class="card card-block">
			<a href="img/catalogos/x5_space_saver.pdf" target="_blank">
			  <img src="img/pdf_image.webp" width="20%" height="20%" style="margin-left: 32%;">
			  <div class="portfolio-over">
				<div>
				  <h3 class="card-title">X5 Space Saver</h3>

				</div>
			  </div>
			</a>
		  </div>
		</div>
	  </div>

	</div>
  </section>
  <!-- /Portfolio -->


  <!-- Team -->
  <section class="team" id="team">
	<div class="container">
	  <h2 class="text-center">Conoce Nuestros Productos</h2><br>

	  <div class="row">
		<div class="col-sm-3 col-xs-6">
		  <div class="card card-block">
			<a href="#"><img alt="" class="team-img" src="img/images/loma/1.png" width="70%" height="70%">
			  <div class="card-title-wrap">
				<span class="card-title"><center>Test 1</center></span> <!--<span class="card-text">1</span> -->
			  </div>
			  <div class="team-over">
				<h4 class="hidden-md-down">Imagen 1</h4>
			  </div>
			</a>
		  </div>
		</div>

		<div class="col-sm-3 col-xs-6">
			<div class="card card-block">
			  <a href="#"><img alt="" class="team-img" src="img/images/loma/2.png" width="70%" height="70%">
				<div class="card-title-wrap">
				  <span class="card-title"><center>Test 2</center></span> <!--<span class="card-text">1</span> -->
				</div>
				<div class="team-over">
				  <h4 class="hidden-md-down">Imagen 2</h4>
				</div>
			  </a>
			</div>
		  </div>

	  <div class="col-sm-3 col-xs-6">
			<div class="card card-block">
			  <a href="#"><img alt="" class="team-img" src="img/images/loma/3.png" width="70%" height="70%">
				<div class="card-title-wrap">
				  <span class="card-title"><center>Test 3</center></span> <!--<span class="card-text">1</span> -->
				</div>
				<div class="team-over">
				  <h4 class="hidden-md-down">Imagen 3</h4>
				</div>
			  </a>
			</div>
		  </div>

	  <div class="col-sm-3 col-xs-6">
			<div class="card card-block">
			  <a href="#"><img alt="" class="team-img" src="img/images/loma/4.png" width="70%" height="70%">
				<div class="card-title-wrap">
				  <span class="card-title"><center>Test 4</center></span> <!--<span class="card-text">1</span> -->
				</div>
				<div class="team-over">
				  <h4 class="hidden-md-down">Imagen 4</h4>
				</div>
			  </a>
			</div>
		  </div>
	</div>
  </section>


  <!-- /Team -->

  <!-- @component: footer -->
  <section class="features" id="ubicacion">
	<div class="container">
	  <div class="row">
		<div class="col-md-12 text-center">
		  <h2 class="section-title">Ubicación</h2>
		</div>
		<center>
		  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3923.2661211384434!2d-66.85714878520187!3d10.47967509252331!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c2a585888ddd08f%3A0xf36232890a56ac20!2sKeope%2C+Avenida+Veracruz%2C+Caracas+1080%2C+Distrito+Capital!5e0!3m2!1ses-419!2sve!4v1540905971046" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</center>
	  </div>
	  <div class="row justify-content-center">
	  </div>
	</div>
  </section>


  <!-- @component: footer -->
  <section id="contact">
	<div class="container">
	  <div class="row">
		<div class="col-md-12 text-center">
		  <h2 class="section-title">Contáctanos</h2>
		</div>
	  </div>

	  <div class="row justify-content-center">
		<div class="col-lg-3 col-md-4">
		  <div class="info">
			<div>
			  <i class="fa fa-map-marker"></i>
				<p>Av Veracruz Edificio Keope<br>
					Piso 1 Oficina 15B Baruta<br>
					Las Mercedes Caracas<br>
					Venezuela
				</p>
			</div>

			<div>
			  <i class="fa fa-envelope"></i>
				<p>Ventas@maschinen-werk.com</p>
			</div>

			<div>
			  <i class="fa fa-phone"></i>
				<p>Tel: +58  212 9911957</p>
			</div>

		  </div>
		</div>

		<div class="col-lg-5 col-md-8">
		  <div class="form">
			<div id="sendmessage">Your message has been sent. Thank you!</div>
			<div id="errormessage"></div>
			<form action="" method="post" role="form" class="contactForm">
			  <div class="form-group">
				<input type="text" name="name" class="form-control" id="name" placeholder="Tu nombre" data-rule="minlen:4" data-msg="Por Favor introduzca al menos 4 caractéres" />
				<div class="validation"></div>
			  </div>
			  <div class="form-group">
				<input type="email" class="form-control" name="email" id="email" placeholder="Tu Email" data-rule="email" data-msg="Por favor introduzca un Email válido" />
				<div class="validation"></div>
			  </div>
			  <div class="form-group">
				<input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Por favor introduzca al menos 8 caractéres" />
				<div class="validation"></div>
			  </div>
			  <div class="form-group">
				<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Por favor escriba algo para nosotros" placeholder="Mensaje"></textarea>
				<div class="validation"></div>
			  </div>
			  <div class="text-center">
				<button type="submit">Envíar</button>
			  </div>
			</form>
		  </div>
		</div>

	  </div>
	</div>
  </section>

 
  <footer class="site-footer">
	<div class="bottom">
	  <div class="container">
		<div class="row">

		  <div class="col-lg-6 col-xs-12 text-lg-left text-center">
			<p class="copyright-text">
			  © MaschinenWerk 2000,C.A | All Rights Reserved
			</p>
			<div class="credits">
			  Desarrollado por: <a href="">Technology LR Inc Dev</a>
			  <a href="https://www.instagram.com/liber.26/" target="_blank">&nbsp;&nbsp;
				<img src="img/images/ig.jpg" width="5%" height="5%"></a>
			  <a href="https://www.instagram.com/liber.26/" target="_blank">
				<img src="img/images/facebook.jpg" width="5%" height="5%"></a>
			  <a href="https://www.instagram.com/liber.26/" target="_blank">
				<img src="img/images/linkedin.png" width="5%" height="5%"></a>

			  <!--<a href=""><img src="img/images/twitter.jpg" width="5%" height="5%"></a>-->

			</div>
		  </div>

		  <div class="col-lg-6 col-xs-12 text-lg-right text-center">
			<ul class="list-inline">

			  <li class="list-inline-item">
				<a href="#nosotros">Nosotros</a>
			  </li>

			  <li class="list-inline-item">
				<a href="#features">Noticias</a>
			  </li>

			  <li class="list-inline-item">
				<a href="#portfolio">Productos</a>
			  </li>

			  <li class="list-inline-item">
				<a href="#ubicacion">Ubicación</a>
			  </li>

			  <li class="list-inline-item">
				<a href="#contact">Contáctanos</a>
			  </li>
				<li class="list-inline-item">
			  		<a data-toggle="modal" data-target="#myModal" id="modal_user"><i class="fa fa-user"></i></a>
			  	</li>
			</ul>
		  </div>

		</div>
	  </div>
	</div>
  </footer>
  <a class="scrolltop" href="#"><span class="fa fa-angle-up"></span></a>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-sm" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Sistema Administrativo</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="post" id="login">
					<div class="modal-body">
						<div class="alert alert-danger oculto" id="error" role="alert">
							<strong>Ingresar Usuario</strong>
						</div>
						<div class="alert alert-warning oculto" id="error2" role="alert">
						 	<strong>Verifique el usuario</strong>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label" placeholder="usuario">
								Usuario:
							</label>
							<input type="text" class="form-control" id="user">
						</div>
						<div class="alert alert-danger oculto" id="error1" role="alert">
							<strong>Ingresar Contraseña</strong>
						</div>
						<div class="alert alert-warning oculto" id="error3" role="alert">
						 	<strong>Verifique contraseña</strong>
						</div>
						<div class="form-group">
							<label for="recipient-name" class="col-form-label" placeholder="contraseña">
								Contraseña:
							</label>
							<input type="text" class="form-control" id="password">
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" id="enviar">
								Login IN
						</button>
						<button type="button" class="btn btn-danger" data-dismiss="modal">
							Cerrar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- fin Modal -->


 <!-- JOSE 25-10-2018 11:13 pm -->
  <!-- JavaScript Libraries -->
  <script src="js/jquery/jquery.min.js"></script>
  <script src="js/wow/wow.min.js"></script>
  <script src="js/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>

  <!-- archivo de las funciones principales del stylo -->
  <script src="js/main.js"></script>
  <!-- JOSE 25-10-2018 11:13 pm -->



  <!-- javascripts -->
  <?php include('views/pie.php');?>


  </body>
</html>
