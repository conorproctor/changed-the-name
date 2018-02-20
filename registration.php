<?php
include 'connection.php';
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    </head>
    <body style="background-image:url('img/backimg.jpg')">
  </head>
<body>
<?php
  if (!isset($_SESSION['username'])) { ?>
    <h1><center>Registration</center></h1>
<?php
  if (isset($_GET['register_action'])) {
    if ($_GET['register_action'] == "success") { ?>
      Successfully Registered!
<?php
 }
}
?>
  <center><form method="post" action="register-action.php">

    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>

    <input type="submit" name="submit"  value="Register" />
  </form>


  <br>Already a member? Click <a href="index.php">here</a> to login.
<?php } else { ?>
  You already logged in. Click <a href="logout.php">here</a> to logout.
<?php
 }
?>
</center>
</body>
</html>
