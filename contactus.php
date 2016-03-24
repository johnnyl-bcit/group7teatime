<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tea Time - Contact Us</title>
	<link rel="stylesheet" href="style/base.css">
	<link rel="stylesheet" href="style/contactus.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
	<!-- Banner -->
	<a href="index.php"><div id="banner" class="container-fluid">
		<img src="img/banner.png" alt="Banner Image">
	</div></a>

	<!-- Nav Bar -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Button for collapsing nav bar -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span> 
			        <span class="icon-bar"></span>
			  	</button>
		  		<a href="#"><img class="center-block" src="img/bannersmall.png" alt="Nav Bar Logo"></a>
	  		</div>

			<div class="collapse navbar-collapse" id="myNavbar">
		  		<ul class="nav navbar-nav">
					<li><a href="aboutus.php">About Us</a></li> 
					<li><a href="contactus.php">Contact Us</a></li>
					<li id="catalogue-dropdown" class="dropdown">
						<a class="dropdown-toggle" data-toggle="dropdown" href="#">Catalogue<span class="caret"></span></a>
			       			<ul class="dropdown-menu">
				          		<li><a href="catalogue.php#blackTea">Black</a></li>
					          	<li><a href="catalogue.php#greenTea">Green</a></li>
					         	<li><a href="catalogue.php#oolongTea">Oolong</a></li>
					          	<li><a href="catalogue.php#whiteTea">White</a></li>
				         		<li><a href="catalogue.php#puerhTea">Pu-Erh</a></li>
				        	</ul>
		        	</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					 <?php
                        if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
                            echo "<li id='menuaccount'><a href='account.php'>Account: " . $_COOKIE["username"] . "</a></li>";
                            echo "<li id='menulogout'><a href='logout.php'>Log out</a></li>";
                        } else {
                            echo "<li id='menulogin'><a href='login.php'>Log In/Sign Up</a></li>"; 
                        }  
                    ?>
		  		</ul>
	  		</div>
  		</div> 
	</nav>

	<!-- Main Section -->
	<div id="main" class="container"> 	
		<!-- NOTE TO TEAM: ONLY MAKE CHANGES WITHIN MAIN SECTION, DO NOT CHANGE ANYTHING OUTSIDE -->
	   	<h1>Contact Us</h1>

	   	<!-- Contact Information -->
	   	<div class="row">
			<div id="info" class="col-sm-6">
				<h2>Location and Hours</h2><br>
				<p>We are open Monday to Saturday 10am - 5:30pm</p><br>
				<p>1418 Lonsdale Avenue<br>North Vancouver,
				British Columbia<br>V7M 2J1<br>Canada</p>

				<h2>Contact Information</h2>
				<p>(604) 555-5555</p>
				<p>Email: <a href="mailto:tea_time@gmail.com">tea_time@gmail.com</a></p>
			</div>

			<!-- Embedded Google Map -->
			<div id="map" class="col-sm-6">
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
				<div>
					<div id="gmap_canvas" style="height:450px;width:450px;">	
					</div>
					<a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">Tea Time</a>
				</div>

				<script type="text/javascript"> function init_map(){var myOptions = {zoom:15,center:new google.maps.LatLng(49.32137059999999,-123.07237839999999),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(49.32137059999999, -123.07237839999999)});infowindow = new google.maps.InfoWindow({content:"<b>Tea Time</b><br/>1418 Lonsdale Avenue<br/> North Vancouver" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);
				</script>
			</div>
		</div>
	</div>

	<!-- Footer Section -->
	<footer class="footer">
		<div class="container-fluid">
			<ul>
				<li><a href="aboutus.php">About Us</a></li> 
				<li><a href="contactus.php">Contact Us</a></li>
				<li><a href="catalogue.php">Catalogue</a></li>
			</ul>
		</div>
	</footer>	

</body> 

</html>  