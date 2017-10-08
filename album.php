<!DOCTYPE html>
<html>
<head>
<script type="scripts/scripts.js"></script>
<link rel="stylesheet" type="text/css" href="style/css.css">
	<title>Фотоальбом Руфусов</title>
</head>
<body>
<?php
include 'index.php';
?>
<div class="container">
  <h2 style="color: white; text-align: center;">Фото Руфусов</h2>  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div id="image">
    <div class="carousel-inner">
      <div class="item active">
        <img src="/img/0.jpg" alt="Voda" style="width:100%;">
      </div>

      <div class="item">
        <img src="/img/1.jpg" alt="Sneg" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="/img/2.jpg" alt="Doroga" style="width:100%;">
      </div>
    </div>
</div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
<div id="content">
</div>
</body>
</html>