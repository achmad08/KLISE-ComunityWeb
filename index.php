<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> <!-- untuk menggerakan slide -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!-- untuk membuat slider -->
	<link rel="shortcut icon" href="logo.png">

	
	<title> Klise</title>
	
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<script> // disabled zooming
	$(document).ready(function(){
	$(document).keydown(function(event) {
	    	    if (event.ctrlKey==true && (event.which == '61' || event.which == '107' || event.which == '173' || event.which == '109'  || event.which == '187'  || event.which == '189'  ) ) {
         alert('disabling zooming'); 
		event.preventDefault();
		// 107 Num Key  +
		//109 Num Key  -
		//173 Min Key  hyphen/underscor Hey
		// 61 Plus key  +/=
	     }
	});

	$(window).bind('mousewheel DOMMouseScroll', function (event) {
	       if (event.ctrlKey == true) {
           alert('disabling zooming'); 
		   event.preventDefault();
	       }
	});
});
	
	</script>
	
	
	<!-- bagian header template -->
	<header>
		<h1 class="judul">  <p>
    <img src = "logo.png" height="180" width="auto"
         /></h1>
		 
	</header>
	<!-- akhir bagian header template -->


	<div class="bs-example">
	
<div  class='col-md-6'>

  

    <div  id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slide1.png" >
            </div>
            <div class="item">
                <img src="images/slide2.png" >
            </div>
			  <div class="item">
                <img src="images/slide3.png">
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
</div>

<div class="skin">
<a type= "submit" class="btn" href="peta.php"></a>
</div>

<div class="btnsamping">

<button onclick="window.location.href='donasi.php'" class="button panduan">Panduan</button>
<button onclick="window.location.href='tentang.html'" class="button tentang">Tentang</button>
</div>


</body>
</html>