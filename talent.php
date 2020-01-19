<?php
?>

<html>
<head>
    <meta charset="UTF-8">
    <title> TalentFinder </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poiret+One" rel="stylesheet">
    <style>

        .comment-form-container {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 20px;
            border-radius: 2px;
        }

        .input-row {
            margin-bottom: 20px;
        }

        .input-field {
            width: 100%;
            border-radius: 2px;
            padding: 10px;
            border: #e0dfdf 1px solid;
        }

        .btn-submit {
            padding: 10px 20px;
            background: #333;
            border: #1d1d1d 1px solid;
            color: #f0f0f0;
            font-size: 0.9em;
            width: 100px;
            border-radius: 2px;
            cursor:pointer;
        }

        ul {
            list-style-type: none;
        }

        .comment-row {
            border-bottom: #e0dfdf 1px solid;
            margin-bottom: 15px;
            padding: 15px;
        }

        .outer-comment {
            background: #F0F0F0;
            padding: 20px;
            border: #dedddd 1px solid;
        }

        span.commet-row-label {
            font-style: italic;
        }

        span.posted-by {
            color: #09F;
        }

        .comment-info {
            font-size: 0.8em;
        }
        .comment-text {
            margin: 10px 0px;
        }
        .btn-reply {
            font-size: 0.8em;
            text-decoration: underline;
            color: #888787;
            cursor:pointer;
        }
        #comment-message {
            margin-left: 20px;
            color: #189a18;
            display: none;
        }
        body {
            background-color: #2F3C7E;
        }
        #first{background-image: url('img/crowd.jpg');
            background-size: cover;
            padding-bottom: 10%;
            font-family: 'Indie Flower', cursive;
        }
        .jumbotron{
            background-color: #2F3C7E;
            opacity: 1;
            padding-top: 10px;
            font-family: 'Poiret One', cursive;
        }

        .jumbotron h1{
            color: #FBEAEB;
        }
        .jumbotron p{
            color: #FBEAEB;
        }

        .jumbotron h3{
            color: #2F3C7E;
            text-align: center;
        }
        .jumbotron h4{
            color: #2F3C7E;
            text-align: center;
        }
        .jumbotron h5{
            text-align: center; color:#2F3C7E;
        }

        .navbar.navbar-expand-sm a{
            color:Black;
            padding-bottom: 5px;
        }
    </style>
</head>

<body>
<div id="first">
    <div class="container">
        <!--Navigation Bar Code-->
        <nav class="navbar navbar-expand-sm">
            <a class="navbar-brand" style="opacity: 1;" href="#"><img src="img/golo.png" height="100px" width = "100px"></a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php"><h2>Home</h2> <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#About"><h2>About</h2></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Contact"><h2>Contact Us</h2></a>
                    </li>


                    <?php
                    if (isset($_SESSION['Username']))
                    {
                        echo ' <li class="nav-item "> <h2><a class="nav-link" href="setupprofile.php" style="color#161b21">Profile</a></h2></li>';
                        echo ' <li class="nav-item "> <h2><a class="nav-link" href="dashboard.php" style="color#161b21">Dashboard</a></h2></li>';
                        echo ' <li class="nav-item "> <h2><a class="nav-link" href="logout.php" style="color#161b21">Log out</a></h2></li>';

                    }
                    else
                    {
                        echo ' <div class="nav-item "> <h2><a class="nav-link" href="Signup.php" style="color#161b21">Sign up</a><</h2>/div>';
                    }
                    ?>
                </ul>
            </div>
        </nav>