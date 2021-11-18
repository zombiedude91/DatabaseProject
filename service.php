<?php
session_start();

//echo ($_SESSION["login"]);

if (!isset($_SESSION["login"])) {
  $_SESSION["login"] = "start";
}

$mysqli = new mysqli('localhost', 'root', '', 'ARTY');

if ($mysqli->connect_errno) {
  echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
}

if (isset($_SESSION["uid"])) {
  $getcart = "SELECT * FROM cart WHERE ProductID = '" . $_GET["id"] . "' AND UserID = '" . $_SESSION["uid"] . "';";
  $cart = mysqli_fetch_all($mysqli->query($getcart));
}

$getPid = "SELECT * FROM product WHERE ProductID = '" . $_GET["id"] . "';";
$fetch = mysqli_fetch_all($mysqli->query($getPid));

$getsellname  = "SELECT FirstName, LastName FROM user where UserID ='" . $fetch[0][6] . "';";
$getname = mysqli_fetch_row($mysqli->query($getsellname));

$review = "SELECT * FROM rating,user WHERE rating.UserID=user.UserID AND ProductID ='" . $_GET["id"] . "';";
$getreview = mysqli_fetch_all($mysqli->query($review));

$star = "SELECT ROUND(AVG(value),1) FROM rating WHERE ProductID ='" . $_GET["id"] . "';";
$starvalue = mysqli_fetch_row($mysqli->query($star));

if (isset($_SESSION["uid"])) {
  $like = "SELECT * FROM plike WHERE ProductID = '" . $_GET["id"] . "' AND UserID = '" . $_SESSION["uid"] . "';";
  $getlike = mysqli_fetch_all($mysqli->query($like));
}
$countlike = "SELECT COUNT(LikeID) FROM plike WHERE ProductID ='" . $_GET["id"] . "';";
$getcount = mysqli_fetch_row($mysqli->query($countlike));

if ($starvalue[0] == NULL) {
  $starvalue[0] = 0;
}
//var_dump($starvalue[0]);

$mysqli->close();

$name = $fetch[0][1];
$price = $fetch[0][2];
$info = $fetch[0][3];
$sellername = $getname[0] . " " . $getname[1];


