<?php
session_start();

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

            ul {
                list-style-type: none;
            }

            span.commet-row-label {
                font-style: italic;
            }

            span.posted-by {
                color: #09F;
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
                            <li class="nav-item active">
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
                                echo ' <li class="nav-item "> <h2><a class="nav-link" href="profile.php" style="color#161b21">Profile</a></h2></li>';
                                echo ' <li class="nav-item "> <h2><a class="nav-link" href="dashboard.php" style="color#161b21">Dashboard</a></h2></li>';
                                echo ' <li class="nav-item "> <h2><a class="nav-link" href="logout.php" style="color#161b21">Log out</a></h2></li>';

                            }
                            else
                            {
                                echo ' <div class="nav-item "> <h2><a class="nav-link" href="Signup.php" style="color#161b21">Sign up</a></h2>';
                            }
                            ?>
                        </ul>
                    </div>
                </nav>
                <!--First Jumbotron code-->
                <div class="jumbotron">
                    <h1 class="display-1">Welcome to TalentFinder</h1>
                    <p class="display-4"><?php
                        // include 'connection.php'
                        if (isset($_SESSION['Username'])) {
                            echo 'Hello, '.$_SESSION['Username'];
                        }
                        else {
                            echo 'Sign up to Find talent.';
                        }
                        ?></p>

                    <hr class="my-2">

                    <p class="lead">
                        <a class="btn btn-secondary btn-lg" href="talent.php" role="button">Find Talent Now!</a>
                    </p>
                </div>

            </div>
    </div>


        <div id="About" style="padding-top: 5%"></div>
            <div class="container">
                <div class="jumbotron">
                    <h2 class="display-3" style="text-align: center;background-color: #FBEAEB ">What is TalentFinder?</h2>
                    <p class="lead">We are your #1 website to find talent for your dream project. Get people with the best talent for your projects. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse elementum maximus elit ut tempor. Proin dapibus commodo tellus. Phasellus vel nisl vestibulum nunc imperdiet eleifend a nec massa. Proin ut nisi nisl. Quisque vel urna blandit, tempus nulla in, imperdiet augue. Integer pharetra, ex at pellentesque convallis, justo urna commodo ipsum, ut egestas libero ipsum in nunc. Maecenas sit amet pharetra enim, ac feugiat sapien. Sed nec eros commodo, bibendum libero sed, eleifend orci. Cras nec libero pharetra, vulputate mauris sit amet, feugiat lectus. Mauris sed elementum elit, quis feugiat nulla. Quisque maximus nisl eu erat ornare, id consequat tellus sollicitudin.</h2>
                    </p>
            </div>
        </div>

        <div id="Contact"></div>
        <div class="jumbotron" style="background-color: #FBEAEB ">
            <h3 class="display-4">Contact Us</h3>
            <h5 style="color:gray; text-align: center; color:white"><a href="https://www.fb.com">Facebook</a></h5>
            <h5 style="color:gray; text-align: center;color:#F4A950"><a href="https://www.instagram.com"> Instagram </a>
            </h5>
            <h4>2019 © TalentFinder, Inc. All rights reserved.</h4>


        </div>
    </div>

    </body>
</html>
