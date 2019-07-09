<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eh Eventos | Nuestros Salones</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/platillos.css">
  <link rel="stylesheet" href="css/modal_salones.css">  
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carrousel.js"> </script>
  <script src="js/modal.js"> </script>
  <link rel="stylesheet" href="css/navbar.css">

</head>
<body>
<?php include('navbar.html'); ?>

<div class="container-fluid">
	
	<div class="margen_contenido">

		<div class="row">
			<!-- TITULO NUESTROS PLATILLOS      -->
			<div class="col-12">
			    <div id="myCarouselP" class="carousel slide">
  
					  <!-- Indicators -->
					<ul class="carousel-indicators">
					    <li class="item1 active"></li>
					    <li class="item2"></li>
					    <li class="item3"></li>
					</ul>
				  
					  <!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
						    <img src="images/nuestros_salones/principal.jpg" alt="salones 1" id="im1">
						</div>
						<div class="carousel-item">
						    <img src="images/nuestros_salones/s2.jpg" alt="salones 2" id="im1">
						</div>
						<div class="carousel-item">
						   <img src="images/nuestros_salones/s3.jpg" alt="salones 3" id="im1">
						</div>
					</div>
					  
					 <!-- Left and right controls -->
					<a class="carousel-control-prev" href="#myCarouselP">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#myCarouselP">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
				
			</div>	

			<div class="col-12">
				<center><img src="images/nuestros_salones/titulos/titulo_salon.png"  id="titulo_nuestros_platillos"></center>
			</div>
			<div class="col-sm-6 col-12">
				<a href="#modal_zafiro"  data-toggle="modal">
					<img src="images/nuestros_salones/elementos/salon_1.jpg"  id="platillos">
				</a>
			</div>
			<div class="col-sm-6 col-12">
				<a href="#modal_ambar"  data-toggle="modal">
					<img src="images/nuestros_salones/elementos/salon_2.jpg"  id="platillos_2">
				</a>
			</div>
			<div class="col-sm-6 col-12">
				<a href="#modal_pergola"  data-toggle="modal">
					<img src="images/nuestros_salones/elementos/salon_3.jpg"  id="platillos">
				</a>
			</div>
			<div class="col-sm-6 col-12">
				<a href="#modal_versalles"  data-toggle="modal">
					<img src="images/nuestros_salones/elementos/salon_4.jpg"  id="platillos_2">
				</a>
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

<?php 

include("modals/modal_salon_zafiro.html");
include("modals/modal_salon_versalles.html");
include("modals/modal_salon_pergola.html");
include("modals/modal_salon_ambar.html");
 ?>
 <script type="text/javascript">
 
$(document).ready(function(){
  // Activate Carousel with a specified interval
  $("#myCarouselP").carousel({interval: 10000});
        
  // Enable Carousel Indicators
  $(".item1").click(function(){
    $("#myCarouselP").carousel(0);
  });
  $(".item2").click(function(){
    $("#myCarouselP").carousel(1);
  });
  $(".item3").click(function(){
    $("#myCarouselP").carousel(2);
  });
    
  // Enable Carousel Controls
  $(".carousel-control-prev").click(function(){
    $("#myCarouselP").carousel("prev");
  });
  $(".carousel-control-next").click(function(){
    $("#myCarouselP").carousel("next");
  });
});
 </script>
</body>
</html>