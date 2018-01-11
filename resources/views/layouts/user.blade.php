<!DOCTYPE html>
<!--	
   FREE SINGLE PAGE DESIGN BY AYATHEMES.COM
	Free for personal and commercial use under the CCA 3.0 license (AYATHEMES/COM/license)
-->
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>overlay</title>
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  <link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/js/lightbox/css/lightbox.min.css">
  <link href="assets/css/style.css" rel="stylesheet" type="text/css">

  <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/open-sans:n3,n4:default.js" type="text/javascript"></script>
</head>
  <body>
  <nav class="navbar navbar-fixed-top">
  	<div class="container">
  		<!-- Brand and toggle get grouped for better mobile display -->
  		<div class="navbar-header">
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
  			<a class="navbar-brand text-uppercase" href="#"><b>Cari Rumah</b> <small>.com</small></a></div>
  		<!-- Collect the nav links, forms, and other content for toggling -->
  		<div class="collapse navbar-collapse" id="topFixedNavbar1">
			<ul class="nav navbar-nav navbar-right text-uppercase">
  				<li><a href="#carousel1">Rumah</a></li>
  				<li><a href="#features">Harga</a></li>
  				<li><a href="#blog">Tipe</a></li>
  				
  				<li><a href="#about">Agen</a></li>
  				<li><a href="#contact">contact</a></li>
			</ul>
		</div> 
  		<!-- /.navbar-collapse -->
	  </div>
  	<!-- /.container-fluid -->
  </nav>
  
  <div id="carousel1" class="carousel slide" data-ride="carousel">
  	<ol class="carousel-indicators">
  		<li data-target="#carousel1" data-slide-to="0" class="active"></li>
  		<li data-target="#carousel1" data-slide-to="1"></li>
  		<li data-target="#carousel1" data-slide-to="2"></li>
	  </ol>
  	<div class="carousel-inner" role="listbox">
  		<div class="item active">
			<img src="{{asset('assets/img/carousel.jpg')}}" alt="First slide image" class="center-block">
  			<div class="carousel-caption">
  				<h3>Selamat Datang</h3>
  				<p><span>RumahKu</span></p>
				<p><strong>Next</strong></p>
				<a href="#features"><i class="fa fa-angle-double-down"></i></a>
			</div>
			<!-- / carousel-caption -->
		</div>
		<!--/ item-->
  		<div class="item">
			<img src="{{asset('assets/img/carousel.jpg')}}" alt="Second slide image" class="center-block">
  			<div class="carousel-caption">
  				<h3>Selamat Datang</h3>
  				<p><span>RumahKu</span></p>
				<p><strong>Next</strong></p>
				<a href="#features"><i class="fa fa-angle-double-down"></i></a>
			</div>
			<!-- / carousel-caption -->
		</div>
		<!--/ item-->
  		<div class="item">
			<img src="{{asset('assets/img/carousel.jpg')}}" alt="Third slide image" class="center-block">
  			<div class="carousel-caption">
  				<h3>Selamat Datang</h3>
  				<p><span>RumahKu</span></p>
				<p><strong>Next</strong></p>
				<a href="#features"><i class="fa fa-angle-double-down"></i></a>
			</div>
			<!-- / carousel-caption -->
		</div>
		<!--/ item-->
	  </div>
	  <!-- / carousel-inne-->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
			
	</div>
   @yield('content')
 <!--features-->
  <footer class="footer container-fluid text-center">
  	<div class="logo"><span>overlay</span></div>
	<div class="socials">
		<a href="#"><span class="fa fa-facebook"></span></a>
		<a href="#"><span class="fa fa-twitter"></span></a>
		<a href="#"><span class="fa fa-google-plus"></span></a>
	</div>
	<p>&copy; 2015, by overlay all rights reserved</p>
	<!--you must keep the link bellow, you are not allowed to remove it, if you want to remove it please contact us at aythemes.com/contact -->
	<div class="backlink"><a href="http://ayathemes.com">free animated single page websites</a></div>
  </footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="assets/js/bootstrap.js"></script>
	
	<!--the velocity animation framework-->
	<script src="assets/js/ScrollMagic.min.js"></script>
	<script src="assets/js/velocity.js"></script>
	<script src="assets/js/velocity.ui.js"></script>
	<script src="assets/js/animation.velocity.min.js"></script>
	<script src="assets/js/jquery.mixitup.min.js"></script>
	<script src="assets/js/lightbox/js/lightbox.min.js"></script>
	<script src="assets/js/jquery.countTo.js"></script>
	
	<!--custom javascript file	-->
	<script src="assets/js/main.js"></script>
  </body>
</html>