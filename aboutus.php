<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tea Time - About Us</title>
	<link rel="stylesheet" href="style/base.css">
	<link rel="stylesheet" href="style/aboutus.css">

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
		<div id="opaque-div">
			<div>
				<h1>About Us</h1>				
				<p>We are a local, family owned business located in the heart of Vancouver. We have been serving tea lovers since 2000. We serve only the highest quality of loose leaf teas, ensuring that they are both organic and fair-traded, but also kept at a reasonable price! We value all of our customer’s input resulting in a diverse tea menu that can be enjoyed by tea experts all the way to tea novices alike.</p>
				<p>With the natural green tones reminiscent of the leaves we harvest all around the world, our location is specifically designed to create a calming atmosphere the moment you enter the building, making you never want to leave. The aroma of all the different teas will make you at ease creating the ideal space sought after by many. Feel free to stop by for a tea-to-go or stay with us and experience our Afternoon High-Tea, available by reservations.</p>

				<h1>About Our Tea</h1>
				<h3>Black Tea</h3>
				<p>Black tea is harvested from the Assamese plant. Its black colour comes from the over-oxidization of tea-leaves, either through the process of smoking them or by the sun, allowing them to retain their flavour for several years. The perks of being over-oxidized are that it lets them gain a stronger, multi-complex flavour profile in comparison to the other types. Black Tea is recommended for anyone looking for a tea with a medium to high amount of caffeine.</p>

				<h3>Green Tea</h3>
				<p>Green tea leaves are harvested from Camellia sinensis plant, where they are immediately steamed and dried. Immediately steaming the leaves gives green tea a mild taste making it more natural and organic. Consumption of green tea has been associated with many different types of health benefits ranging from increased metabolic rate to reduced risks to cardiovascular diseases. Green tea is recommended for anyone looking for a tea with a low to medium amount of caffeine amount.</p>

				<h3>Oolong Tea</h3>
				<p>Oolong Tea is also harvested from Camellia sinensis leaves but have been withered by sunlight and only partially oxidized. As a result of this process, it has a wide flavour profile ranging from a fragrant-fruity to a bolder, robust taste. Oolong Tea is recommended for anyone looking for a tea with a low to high amount of caffeine.</p>

				<h3>White Tea</h3>
				<p>White tea contains the most amount of antioxidants out of all the tea groups. Similar to both the oolong tea and green tea, white tea is harvested from the Camellia sinensis plant, which allows it to have the same benefits as the others. It is harvested when the tea leaves are young and quickly dried giving it a distinct sweet and fragrant taste. White tea is recommended for anyone looking for a tea with a lower caffeine amount.</p>

				<h3>Pu-Erh Tea</h3>
				<p>Pu-Erh tea is a form of black tea that has undergone a different cultivation process of being both aged and fermented. The moment the leaves are picked they are quickly processed in order to stop oxidation. Due to the fermentation process Pu-Erh has flavour profile of fruity with an earthy undertone.  Pu-Erh tea is recommended for anyone looking for a tea with a medium to high amount of caffeine.</p>

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