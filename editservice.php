<?php session_start(); require_once('connect.php'); 

    $uid = $_SESSION['uid'];
    $q = "SELECT * FROM user WHERE UserID = '$uid'";
    
    if (!$mysqli->query($q))
        echo "UPDATE failed. Error: " .$mysqli->error;
    $result = $mysqli->query($q);
    $row = $result->fetch_array();
    
    $mysqli->close();
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
        <link href="profile.css" rel="stylesheet">
        <!--<link href="css/landing-page.min.css" rel="stylesheet">-->
    
    </head>
</head>
<body>
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
                    <a class="nav-link" href="tips.php">Tips</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="aboutus.php">About Us</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 mx-3">
                <!--<form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>-->
                <div class="float-right">
                    <?php
                    if ($_SESSION["login"] == "start") {
                        echo '<a class="btn btn-primary mr-2" href="login.php">Login</a>';
                        echo '<a class="btn btn-secondary" href="signup.php">Sign Up</a>';
                    }
                    else {
                        echo '<a>'.$row[4]." ".$row[5].'</a>';
                        echo '<a class="btn btn-primary mr-2 ml-3" href="user-profile.php">My Profile</a>';
                        echo '<a class="btn btn-secondary" href="logout.php">Logout</a>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </nav>
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- User -->

                <div class=" order-xl-1 col-md-12">
                    <div class="card bg-secondary shadow">
                        <div class="card-header bg-white border-0">
                            <div class="row align-items-center">
                                <div class="col-8">
                                    <h3 class="mb-0" >Edit Profile</h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form class="validate-form" action="updateservice.php" method="POST">
                                <h6 class="heading-small text-muted mb-4"></h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <?php 
                                            $mysqli = new mysqli('localhost', 'root', '', 'homeservice');

                                            if ($mysqli->connect_errno) {
                                            echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
                                            }
                    
                                            $q = "SELECT * FROM service WHERE ServiceID = " . $_GET["id"];
                                            $row = mysqli_fetch_all($mysqli->query($q));
                                            $mysqli->close();
                                        ?>
                                        <div class="col-md-12">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="firstname">image</label>
                                                <input type="text" input="<?php echo 'value=' . $row[1]; ?>" name="image" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="lastname">Service Name</label>
                                                <input type="text" input="<?php echo 'value=' . $row[2]; ?>" name="service" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="lastname">Description</label>
                                                <input type="text" input="<?php echo 'value=' . $row[3]; ?>" name="description" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="lastname">Price</label>
                                                <input type="text" input="<?php echo 'value=' . $row[4]; ?>" name="price" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr class="my-4">
                                <div>
                                    <a onclick="history.back();" type="button" class="btn btn-default">Back</a>
                                    <button type="submit" class="btn btn-success">Confirm</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>