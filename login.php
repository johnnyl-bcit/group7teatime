<?php

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

 
$user = $_POST["username"];
$pw = $_POST["password"];
$sql = "SELECT ID FROM MyUsers WHERE Username='" . $user . "' AND Password='" . $pw . "' ORDER BY ID DESC";

$result=$conn->query($sql);
$id = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$id = $row['ID'];
    }
}

if ($id > 0) {
    echo "<script type='text/javascript'>
           document.cookie='id=" . $id . "username=" . $user . "';
           window.location = 'index.html';
      </script>";
} else {
    echo "<script type='text/javascript'>
           window.location = 'login.html?invalid=true';
      </script>";
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
	    <link rel="stylesheet" href="style/validation.css">
        <meta charset="utf-8" />
        <title>Tea Time: Logging in...</title>
    </head>
    <body>
    </body>
</html>
