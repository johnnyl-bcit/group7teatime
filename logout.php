
<!DOCTYPE html>
<html lang="en">
    <head>
	    <link rel="stylesheet" href="style/validation.css">
        <meta charset="utf-8" />
        <title>Tea Time: Logging out...</title>
    </head>
    <body>
    </body>
</html>

<?php

if(isset($_COOKIE["username"])) {
setcookie("username", "", time() - 3600);
}
if(isset($_COOKIE["userid"])) {
setcookie("userid", "", time() - 3600);
}
    

echo "<script type='text/javascript'>
    window.location = 'index.php';
    </script>";

?>
