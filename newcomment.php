<?php
session_start();

include "connection.php";
$comment = $_GET['comment'];
$talentID =$_GET['id'];
$username = $_SESSION['Username'];
mysqli_query($conn,"INSERT INTO talentrequiredreply (ID, talentID, username,reply) VALUES (NULL ,'$talentID','$username','$comment')");
header("location: dashboard.php ");