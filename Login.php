<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign up or Log in</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-flat.css">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Poiret+One" rel="stylesheet">
    <style>
        body{
            font-family: 'Poiret One'; background-color: #2F3C7E; color: #FBEAEB;position: relative;
        }

        :root {
            --input-padding-x: 1.5rem;
            --input-padding-y: 0.75rem;
        }

        .login,
        .image {
            min-height: 100vh;
        }

        .bg-image {
            background-image: url('img/crowd2.jpg');
            background-size: 100%;
            background-position: right;
            background-repeat: no-repeat;
        }

        .login-heading {
            font-weight: 300;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
            border-radius: 2rem;
        }

        .form-label-group {
            position: relative;
            margin-bottom: 1rem;
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
    <div>
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
                            <a class="nav-link" href="index.php"><h3>Home</h3> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#Contact"><h3>Contact Us</h3></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php"><h3>Sign up</h3></a>
                        </li>
                    </ul>
                </div>
            </nav>
        <div style="background-color: #2F3C7E; color:#FBEAEB ">
                       <div class="container">
                <div class="jumbotron" style="background-color: #98b2e6">
                    <h2 class="display-4" style="text-align: center;color:#2F3C7E">Login</h2>
                </div>
        <div class="container">
            <div class="row no-gutter">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                <div class="col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                    <h3 class="login-heading mb-4">Welcome back!</h3>
                                    <form action="userlogin.php" method="POST">
                                        <div class="form-label-group">
                                            <input type="text" id="username" name="username" class="form-control" placeholder="Email address" required autofocus>
                                            <label for="username">Username</label>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                                            <label for="inputPassword">Password</label>
                                        </div>

                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">Remember password</label>
                                        </div>
                                        <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                                        <div class="text-center">
                                            <a class="small" href="#">Forgot password?</a></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="jumbotron" style="background-color: #FBEAEB ">
        <h5 style="text-align: center; color:black;">2019 ©  TalentFinder, Inc. All rights reserved.</h5>


    </div>

</body>