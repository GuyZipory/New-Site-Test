
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>
<body>
<form action="login.php" method="post">
  <input type="text" name="user" placeholder="Username"><br>
  <input type="password" name="pwd" placeholder="Password"><br>
  <button type="submit">Login!</button><br>
  <?php
  include 'dbh.php';
  if(isset($_POST['user']))
  {
  $user = $_POST['user'];
  $pwd = $_POST['pwd'];

  if (!$user)
{
  echo "You must enter username";
}   elseif (!$pwd) {
    echo "You must enter password!";
}else {
  $query = "SELECT * FROM users WHERE username='$user'";
  $result = mysqli_query($mysql, $query);
  $rr = mysqli_fetch_assoc($result);
  if($rr['password'] == $pwd)
  {
    session_start();
    $_SESSION["user"] = $user;
    header("Location: index.php");
    }else {
    echo "Worng password!";
    }
}
  }
   ?>
</body>
