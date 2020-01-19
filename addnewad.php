<?php
session_start();

include "connection.php";
$projectname = $_GET['projectname'];
$projectrequirements = $_GET['projectrequirements'];
$username = $_SESSION['Username'];
mysqli_query($conn,"INSERT INTO talentrequired (talentID, username, time, projectname, projectrequirements) VALUES (NULL ,'$username',NULL,'$projectname','$projectrequirements')");
header("location: dashboard.php ");