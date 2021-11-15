<?php session_start(); require_once('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>About Us</title>
    
        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    
        <!-- Custom fonts for this template -->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    
        <!-- Custom styles for this template -->
        <link href="css/landing-page.min.css" rel="stylesheet">
    
    </head>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
        }
    
        html {
            box-sizing: border-box;
        }
        
        *, *:before, *:after {
            box-sizing: inherit;
        }
        
        .column {
            float: left;
            width: 33.3%;
            margin-bottom: 16px;
            padding: 0 8px;
        }
        
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            margin: 8px;
        }
        
        .about-section {
            padding: 50px;
            text-align: center;
            background-color: #474e5d;
            color: white;
        }
        
        .container {
            padding: 0 16px;
        }
        
        .container::after, .row::after {
            content: "";
            clear: both;
            display: table;
        }
        
        .title {
            color: grey;
        }
        
        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
        }
        
        .button:hover {
            background-color: #555;
        }
        
        @media screen and (max-width: 650px) {
            .column {
                width: 100%;
                display: block;
            }
        }
    </style>
</head>
<body>
    <body data-new-gr-c-s-check-loaded="14.1036.0" data-gr-ext-installed="">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light py-3" style="background-color: #e3f2fd; font-size:x-large;">
            <a class="navbar-brand px-3" style="font-weight:bolder;" href="home.php">Friendly-Neighborhood</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <!--<li class="nav-item active">
                        <a class="nav-link" href="#">Categories <span class="sr-only">(current)</span></a>
                    </li>-->
                    <li class="nav-item active">
                        <a class="nav-link" href="tips.html">Tips</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                </ul>
                
            </div>
        </nav>
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h2 class="py-3" style="text-align:center; background: #e3f2fd;">About Us</h2>
                        <div class="row py-3">   
                            <div class="container">
                                <h3>Our Company</h3><br>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><br>
                                <h3>Our Service</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p><br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div name="site-footer">
            <footer class="footer" style="background-color:gainsboro;">
                <div class="container">
                    <div class="row">
                        <div class="col-9">
                            <form>
                                <label for="email">Sign up to learn and get special offer </label>
                                <input type="text" id="email" name="email" placeholder="E-mail" />
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                </svg><br><br>
                                <h5>Contact Us</h5><br>
                                <p>Email: &emsp;&emsp; friendlyneighborhood@gmail.com</p>
                                <p>Address: &emsp; Bangkok 10000, Thailand</p>
                            </form>
                        </div>
                        <div class="col-3" style="text-align: center;">
                            <br><br><br><br>
                            <h5 style="color: black;"> Follow Us </h5>
                            <img style="height: 30px; width: 30px;" src="./Image/facebook.png">
                            <img style="height: 30px; width: 30px;" src="./Image/instagram.png">
                            <img style="height: 30px; width: 30px;" src="./Image/twitter.png">
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</body>
</html>