//echo $name,$price,$info,$sellername;

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">


  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-item.css" rel="stylesheet">
  <link href="mycss.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">Arty</a>


      <form class="form-inline my-2 my-lg-0" style="margin: 0 auto;" method="POST" action="shopfilter.php">
        <input name="search" class="form-control mr-sm-2" type="search" placeholder=<?php
                                                                                    if (!isset($_SESSION["search"])) {
                                                                                      $_SESSION["search"] = "Search";
                                                                                    }
                                                                                    echo '' . $_SESSION["search"] . '';
                                                                                    ?>>
        <button class="btn btn-darkblue my-2 my-sm-0" type="submit">Search</button>
      </form>




      <div class="float-right">

        <?php

        if ($_SESSION["login"] == "start") {

          echo '<a class="btn btn-primary mr-2 ml-2" href="login.php">Login</a>';
          echo '<a class="btn btn-secondary" href="signup.php">Sign Up</a>';
        } else {
          echo '<a class="btn btn-success" href="cart.php">Cart</a>';
          echo '<a class="btn btn btn-primary ml-2" href="addproduct.php">Sell</a>';
          echo '<a class="btn btn btn-info ml-2" href="profilehome.php?id=' . $_SESSION["uid"] . '">Profile</a>';
          echo '<a class="btn btn-danger ml-2" href="logout.php">Logout</a>';
        }
        ?>

      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">
        <h1 class="my-4">Sold by</h1>
        <h4 class="my-4"><a href="profilehome.php?id=<?php echo $fetch[0][6]; ?>"><?php echo $sellername; ?></a></h4>
        <div class="list-group">

          <?php

          $mysqli = new mysqli('localhost', 'root', '', 'ARTY');

          if ($mysqli->connect_errno) {
            echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
          }

          $q = "SELECT CategoryID, CategoryName FROM category";


          $row = mysqli_fetch_all($mysqli->query($q));


          //var_dump($row);

          $mysqli->close();


          foreach ($row as $i) {
            echo '<a href="shopfilter.php?id=' . $i[0] . '" class="list-group-item">' . $i[1] . '</a>';
          }
          ?>

        </div>
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="productimages/<?php echo $_GET["id"] . ".jpg"; ?>" alt="">

          <div class="card-body">

            <div class="row">
              <h3 class="card-title col-md"><?php echo $name ?></h3>

              <h4 class="col-md"><?php echo $getcount[0] . " likes"; ?></h4>

              <?php
              if (isset($_SESSION["uid"])) {
                if ($_SESSION["uid"] != NULL) {
                  $l = "Like";
                  if ($getlike != null) {
                    $l = "Unlike";
                  }
                  if ($cart == NULL && $_SESSION["uid"] != $fetch[0][6]) {
                    echo '<a class="btn btn-success mr-2" href="addcart.php?id=' . $_GET["id"] . '">Add to cart</a>';
                  }
                  echo '<a type="button" href="like.php?id=' . $_GET['id'] . '" class="btn btn-primary col-3">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hand-thumbs-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16v-1c.563 0 .901-.272 1.066-.56a.865.865 0 0 0 .121-.416c0-.12-.035-.165-.04-.17l-.354-.354.353-.354c.202-.201.407-.511.505-.804.104-.312.043-.441-.005-.488l-.353-.354.353-.354c.043-.042.105-.14.154-.315.048-.167.075-.37.075-.581 0-.211-.027-.414-.075-.581-.05-.174-.111-.273-.154-.315L12.793 9l.353-.354c.353-.352.373-.713.267-1.02-.122-.35-.396-.593-.571-.652-.653-.217-1.447-.224-2.11-.164a8.907 8.907 0 0 0-1.094.171l-.014.003-.003.001a.5.5 0 0 1-.595-.643 8.34 8.34 0 0 0 .145-4.726c-.03-.111-.128-.215-.288-.255l-.262-.065c-.306-.077-.642.156-.667.518-.075 1.082-.239 2.15-.482 2.85-.174.502-.603 1.268-1.238 1.977-.637.712-1.519 1.41-2.614 1.708-.394.108-.62.396-.62.65v4.002c0 .26.22.515.553.55 1.293.137 1.936.53 2.491.868l.04.025c.27.164.495.296.776.393.277.095.63.163 1.14.163h3.5v1H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z" />
                </svg>
                <span>' . $l . '</span></a>';
                }
              }
              ?>
            </div>

            <h4>$<?php echo $price ?></h4>
            <p class="card-text"><?php echo $info ?></p>
            <span class="text-warning">
              <?php

              for ($i = 0; $i < 5; $i++) {
                if ($i + 1 <= $starvalue[0]) {
                  echo '&#9733; ';
                } else {
                  echo '&#9734; ';
                }
              }
              echo '</span>';
              echo $starvalue[0] . ' stars'; ?>
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            Product Reviews
          </div>
          <div class="card-body">

            <?php
            foreach ($getreview as $r) {
              echo '<p>' . $r[4] . '</p>';
              echo '<small class="text-muted">Posted by ' . $r[6] . '</small>';

              echo '<span class="text-warning">   ';

              for ($i = 0; $i < 5; $i++) {
                if ($i + 1 <= $r[3]) {
                  echo '&#9733; ';
                } else {
                  echo '&#9734; ';
                }
              }
              echo '</span>';

              echo '<hr>';
            }

            ?>
            <!--check if user is logged in if not hide review section-->

            <?php

            if (isset($_SESSION["uid"])) {
              echo '
            <form action="review.php?id=' . $_GET["id"] . '" method="POST">
              <div class="row">

                <div class="col-3">
                  <fieldset class="rating">
                    <input type="radio" id="star5" name="rating" value="5" />
                    <label for="star5">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" />
                    <label for="star4">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" />
                    <label for="star3">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" />
                    <label for="star2">2 stars</label>
                    <input type="radio" id="star1" name="rating" value="1" />
                    <label for="star1">1 star</label>
                  </fieldset>

                </div>
                <textarea class="col" id="review" name="review" placeholder="leave a review"></textarea>

                <input type="submit" class="btn btn-success col-3" value="Submit">
              </div>
            </form>';
            }

            ?>

          </div>
        </div>


      </div>
    </div>
    <!-- /.card -->

  </div>
  <!-- /.col-lg-9 -->

  </div>


  <!-- /.container -->


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>