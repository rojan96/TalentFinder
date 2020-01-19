<?php
    include "connection.php";
    session_start();
    $keyword=$_GET['findpost'];
    $search = mysqli_query($conn,"SELECT projectname, username, projectrequirements FROM talentrequired WHERE projectrequirements LIKE '%$keyword%'");
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feed</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poiret+One" rel="stylesheet">
    <style>
        body{
            font-family: 'Poiret One'; background-color: #2F3C7E; color: Black;position: relative;
        }

        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: 0.75rem;
        }



        .form-label-group>input,
        .form-label-group>label {
            padding: var(--input-padding-y) var(--input-padding-x);
            height: auto;
            border-radius: 2rem;
        }

        .form-label-group>label {
            position: absolute;
            top: 0;
            left: 0;
            display: block;
            width: 100%;
            margin-bottom: 0;
            /* Override default `<label>` margin */
            line-height: 1.5;
            color: #495057;
            cursor: text;
            /* Match the input under the label */
            border: 1px solid transparent;
            border-radius: .25rem;
            transition: all .1s ease-in-out;
        }

        .form-label-group input::-webkit-input-placeholder {
            color: transparent;
        }

        .form-label-group input:-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-ms-input-placeholder {
            color: transparent;
        }

        .form-label-group input::-moz-placeholder {
            color: transparent;
        }

        .form-label-group input::placeholder {
            color: transparent;
        }

        .form-label-group input:not(:placeholder-shown) {
            padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
            padding-bottom: calc(var(--input-padding-y) / 3);
        }

        .form-label-group input:not(:placeholder-shown)~label {
            padding-top: calc(var(--input-padding-y) / 3);
            padding-bottom: calc(var(--input-padding-y) / 3);
            font-size: 12px;
            color: #777;
        }

        .container{
            padding-top: 1%;
            padding-bottom: 1%;
        }
    </style>
</head>

<body>
<div class="container-fluid">
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
                    <a class="nav-link" href="index.php"><h3>Home</h3> <span class="sr-only">(current)</span></a>
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
</div>

<div class="container" style="padding-top: 1%">
    <div class="jumbotron bg-light">
        <h1 class="display-4">Working on a new project? Let everyone know.</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="addnewad.php">
                    <input type="text" id="projectname" name="projectname" placeholder="Project Name" required
                           style="padding-bottom: 1%"><br>
                    <textarea type="text" id="projectrequirements" name="projectrequirements"
                              placeholder="Project Requirement" rows="4" cols="50" required></textarea>
                    <button type="submit">
                        Post
                    </button>
                </form>
            </div>
            <div class="col-md-6">
                <form action="search.php" style="margin-right: 1px"><input type="text" name="findpost" placeholder="Find projects"> <input type="submit" value="Search"></form>
                <form action="searchbio.php"><input type="text" name="findpost" placeholder="Find Talent"> <input type="submit" value="Search"></form>
            </div>
        </div>
    </div>


    <?php
        while ($row = mysqli_fetch_assoc($search)){
            ?>
       <div class="card" style="margin-bottom: 1%">
            <div class="card-body">
                <?php
                $username=$row['username'];
                $getemail = mysqli_query($conn, "SELECT Email FROM userinfo WHERE username = '$username'");
                        while ($row2 = mysqli_fetch_assoc($getemail)){
                            $email=$row2['Email'];
                        }


                ?>
                <div class="card-title h3">Project name: <?php echo $row['projectname'].'<br>';?></div>
                <div class="h4">Project owner: <?php echo $row['username'].'<br>';?></div>
                <div class="h4">Project requirements: <?php echo $row['projectrequirements'].'<br>';?></div>
                <div class="h4">Email : <?php echo $email.'<br>';?></div>
            </div>
       </div>
       <?php }

        ?>



</div>
</body>
</html>
