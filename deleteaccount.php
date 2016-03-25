
<!DOCTYPE html>
<html lang="en">
    <head>
	    <link rel="stylesheet" href="style/validation.css">
        <meta charset="utf-8" />
        <title>Deleting account...</title>
    </head>
    <body>
        
    </body>
</html>

<?php
if(isset($_COOKIE["userid"])) {
$userid = $_COOKIE["userid"];

$servername = "mysql4.000webhost.com";
$username = "a3229231_teatime";
$password = "Comp1536teatime";
$dbname = "a3229231_teatime";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM MyUsers WHERE ID=" . $userid;
$sql .= "; DELETE FROM Favourites WHERE UserID=" . $userid . ";";

    if (($conn->multi_query($sql) === TRUE)) {
        
        if(isset($_COOKIE["username"])) { setcookie("username", "", time() - 3600); }
        if(isset($_COOKIE["userid"])) { setcookie("userid", "", time() - 3600); }
    
        echo "<script type='text/javascript'>
               window.location = 'login.php?delete=true';
                 </script>";
    } else {
        echo "<script type='text/javascript'>
           window.location = 'account.php';
        </script>";
    }
} else {
    echo "<script type='text/javascript'>
           window.location = 'login.php';
      </script>";
}
?>
