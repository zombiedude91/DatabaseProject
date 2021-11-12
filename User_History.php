<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>History</title>

	<!-- Bootstrap core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<!-- Custom styles for this template -->
	<link href="css/default.css" rel="stylesheet">
</head>
<body>
<div id="wrapper"> 

	<nav class="navbar navbar-light bg-light static-top">
		<div class="container">
			<a class="navbar-brand" href="home-1.php">Friendly-Neighborhood</a>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
				<button class="btn btn-secondary my-2 my-sm-0 mx-3" type="submit">Search</button>
				<div class="float-right">
					<a class="btn btn-primary mr-2" href="home-1.php">Home</a>
				</div>
			</form>
		</div>
	</nav>

	<div id="div_main">
		
		<div id="div_content" class="usergroup">
			<h2>History</h2>
			<table>
				<col width="20%">
				<col width="35%">
				<col width="35%">
				<col width="10%">

				<tr>
					<th>HistoryID</th> 
					<th>Service</th>
					<th>Date</th>
					<th>Details</th>
				</tr>

				<tr>
					<td><?php echo "1";?></td> 
					<td><?php echo "Fix air conditioner";?></td>
					<td><?php echo "11/11/20";?></td>
					<td><button class="btn btn-secondary my-2 my-sm-0 mx-3">Details</button></td>
				</tr>				

				<?php 
					if (empty($_POST['submit'])) {
						exit;
				}
				?>
				
				<tr>
					<td><?php echo $_POST["HistoryID"];?></td> 
					<td><?php echo $_POST["Service"];?></td>
					<td><?php echo $_POST["Date"];?></td>
					<td><button class="btn btn-secondary my-2 my-sm-0 mx-3">Details</button></td>
				</tr>
				
			</table>
		</div> <!-- end div_content -->
		
	</div> <!-- end div_main -->

	<div id="div_footer">  
		
	</div> <!-- end div_footer -->

</div> <!-- end wrapper -->
</body>
</html>

