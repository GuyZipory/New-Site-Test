<?php
// Database connection
$dbhost = "localhost";
$dbuser = "guyzipory";
$dbpass = "3MLU8rljIah8iE3o";
$dbname = "phptest";
$mysql = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
//Test connection
if(mysqli_connect_errno()) {
  die("Database connection Failed: " .
    mysqli_connect_error() .
    " (" . mysqli_connect_errno() . ")"
  );
}


 ?>
<html>
<title>New PHP Test Site</title>
</html>
<?php
//Close Database connection
mysqli_close($mysql);
 ?>
