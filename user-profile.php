<?php session_start(); require_once('connect.php'); 

    $id = $_SESSION['uid'];
    $q = "SELECT * FROM user WHERE UserID = '$id'";
    
    if (!$mysqli->query($q))
        echo "UPDATE failed. Error: " .$mysqli->error;
    $result = $mysqli->query($q);
    $row = $result->fetch_array();

    $mysqli->close();
?>

<link href="profile.css" rel="stylesheet">

<body>
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
                                    <h3 class="mb-0">My account</h3>
                                </div>

                            </div>
                        </div>
                        <div class="card-body">
                            <form class="validate-form" action="pcheck.php" method="POST">
                                <h6 class="heading-small text-muted mb-4">User Profile</h6>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="input-first-name">First name</label>
                                                <input <?php echo 'value=' . $row[1]; ?> name="fname" type="text" id="input-first-name" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="input-last-name">Last name</label>
                                                <input name="lname" <?php echo 'value=' . $row[2]; ?> type="text" id="input-last-name" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group validate-input">
                                                <label class="form-control-label" for="input-email">Email address</label>
                                                <input <?php echo 'value=' . $row[3]; ?> name="email" type="email" id="input-email" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="input-last-name">Address</label>
                                                <input name="lname" <?php echo 'value=' . $row[4]; ?> type="text" id="input-last-name" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>

                                        <div class="col-lg-6">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="input-last-name">Phone</label>
                                                <input name="phone" <?php echo 'value=' . $row[5]; ?> type="number" id="phone" class="form-control form-control-alternative" required>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <hr class="my-4">
                                <!-- Address -->

                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group focused validate-input">
                                                <label class="form-control-label" for="input-address">Address</label>
                                                <textarea name="address" id="input-address" class="form-control form-control-alternative" type="text" required><?php echo $row[6]; ?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr class="my-4">
                                <!-- Description -->

                                <div class="pl-lg-4">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-address">About Me</label>
                                        <textarea name="pinfo" rows="4" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row[5]; ?></textarea>
                                    </div>
                                </div>


                                <div>
                                    <a href="profilehome.php?id=<?php echo $_SESSION["uid"] ;?>" type="button" class="btn btn-default">Back</a>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

    </div>


</body>