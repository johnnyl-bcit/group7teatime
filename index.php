<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tea Time</title>
	<link rel="stylesheet" href="style/base.css">

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
		
		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			  <li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
			  <div class="item active">
			    <img src="img/teaplantation.jpg" alt="Tea Plantation">  
			  </div>
			  <div class="item">
			    <img src="img/plant.png" alt="Tea Plant">
			  </div>    
			  <div class="item">
			    <img src="img/teacup.png" alt="Teacup"> 
			  </div>
			  <div class="item">
			    <img src="img/spoons.png" alt="Loose Tea">
			  </div>  
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div> <!-- myCarousel -->

		<div id="welcome">
		<h1>Welcome to Tea Time!</h1>
		<p>Here at Tea Time we pride ourselves in the quality of our loose leaf teas.  Our tea variety ranges from White to Pu-Erh, which can be viewed through our Online Catalogue. If you have any questions about our products, please feel free to send us a message or give us a call with the information on our Contact page. If you are interested about our daily operations, or what to expect when you come in to Tea Time, the information can be found on our About Us page.</p>
		</div> 

		<div id="home-content">
		<p>We hold our suppliers to a high standard of quality, making sure every step is followed to produce the best tea available under ethical conditions. We are dedicated at Tea Time to be a part of the solution for healthier living, which has led us to serving local fair-trade and organic tea.</p>
		<p>What does organic mean to us? For starters we work carefully with all of our artisan tea growers ensuring that they are certified organic meaning no fertilizers, herbicides and pesticides. This in turn reduces the amount chemicals damaging the environment and less harmful products being put into our bodies.</p>
		<p>What does fair-trade mean to us? Fair-trade standards play an important role when picking a supplier. We want to encourage proper working condition around the world; this helps all the smaller farm organisations giving them the boost they need to produce top standard leaves. On top of that this ensures that they are being paid a fair amount of money to support standard living expenses.</p>
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