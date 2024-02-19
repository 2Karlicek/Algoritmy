<?php

    $sname = "localhost";
    $uname = "root";
    $passwprd = "";

    $db_name = "test_db";

    $conn = mysqli_cpnnect($sname, $uname, $password, $db_name);

    if(!$conn) {
        echo "Connection Failed";
    }