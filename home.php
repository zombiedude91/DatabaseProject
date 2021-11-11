<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">


<?php

if (!isset($_SESSION["login"])) {
    $_SESSION["login"] = "start";
}


if ($_SESSION["login"] == "False") {
    $_SESSION["login"] = "start";
}
?>
<head>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Friendly-Neighborhood</title>
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
        <!-- Custom styles for this template -->
        <link href="css/landing-page.min.css" rel="stylesheet">
    
    </head>
</head>
<body>
    <body data-new-gr-c-s-check-loaded="14.1036.0" data-gr-ext-installed="">

        <!-- Navigation -->
        
        <nav class="navbar navbar-light bg-light static-top">
            <div class="container">
                <a class="navbar-brand" href="#">Friendly-Neighborhood</a>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-secondary my-2 my-sm-0 mx-3" type="submit">Search</button>
                    <div class="float-right">
                    <a class="btn btn-primary mr-2" href="login.php">Login</a><a class="btn btn-secondary" href="signup.php">Sign Up</a>
                </div>
                </form>
            </div>
        </nav>
    
        <!-- Masthead -->
        <header class="masthead text-white text-center">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-9 mx-auto">
                        <h1 class="mb-5">Promotion</h1>
                    </div>
                    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                        <form action="shopfilter.php" method="POST" role="form">
                            <!--<div class="form-row">
                                <div class="col-12 col-md-9 mb-2 mb-md-0">
                                    <input name="search" class="form-control form-control-lg" placeholder="Search for art">
                                </div>
                                <div class="col-12 col-md-3">
                                    <button type="submit" class="btn btn-block btn-lg btn-primary">Browse</button>
                                </div>
                            </div>-->
                        </form>
                    </div>
                </div>
            </div>
        </header>
    
        <!-- Icons Grid -->
        <section class="features-icons bg-light text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
    
    
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <a class="stretched-link" href="login.php" style="text-decoration:none; color:black;">
                            <img src="/img/clean.jpg" style="width: 300px;height: fit-content;">
                                <!--<div class="features-icons-icon d-flex">
                                    <i class="icon-screen-desktop m-auto text-primary"></i>
                                </div>-->
                                <h3>Sell</h3>
                                <p class="lead mb-0">If you are an artist, sell your art here!</p>
                            </a>
                        </div>
    
    
                    </div>
    
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                            <a class="stretched-link" href="shopfilter.php" style="text-decoration:none; color:black;">
                            <img src="/img/clean.jpg" style="width: 300px;height: fit-content;">
                                <!--<div class="features-icons-icon d-flex">
                                    <i class="icon-layers m-auto text-primary"></i>
                                </div>-->
                                <h3>Browse</h3>
                                <p class="lead mb-0">Many artists have exhibited their art, see it here!</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                            <a class="stretched-link" href="login.php  " style="text-decoration:none; color:black;">
                            <img src="/img/clean.jpg" style="width: 300px;height: fit-content;">
                                <!--<div class="features-icons-icon d-flex">
                                    <i class="icon-check m-auto text-primary"></i>
                                </div>-->
                                <h3>Buy</h3>
                                <p class="lead mb-0">If you want to buy some art, buy it here!</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Image Showcases -->
        <section class="showcase">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
    
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/buy.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Buy</h2>
                        <p class="lead mb-0">We will help you to find the art you like and buy it easily. &nbsp;
                        We hope you will enjoy to buy the art on Arty.</p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/browse.jpg');">
                    </div>
                    <div class="col-lg-6 my-auto showcase-text">
                        <h2>Browse</h2>
                        <p class="lead mb-0">Many arts are delivered on Arty.&nbsp; You can browse our site to see the art from many artists around the world. </p>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/sell.jpg');"></div>
                    <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                        <h2>Sell</h2>
                        <p class="lead mb-0">Are you an artist? &nbsp; If yes, you can sell your art here. &nbsp;
                        Arty will make many user from around the world to see and buy your art from you.</p>
                    </div>
                </div>
            </div>
        </section>
    
        <!-- Bootstrap core JavaScript -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    
    
    </body>
    
</body>
</html>