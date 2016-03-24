
<!DOCTYPE html>
<html lang="en">
    <head>
	    <link rel="stylesheet" href="style/validation.css">
        <meta charset="utf-8" />
        <title>Tea Time: Modifying account...</title>
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



$user = $_POST["username"];
$pw = $_POST["password"];
$email = $_POST["email"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$phonenumber = $_POST["phone"];


$sql = "SELECT ID FROM MyUsers WHERE Username='" . $user . "' AND ID<>" . $userid;

$result=$conn->query($sql);
$existingid = 0;
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		$existingid = $row['ID'];
    }
}

if ($existingid > 0) {
    echo "<script type='text/javascript'>
           window.location = 'account.php?exists=true';
      </script>";
} else {
   $sql = "UPDATE MyUsers SET";
   $sql .= " Username='" . $user . "'";
   $sql .= ", Password='" . $pw . "'";
   $sql .= ", Email='" . $email . "'";
   $sql .= ", FirstName='" . $firstname . "'";
   $sql .= ", LastName='" . $lastname . "'";
   $sql .= ", PhoneNumber='" . $phonenumber . "'";
   $sql .= " WHERE ID=" . $userid;

   if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
           window.location = 'account.php?success=true';
      </script>";
   }
}

$conn->close();
} else {
    echo "<script type='text/javascript'>
           window.location = 'login.php';
      </script>";
}
?>
