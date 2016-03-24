<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tea Time - My Account</title>
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
    $( "input[type=submit]" )
      .button()
    });
    </script>

	<link rel="stylesheet" href="style/account.css">
</head>

<body>
    
    <?php
    $user = "";
    $email = "";
    $firstname = "";
    $lastname = "";
    $phonenumber = "";
    
    if(isset($_COOKIE["username"])) {
        $user = $_COOKIE["username"];
    }
    if(isset($_COOKIE["userid"])) {
        $id = $_COOKIE["userid"];

        $sql = "SELECT Email, FirstName, LastName, PhoneNumber FROM MyUsers WHERE ID=" . $id;

        $servername = "mysql4.000webhost.com";
        $username = "a3229231_teatime";
        $password = "Comp1536teatime";
        $dbname = "a3229231_teatime";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result=$conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
		        $email = $row['Email'];
		        $firstname = $row['FirstName'];
		        $lastname = $row['LastName'];
		        $phonenumber = $row['PhoneNumber'];
            }
        }

        $teatypes = array();
        $teanames = array(); 

        $sql = "SELECT TeaTypes.Type AS TEA_TYPE, Teas.TeaName AS TEA_NAME FROM Favourites";
        $sql .= " INNER JOIN Teas ON Teas.ID = Favourites.TeaID";
        $sql .= " INNER JOIN TeaTypes ON TeaTypes.ID = Teas.Type";
        $sql .= " WHERE Favourites.UserID=" . $id;
    
        $index = 0; 
        $result=$conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $teatypes[$index] =  $row['TEA_TYPE'];
                $teanames[$index] =  $row['TEA_NAME'];
                $index++;
            }
        }

    
        $conn->close();
    }
    ?>
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
		<h1>My Account</h1> 
		
		<!-- Modify Account Form -->
		<div id="form">
			<form action="modify.php" method="post" onsubmit="return validateSignup();"> 
				<table>
				   <tr>
					   <td> 
						<label for="email">Email:</label>
					   </td> 
					   <td> 
						<input type="text" name="email" id="email" onblur="checkEmail()" value="<?php echo $email;?>">
                        <span class="validation" id="valEmail"></span>
					   </td> 
				   </tr>
				   <tr>
					   <td> 
						<label for="username">Username:</label>
					   </td> 
					   <td> 
						<input type="text" name="username" id="username" onblur="checkUsername()" value="<?php echo $user;?>">
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
						<label for="confirmpw">Confirm Password:</label>
					   </td> 
					   <td> 
						<input type="password" name="confirmpw" id="confirmpw" onblur="checkPWConfirm()">
                        <span class="validation" id="valPWConfirm"></span>
					   </td> 
				   </tr>
				   <tr>
					   <td> 
						<label for="firstname">First Name:</label>
					   </td> 
					   <td> 
						<input type="text" name="firstname" id="firstname" onblur="checkFirstName()" value="<?php echo $firstname;?>">
                        <span class="validation" id="valFirstName"></span>
					   </td> 
				   </tr>
				   <tr>
					   <td> 
						<label for="lastname">Last Name:</label>
					   </td> 
					   <td> 
						<input type="text" name="lastname" id="lastname" onblur="checkLastName()" value="<?php echo $lastname;?>">
                        <span class="validation" id="valLastName"></span>
					   </td> 
				   </tr>
				   <tr>
					   <td> 
						<label for="phone">Phone Number:</label>
					   </td> 
					   <td> 
						<input type="text" name="phone" id="phone" onblur="checkPhone()" value="<?php echo $phonenumber;?>">
                        <span class="validation" id="valPhone"></span>
					   </td> 
				   </tr>
				   <tr>
					   <td>
					   </td>
                       <td>
						<input type="submit" value="Save Changes" id="save"> 
                        <span class="validation" id="valModify"></span>
                       </td>
				   </tr> 
                    
				</table>
			</form>  
            <br>
		</div>

		<!-- User Wishlist --> 
		<div id="wishlist"> 
			<h3>Wish List</h3>

			<!-- Table of Wishlist Items--> 
			<table>
              <?php
                $max = count($teatypes);
                if ($max > 7) {$max = 7;}
                for($x = 0; $x < $max; $x++) {
                        echo "<tr><td>" . $teatypes[$x] . "</td><td>" . $teanames[$x] . "</td></tr>";
                }
                   
               ?>
			  <tr> 
				<td colspan="2">
					<input type="submit" value="Edit Wish List" name="editwl" id="editwl" onclick="editWishlist()"> 
				</td> 
			  </tr> 
			  <tr> 
				<td colspan="2">
					<input type="submit" value="Delete Wish List" name="deletewl" id="deletewl" onclick="deleteWishlist()"> 
				</td> 
			  </tr> 
			</table> 
            <span class="validation" id="valWishlist"></span>
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
        

        if (myURL.indexOf('?') > 0 && myURL.endsWith("?exists=true")) {
            document.getElementById("valCreate").innerHTML = "The username you selected already exists.";
            document.getElementById("valWishlist").innerHTML = "";
        } else if (myURL.indexOf('?') > 0 && myURL.endsWith("?success=true")) {
            document.getElementById("valCreate").innerHTML = "Account modified successfully.";
            document.getElementById("valWishlist").innerHTML = "";
        } else if (myURL.indexOf('?') > 0 && myURL.endsWith("?wishlist=true")) {
            document.getElementById("valWishlist").innerHTML = "Wishlist updated.";
            document.getElementById("valCreate").innerHTML = "";
        } else {
            document.getElementById("valCreate").innerHTML = "";
            document.getElementById("valWishlist").innerHTML = "";
        }

</script>   