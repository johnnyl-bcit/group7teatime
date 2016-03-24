
<!DOCTYPE html>
<html lang="en">
    <head>
	    <link rel="stylesheet" href="style/validation.css">
        <meta charset="utf-8" />
        <title>Tea Time: Modifying wishlist...</title>
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



$sql = "DELETE FROM Favourites WHERE UserID=" . $userid . ";";


if ($conn->query($sql) === TRUE) {
}

echo count($_POST);
if (count($_POST) > 0) {   
    $sql = "";
    foreach ($_POST as $key => $value) {
        $sql .= "INSERT INTO Favourites (UserID, TeaID)VALUES(" . $userid . ", " . $value . "); ";
    }



    if ((count($_POST) === 1) && ($conn->query($sql) === TRUE)) {
        echo "<script type='text/javascript'>
               window.location = 'account.php?wishlist=true';
                 </script>";
    } else if (($conn->multi_query($sql) === TRUE)) {
        echo "<script type='text/javascript'>
               window.location = 'account.php?wishlist=true';
                 </script>";
    }
} else {
    
        echo "<script type='text/javascript'>
               window.location = 'account.php?wishlist=true';
                 </script>";
}


$conn->close();
} else {
    echo "<script type='text/javascript'>
           window.location = 'login.html';
      </script>";
}
?>
