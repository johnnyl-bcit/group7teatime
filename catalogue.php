<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tea Time - Catalogue</title>
	<link rel="stylesheet" href="style/base.css">
	<link rel="stylesheet" href="style/catalogue.css">

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
     <?php
        if(isset($_COOKIE["userid"])) { $userid = $_COOKIE["userid"];}


        $servername = "mysql4.000webhost.com";
        $username = "a3229231_teatime";
        $password = "Comp1536teatime";
        $dbname = "a3229231_teatime";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Teas.ID, TeaTypes.Type AS TEA_TYPE, TeaName, Description";
        $sql .= ", (CASE WHEN Favourites.ID>0 THEN 1 ELSE 0 END) AS IS_FAVE";
        $sql .= " FROM Teas";
        $sql .= " INNER JOIN TeaTypes ON TeaTypes.ID = Teas.Type";
        $sql .= " LEFT JOIN Favourites ON Favourites.TeaID=Teas.ID AND Favourites.UserID=" . $userid; 
        $sql .= " ORDER BY TEA_TYPE, ID";
        
        echo $sql;    
        
        $teas_black = array();
        $teas_green = array();
        $teas_oolong = array();
        $teas_white = array();
        $teas_puerh = array();
        
        $index_black = 0;
        $index_green = 0;
        $index_oolong = 0;
        $index_white = 0;
        $index_puerh = 0;
       
        $result=$conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $teaid = $row['ID'];
                $teatype =  $row['TEA_TYPE'];
                $teaname = $row['TeaName'];
                $teadescription = $row['Description'];
                $teafave =  $row['IS_FAVE'];

                switch ($teatype) {
                case "Black":
                    $teas_black[$index_black] = array($teaid, $teaname, $teadescription, $teafave);
                    $index_black++;
                    break;
                case "Green":
                    $teas_green[$index_green] = array($teaid, $teaname, $teadescription, $teafave);
                    $index_green++;
                    break;
                case "Oolong":
                    $teas_oolong[$index_oolong] = array($teaid, $teaname, $teadescription, $teafave);
                    $index_oolong++;
                    break;
                case "White":
                    $teas_white[$index_white] = array($teaid, $teaname, $teadescription, $teafave);
                    $index_white++;
                    break;
                case "Pu-erh":
                    $teas_puerh[$index_puerh] = array($teaid, $teaname, $teadescription, $teafave);
                    $index_puerh++;
                }
            }
        }

        
        $conn->close();
    ?>
<body>
	<!-- Banner -->
	<a href="index.html"><div id="banner" class="container-fluid">
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
				          		<li><a href="#blackTea">Black</a></li>
					          	<li><a href="#greenTea">Green</a></li>
					         	<li><a href="#oolongTea">Oolong</a></li>
					          	<li><a href="#whiteTea">White</a></li>
				         		<li><a href="#puerhTea">Pu-Erh</a></li>
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
		<form action="updatecatalogue.php" method="post">

			<!-- Black Tea -->
			<span class="anchor" id="blackTea"></span>
			<div id="black-tea">
				<h1>Black</h1>
                <?php
                    $rowcount = ceil($index_black / 2); 
                    for ($x = 0; $x < $rowcount; $x++) {
                        echo ("<div class='row'>");
                       
                        $startcol = $x * 2;
                        $endcol = $startcol;
                        if ($endcol < $index_black) { $endcol++; }
                        for ($y = $startcol; $y <= $endcol; $y++) {
                            echo "<div class=\"col-sm-6\"><div>" ;
                            echo "<input class=\"css-checkbox\" id=\"" . $teas_black[$y][1] . "\"";
                            echo " type=\"checkbox\" name=\"" . $teas_black[$y][1] . "\" value=\"" . $teas_black[$y][0] . "\"";
                            if ($teas_black[$y][3] > 0) {
                                echo " checked>";
                            } else {
                                echo ">";
                            }
                            echo "<label for=\"" . $teas_black[$y][1] . "\" class=\"css-label\"></label>";
                            echo "<img src=\"img/blacktea_1.jpg\" alt=\"Blacktea\" width=\"200\" height=\"200\">";
                            echo "<h2>" . $teas_black[$y][1] . "</h2><br>";
                            echo "<p>" . $teas_black[$y][2] . "</p>";
                            echo "<a class=\"more\" href=\"#\">More</a>";
                            echo "</div></div>";
                        }

                        echo ("</div>");
                    }
                ?>
			</div>

			<!-- Green Tea -->
			<span class="anchor" id="greenTea"></span>
			<div id="green-tea" class="row">
				<h1>Green</h1>
			</div>

			<!-- Oolong Tea -->
			<span class="anchor" id="oolongTea"></span>
			<div id="oolong-tea" class="row">
				<h1>Oolong</h1>
			</div>

			<!-- White Tea -->
			<span class="anchor" id="whiteTea"></span>
			<div id="white-tea" class="row">
				<h1>White</h1>
			</div>

			<!-- Pu-Erh Tea -->
			<span class="anchor" id="puerhTea"></span>
			<div id="puerh-tea" class="row">
				<h1>Pu-erh</h1>
			</div>

            <div id="submit">
            <input type="submit" value="Update Wishlist">
            </div>
		</form>
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