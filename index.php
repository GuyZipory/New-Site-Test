
<?php
include 'dbh.php';
session_start();
if (!$_SESSION["user"])
{
header("Location: login.php");
}else{
$user = $_SESSION["user"];
}
 ?>
<html>
<title>New PHP Test Site</title>
  <body>
    <?php
      $query = "SELECT * FROM users WHERE username='$user'";
      $result = mysqli_query($mysql, $query);
      $rr = mysqli_fetch_assoc($result);
      echo "Welcome! ".$rr['firstname']." " .$rr['lastname']."<br>";
     ?>
  <form action="logout.php" method="post">
    <button type="submit">Logout!</button><br>
  </body>
</html>
