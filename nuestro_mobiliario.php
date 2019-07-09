<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eh Eventos | Nuestro Mobiliario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/platillos.css">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carrousel.js"> </script>
  <link rel="stylesheet" href="css/navbar.css">

</head>
<body>
 <?php include('navbar.html'); ?>

<div class="container-fluid">
	
	<div class="margen_contenido">
		<!-- SLIDER-->
		<div id="myCarousel" class="carousel slide">
  
		  <!-- Indicators -->
		  <ul class="carousel-indicators">
		    <li class="item1 active"></li>
		    <li class="item2"></li>
		    <li class="item3"></li>
		  </ul>
		  
		  <!-- The slideshow -->
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="images/nuestro_mobiliario/slider/s1.jpg" alt="mobiliario 1" id="im1">
		    </div>
		    <div class="carousel-item">
		      <img src="images/nuestro_mobiliario/slider/s2.jpg" alt="mobiliario 2" id="im1">
		    </div>
		     <div class="carousel-item">
		      <img src="images/nuestro_mobiliario/slider/s3.jpg" alt="mobiliario 3" id="im1">
		    </div>
		  </div>
		  
		  <!-- Left and right controls -->
		  <a class="carousel-control-prev" href="#myCarousel">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#myCarousel">
		    <span class="carousel-control-next-icon"></span>
		  </a>
		</div>
		<!-- FIN SLIDER-->

		<div class="row">
			<!-- TITULO NUESTROS PLATILLOS      -->
			<div class="col-12">
				<center><img src="images/nuestro_mobiliario/titulo/titulo_mobiliario.png"  id="titulo_nuestros_platillos"></center>
			</div>
			<div class="col-sm-6 col-12">
				<a href="catalogo_sillas.php"><img src="images/nuestro_mobiliario/elementos/mobiliario_1.jpg"  id="platillos"></a>
			</div>
			<div class="col-sm-6 col-12">
				<img src="images/nuestro_mobiliario/elementos/mobiliario_2.jpg"  id="platillos_2">
			</div>
			<div class="col-sm-4 col-12">
				<img src="images/nuestro_mobiliario/elementos/mobiliario_3.jpg"  id="platillos_3">
			</div>
			<div class="col-sm-4 col-12">
				<img src="images/nuestro_mobiliario/elementos/mobiliario_4.jpg"  id="platillos_4">
			</div>
			<div class="col-sm-4 col-12">
				<img src="images/nuestro_mobiliario/elementos/mobiliario_5.jpg"  id="platillos_5">
			</div>
		</div>

	</div>
</div>
<div id="banner_final">
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-sm-6 col-12">
			<img src="images/nuestros_platillos/banner/nuestros_platillos.png"  id="element_ban_1">
		</div>
		<div class="col-md-6 col-sm-6 col-12">
			<a href="">
				<div class="btn_click">
					<p id="txt_click">CLICK AQUÍ</p>
				</div>
			</a>
		</div>
	</div>

	</div>
</div>

</body>
</html>