<?php

    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "box3dloginsystem";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (!$conn) {
        die('Connect Error: ' . mysqli_connect_error());
    }