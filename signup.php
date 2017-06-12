
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
</head>
<body>
  <center>
    <h1> Sign Up!</h1>
<form action="signup.php" method="post">
  <input type="text" name="user" placeholder="Username"><br>
  <input type="text" name="email" placeholder="Email"><br>
  <input type="text" name="first" placeholder="First Name"><br>
  <input type="text" name="last" placeholder="Last Name"><br>
  <input type="password" name="pwd" placeholder="Password"><br>
  <select name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select><br>
  <button type="submit">Sign Up!</button><br>
  <?php
  include 'dbh.php';
  if(isset($_POST['gender']))
  {
  $user = $_POST['user'];
  $email = $_POST['email'];
  $first = $_POST['first'];
  $last = $_POST['last'];
  $pwd = $_POST['pwd'];
  $gender = $_POST['gender'];

  if (strlen($user) < 3)
{
  echo "Username have to have at list 3 Characters!";
}   elseif (!$first) {
    echo "You must enter First Name!";
}     elseif (!$email) {
      echo "You must enter Email";
}       elseif (!$last) {
        echo "You must enter Last Name!";
}         elseif (!$pwd) {
          echo "You must enter Password!";
}           elseif (strlen($pwd) < 6) {
            echo "The Password must be at list 6 Characters!";
}else {
  $query = "INSERT INTO users (username, email, firstname, lastname, password, gender)
  VALUES ('$user','$email' , '$first' , '$last', '$pwd' , '$gender')";
  $result = mysqli_query($mysql, $query);
  session_start();
  $_SESSION["user"] = $user;
  header("Location: index.php");
}
  }
   ?>
 </center>
</body>
