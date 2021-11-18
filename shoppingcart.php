<?php 
session_start();
require_once('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
    if (!isset($_SESSION["login"])) {
        $_SESSION["login"] = "start";
    }
    if ($_SESSION["login"] == "False") {
        $_SESSION["login"] = "start";
    }

    $uid = $_SESSION['uid'];

    $q = "SELECT FirstName, LastName FROM user WHERE UserID = '$uid'";
    $row = mysqli_fetch_row($mysqli->query($q));
    $mysqli->close();
?>

<head>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Service</title>
    
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
					<div class="float-right">
						<?php
						if ($_SESSION["login"] == "start") {
							echo '<a class="btn btn-primary mr-2" href="login.php">Login</a>';
							echo '<a class="btn btn-secondary" href="signup.php">Sign Up</a>';
						}
						else {
							echo '<a>'.$row[0]." ".$row[1].'</a>';
							echo '<a class="btn btn-primary mr-2 ml-3" href="user-profile.php">My Profile</a>';
							echo '<a class="btn btn-secondary" href="logout.php">Logout</a>';
						}
						?>
					</div>
				</form>
			</div>
		</nav>


		<br />
		<div class="container pb-5">
			<h1 style=>Service</h1>
				<div style="clear:both"></div>
				<br />
				<h3>Order Details</h3>
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th width="40%">Item Name</th>
							<th width="20%">Price</th>
							<th width="15%">Total</th>
							<th width="5%">Action</th>
						</tr>
						<tr>
							<td><?php echo "item_name"; ?></td>
							<td>$ <?php echo "item_price"; ?></td>
							<td>$ <?php echo "item_price";?></td>
							<td><a href="shoppingcart.php"><span class="text-danger">Remove</span></a></td>
						</tr>						
					</table>
				</div>
			</div>
		</div>
		<br /><br /><br /><br /><br /><br />

		<!-- /.footer -->
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
</html>
