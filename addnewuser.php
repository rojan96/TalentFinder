<?php
include "connection.php";
$username = $_GET['username'];
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$email = $_GET['email'];
$dateofbirth = $_GET['dateofbirth'];
$bio = $_GET['bio'];
$password = $_GET['password'];
$confirmpassword = $_GET['confirmpassword'];


$addprofile = mysqli_query($conn,"INSERT INTO userinfo (userID, Username, Firstname, Lastname, Password, Email, Confirmpassword,Dateofbirth, Bio) VALUES (NULL, '$username','$firstname','$lastname','$password','$email','$confirmpassword','$dateofbirth','$bio')");
//or die("Failed to query database".mysqli_error($conn));

header("location: Login.php");
//echo ' Sign up Successful. You\'ll be redirected in about 5 secs. If not, click <a href="setupprofile.php">here</a>.';

exit();