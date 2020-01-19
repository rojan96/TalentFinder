<?php
session_start();

        $username=$_SESSION['Username'];
        if(isset($_POST['submit'])){
            $move="img/userprofile/".$_FILES['file']['name'];
                move_uploaded_file($_FILES['file']['tmp_name'],$move);
                $con = mysqli_connect("localhost","root","","talentfinder");

                $q = mysqli_query($con,"UPDATE userinfo SET image = '".$_FILES['file']['name']."' WHERE username = '".$username."'");
        }

header("Location: profile.php");


