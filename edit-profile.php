<?php    include 'connection.php';
if (isset($_GET['user'])) {
    $user = $_GET['user'];
    $get_user = $mysqli->query("SELECT * FROM users WHERE username = '$user'");
    $user_data = $get_user->fetch_assoc();
   } else {
             header("Location: profile.php");
}?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body style="background-image:url('img/backimg.jpg')">

    <title>
        <?php echo $user_data['username'] ?>'s Profile Settings</title>
</head>

<body> <a href="profile.php">Home</a> | Back to
    <a href="profile.php?user=<?php echo $user_data['username'] ?>">
    <?php echo $user_data['username'] ?>
    </a>'s Profile
    <center><h3>Update Profile Information</h3>
    <form method="post" action="update-profile-action.php?user=<?php echo $user_data['username'] ?>">
      <label>Name:</label><br><input type="text" name="full_name" value="<?php echo $user_data['full_name'] ?>" /><br>
      <label>Age:</label><br><input type="text" name="age" value="<?php echo $user_data['age'] ?>"/><br>
      <label>Gender:</label><br><input type="text" name="gender" value="<?php echo $user_data['gender'] ?>" /><br>
      <label>Address:</label><br> <input type="text" name="address" value="<?php echo $user_data['address'] ?>" /><br><br>
      <label>College:</label><br> <input type="text" name="college" value="<?php echo $user_data['college'] ?>" /><br>
      <label>Course:</label><br> <input type="text" name="course" value="<?php echo $user_data['course'] ?>" /><br>
      <label>Year:</label><br> <input type="text" name="year" value="<?php echo $user_data['year'] ?>" /><br>
      <label>Max distance from college (kms):</label><br> <input type="text" name="distance" value="<?php echo $user_data['distance'] ?>" /><br><br>
      <label>Lease length(months):</label><br> <input type="text" name="leaselength" value="<?php echo $user_data['leaselength'] ?>" /><br>
      <label>Monthly rent:</label><br> <input type="text" name="rent" value="<?php echo $user_data['rent'] ?>" /><br>
      <label>Deposit:</label><br> <input type="text" name="deposit" value="<?php echo $user_data['deposit'] ?>" /><br>
      <label>Move in date:</label><br> <input type="text" name="move_in" value="<?php echo $user_data['move_in'] ?>" /><br>
      <label>Room type:</label><br> <input type="text" name="room" value="<?php echo $user_data['room'] ?>" /><br>

      <br>
       <input type="submit" name="update_profile" value="Update Profile" />
     </form>
   </center>
</body>

</html>
