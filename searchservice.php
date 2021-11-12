<?php

    if (isset($_POST["search"])) {
        $search = $_POST["search"];
    } else {
        //$search = $_GET["id"];

        $mysqli = new mysqli('localhost', 'root', '', 'homeservice');

        if ($mysqli->connect_errno) {
            echo $mysqli->connect_errno . ": " . $mysqli->connect_error;
        }

        $j = "SELECT ServiceName FROM Service WHERE ServiceName =".$_GET["id"].";";

        $a = mysqli_fetch_all($mysqli->query($j));
        $search = $a[0][0];

        //var_dump($search);

        $mysqli->close();
    }


    //redirect
    header("Location: shop.php?shopsearch=" . $search . "&id=".$_GET["id"]);
?>