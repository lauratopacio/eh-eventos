<!DOCTYPE html>
<html lang="en">
<head>
  <title>Eh Eventos | Catálogo de mesas</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/catalogo.css">
  <script src="js/jquery-1.11.1.min.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/carrousel_subpaginas.js"> </script>
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/banner.css">

</head>
<body>
<?php include('navbar.html'); ?>

  <div class="container-fluid">
    <div class="margen_contenido">
      <div class="row">
        <div class="col-lg-12 ">
          <img src="images/catalogo/mesas/titulo.png" id="titulo">
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-12">
          <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-3 col-3">
                  <img class="demo cursor" src="images/catalogo/mesas/s1_small.jpg" id="imgs" onclick="currentSlide(1)" >
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-3">
                  <img class="demo cursor" src="images/catalogo/mesas/s2_small.jpg" id="imgs" onclick="currentSlide(2)" >
                </div>
                <div class="col-lg-12 col-md-12 col-sm-3 col-3">
                  <img class="demo cursor" src="images/catalogo/mesas/s3_small.jpg" id="imgs" onclick="currentSlide(3)">
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-3 col-3">
                  <img class="demo cursor" src="images/catalogo/mesas/s3_small.jpg" id="imgs" onclick="currentSlide(4)">
                </div> 
          </div>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-12 ">
      
              <div class="mySlides">
                <div class="numbertext">1 / 4</div>
                <img src="images/catalogo/mesas/s1.jpg" style="width:100%">
                <label id="text_desc">Eventos Eh momentos inolvidables EventosEventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos</label>
              </div>

              <div class="mySlides">
                <div class="numbertext">2 / 4</div>
                <img src="images/catalogo/mesas/s2.jpg" style="width:100%">
                <label id="text_desc">Eventos Eh momentos inolvidables EventosEventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos</label>
              </div>

              <div class="mySlides">
                <div class="numbertext">3 / 4</div>
                <img src="images/catalogo/mesas/s3.jpg" style="width:100%">
                <label id="text_desc">Eventos Eh momentos inolvidables EventosEventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos</label>
              </div>   
              <div class="mySlides">
                <div class="numbertext">4 / 4</div>
                <img src="images/catalogo/mesas/s3.jpg" style="width:100%">
                <label id="text_desc">Eventos Eh momentos inolvidables EventosEventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos Eventos Eh momentos inolvidables Eventos</label>
              </div>   
              <a class="prev" onclick="plusSlides(-1)">❮</a>
              <a class="next" onclick="plusSlides(1)">❯</a>

              <div class="caption-container">
                <p id="caption"></p>
              </div>

              <div class="row" id="elementos_catalogo">
               
                 
              </div>
        
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
  <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>  

</html>