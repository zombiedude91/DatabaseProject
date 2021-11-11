<!DOCTYPE html>
<html>
<?php
    if (!isset($_SESSION["login"])) {
        $_SESSION["login"] = "start";
    }
    if ($_SESSION["login"] == "False") {
        $_SESSION["login"] = "start";
    }
?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
    <body data-new-gr-c-s-check-loaded="14.1036.0" data-gr-ext-installed="">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: #e3f2fd; font-size:x-large;">
            <a class="navbar-brand px-3" style="font-weight:bolder;" href="#">Friendly-Neighborhood</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Categories <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Tips</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">About Us</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0 mx-3">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" />
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <div class="float-right">
                        <a class="btn btn-primary mr-2" href="login.php">Login</a>
                        <a class="btn btn-secondary" href="signup.php">Sign Up</a>
                    </div>
                </form>
            </div>
        </nav>
        <div class="py-5" style="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4" style=""><img class="img-fluid d-block" src="img/User.png" width="400" height="400"></div>
                        <div class="col-md-8" style="">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="col-md-12" style="">
                                                <h2 class="">UserID</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-12" style="">
                                                <h2 class="">#123456</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12" style="">
                                        <h2 class="">Firstname</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">John</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">Lastname</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">Smith</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">Gender</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">Male</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">Address</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">12/34 Bangkok</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">Phone No</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">085-555-5555</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">E-mail</h2>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">john@gmail.com</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <h2 class="">Password</h2>
                                    </div>
                                </div>
                                <div class="col-md-6" style="">
                                    <div class="col-md-12">
                                        <h2 class="" contenteditable="true">********</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</body>
</html>