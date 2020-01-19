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

            body {
                background-color: #2F3C7E;
            }
            #first{
                padding-bottom: 1%;
                font-family: 'Indie Flower', cursive;
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
                <nav class="navbar navbar-expand-sm bg-dark">
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

                            <?php
                            if (isset($_SESSION['Username']))
                            {
                                echo ' <li class="nav-item "> <h2><a class="nav-link" href="setupprofile.php" style="color#161b21">Profile</a></h2></li>';
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
            </div>
        </div>
                <div class="container">
                    <form action="uploadprofilepic.php" method="post" enctype="multipart/form-data">
                            <input type="file" name="file">
                            <input type="submit" name="submit">
                    </form>
                </div>
        </body>
</html>