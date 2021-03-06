<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tea Time - Login</title>
	<link rel="stylesheet" href="style/base.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Client-side validation JavaScript -->
    <script src="js/signupaccount.js"></script>
    <!-- JQuery for submit button-->
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script>
        $(function() {
            $("input[type=submit]")
          .button()
        });
    </script>
	<link rel="stylesheet" href="style/loginsignup.css">
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
		  		<a href="index.php"><img class="center-block" src="img/bannersmall.png" alt="Nav Bar Logo"></a>
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
		<h2>Log In</h2>

		<div id="form">
			<form action="loginsubmit.php" method="post" onsubmit="return validateLogin();"> 
				<table>
				   <tr>
					   <td> 
						<label for="username">Username:</label>
					   </td> 
					   <td> 
						<input type="text" name="username" id="username" onblur="checkUsername()">
					    <span class="validation" id="valUsername"></span>
					   </td> 
				   </tr>
				   <tr>
					   <td> 
						<label for="password">Password:</label>
					   </td> 
					   <td> 
						<input type="password" name="password" id="password" onblur="checkPW()">
                        <span class="validation" id="valPW"></span>
					   </td> 
				   </tr>
				   <tr>
					   <td>
					   </td> 
					   <td>
						<input type="submit" value="Log In" id="submit"> 
                        <span class="validation" id="valLogin"></span>
					   </td>
				   </tr> 
				</table>
			</form> 
			<br>
			<p>New to this site?</p> 
			<p>Please sign up <a href="signup.php">here</a>.</p>
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

 <script type="text/javascript">
        var myURL = window.location.href;

        if (myURL.indexOf('?') > 0 && myURL.endsWith("?invalid=true")) {
            document.getElementById("valLogin").innerHTML = "Invalid username or password.";
        } else if (myURL.indexOf('?') > 0 && myURL.endsWith("?signup=true")) {
            document.getElementById("valLogin").innerHTML = "Account created. Please sign in.";
        } else if (myURL.indexOf('?') > 0 && myURL.endsWith("?delete=true")) {
            document.getElementById("valLogin").innerHTML = "Your account has been deleted.";
        } else {
            document.getElementById("valLogin").innerHTML = "";
        }

 </script> 