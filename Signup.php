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
    </style>

</head>

<body data-spy="scroll" data-target="#navbar" data-offset="0">


        <nav id="navbar" class="navbar navbar-success bg-light sticky-top" >
            <a class="navbar-brand" href="index.php">Talent Finder</a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#login">Log in</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#signup">Sign up</a>
                </li>

            </ul>
        </nav>
    <div >
        <h2 id="login" style="text-align: center">Log in</h2>
        <div class="container">
            <div class="row no-gutter">
                <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                <div class="col-md-8 col-lg-6">
                    <div class="login d-flex align-items-center py-5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-lg-8 mx-auto">
                                    <h3 class="login-heading mb-4">Welcome back!</h3>
                                    <form action="login.php" method="POST">
                                        <div class="form-label-group">
                                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                            <label for="inputEmail">Email address</label>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
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

        <div style="background-color: #FBEAEB; color: #2F3C7E">
            <h2 id="signup" style="text-align: center;">Sign Up</h2>
            <div class="container" style="background-color: #FBEAEB">
                <div class="row no-gutter">
                    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
                    <div class="col-md-8 col-lg-6">
                        <div class="login d-flex align-items-center py-5">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-8 mx-auto">
                                        <h5 class="card-title text-center">Register</h5>
                                        <form class="form-signin">
                                            <div class="form-label-group">
                                                <input type="text" id="inputUserame" class="form-control" placeholder="Username" required autofocus>
                                                <label for="inputUserame">Username</label>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                                                <label for="inputEmail">Email address</label>
                                            </div>

                                            <hr>

                                            <div class="form-label-group">
                                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                                <label for="inputPassword">Password</label>
                                            </div>

                                            <div class="form-label-group">
                                                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="Password" required>
                                                <label for="inputConfirmPassword">Confirm password</label>
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

<!--Contact Us Section-->

<div id="Contact"></div>
<div class="jumbotron" style="background-color: #161b21 ">
    <h4 class="display-4" style="color:#F4A950; text-align: center">Contact Us</h4>
    <p style="color:gray; text-align: center; color:white"> <a href="https://www.fb.com">Facebook</a></p>
    <p style="color:gray; text-align: center;color:#F4A950"> <a href="https://www.instagram.com"> Instagram </a></p>
    <h5 style="text-align: center; color:white;">2019 ©  Fly Away, Inc. All rights reserved.</h5>


</div>
</body>
</html>




