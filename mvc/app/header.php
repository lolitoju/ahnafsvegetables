<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Crops Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="../js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="logo">
		<div class="container">
			<div class="logo-info">
				<a href="/">
					<h1>Crops</h1>	
					<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
				</a>
			</div>
		</div>	
	</div>
	<!--//header-->		
	<!--navigation-->
	<div class="top-nav">
		<nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">Menu						
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="hvr-bounce-to-bottom"><a href="/">Home</a></li>
					<li><a href="#" class="dropdown-toggle hvr-bounce-to-bottom" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Store<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a class="hvr-bounce-to-bottom" href="gallery/id/1">Dairys</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery/id/2">Fruits</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery/id/3">Grains</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery/id/4">Meats</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery/id/5">Vegetables</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery/id/6">Beverages</a></li>
							<li><a class="hvr-bounce-to-bottom" href="gallery/id/7">Sweets</a></li>
						</ul>
					</li>
					<li class="hvr-bounce-to-bottom"><a href="/codes">Short Codes</a></li>
					<?php
						if(!isset($_SESSION["username"])) { //Not logged in
							print('<li class="hvr-bounce-to-bottom"><a href="/login">Login</a></li>');
							print('<li class="hvr-bounce-to-bottom"><a href="/register">Register</a></li>');
						} else { // Logged in
							print '<li class="hvr-bounce-to-bottom"><a href="/myaccount">My Account</a></li>';
							print '<li class="hvr-bounce-to-bottom"><a href="/logout">Logout</a></li>';
						}
					?>
				</ul>
				<div class="clearfix"> </div>
			</div>
		</nav>
	</div>
	<!--//navigation-->
	<!--baner-->
	<div class="baner about-bnr">
		<div class="container">
			<div class="baner-grids">
				<div class="col-md-6 baner-top">
					<img src="../images/img16.jpg" alt=""/>
				</div>
				<div class="col-md-6 baner-top">
					<img src="../images/img17.jpg" alt=""/>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>