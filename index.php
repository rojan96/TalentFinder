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
                font-family: "Poiret One";
            }
            #first{background-image: url('img/mag.jpg');
                background-size: 100%;
                padding-bottom: 5%;
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
            #titles{
                padding:3% 3% 3% 3%;
                background-color: #2F3C7E;
                color: #FBEAEB;
                text-align: center;
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
                                echo ' <li class="nav-item "> <h2><a class="nav-link" href="dashboard.php" style="color#161b21">Feed</a></h2></li>';
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
                                    echo 'Hello, '.$_SESSION['Username'];?>
                            <hr class="my-2">

                            <p class="lead">
                                <a class="btn btn-secondary btn-lg" href="dashboard.php" role="button">Find Talent Now!</a>
                            </p>
                            <?php
                        }
                        else {
                            echo 'Sign up to Find talent.';?>
                    <hr class="my-2">

                    <p class="lead">
                        <a class="btn btn-secondary btn-lg" href="Signup.php" role="button">Sign up or Log in!</a>
                    </p>
                    <?php
                        }
                        ?></p>


                </div>

            </div>
    </div>
    <div class="jumbotron">
        <h1 class="display-3" style="text-align: center; padding-top: 3%">What do we do?</h1>
        <h3 class="display-4" style="color:#FBEAEB">We help you find top talent for your creative needs such as:</h3>

    </div>

    <div class="container-fluid" style="background-color: #FBEAEB; padding-top: 3%; padding-bottom: 3%">
        <div class="container"><h2 id="titles">Logos</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="img/hair.png" target="_blank">
                            <img src="img/hair.png" style="width:95%">
                            <div class="caption">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="img/CN.png" target="_blank">
                            <img src="img/CN.png" style="width:95%">
                            <div class="caption">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="img/umb.jpg" target="_blank">
                            <img src="img/umb.jpg" style="width:100%">
                            <div class="caption">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>

            <h2 id="titles">Photography</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="https://unsplash.com/@naletu" target="_blank">
                            <img src="img/natalya.jpg" style="width:95%">
                            <div class="caption">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="https://unsplash.com/@riccardoch" target="_blank">
                            <img src="img/ric.jpg" style="width:95%">
                            <div class="caption">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="https://unsplash.com/@sirtook" target="_blank">
                            <img src="img/wild.jpg" style="width:100%">
                            <div class="caption">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            </br>

            <h2 id="titles">Monogram</h2>
            <p><a href="mono.php"> Request a personalized monogram. </a></p>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="img/m1.jpg" style="width:95%">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="img/m2.png" style="width:95%">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="img/m3.png" style="width:95%">
                    </div>
                </div>
            </div>
        </div>
    </div>
	  </br>
        <div id="About" style="padding-top: 5%"></div>
            <div class="container">
                <div class="jumbotron">
                    <h2 class="display-3" style="text-align: center;background-color: #FBEAEB ">What is TalentFinder?</h2>
                    <p class="lead">We are your number one website to find talents for your dream projects. Find the people you need here and get started. From painters to engineers, you can all find it here.</p><p> <a href="Signup.php"> Get Started!</a></p>
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
