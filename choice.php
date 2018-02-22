<?php
include 'connection.php';
session_start();?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <p><b><center>Please select the option you want to register as:</center></b></p><br>
    <link rel="stylesheet" href="css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <body style="background-color: gray;">
</head>


<style>
.btn-group input {
    background-color: #0080ff; /* blue background */
    border: 6px solid #FFFFFF; /* black/blue border */
    color: black; /* White text */
    padding: 100px 100px; /* Some padding */
    cursor: pointer; /* Pointer/hand icon */
    width: 100%; /* Set a width if needed */
    display: block; /* Make the buttons appear below each other */
  }

.btn-group input :not(:last-child) {
    border-bottom: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group input:hover {
    background-color: #0040ff;
}
input
{
    font-size:40px;
}
</style>
<body>


<div class="btn-group">
  <form>
    <input class="MyButton" type="button"  value="Tenant" onclick="window.location.href='registration.php'" />
    <input class="MyButton2" type="button" value="Landlord" onclick="window.location.href='registration.php'" />
</form>

</div>
<br><center><p><b>Already a member? Click <a href="index.php">here</a> to login.</b></p></center>

</body>
</html>

<!-- <div class="form">
<a href="logout.php">Logout</a>
-->


</html>
