<?php

    $sname = "dbs.spskladno.cz";
    $uname = "student12";
    $password = "spsnet";

    $db_name = "vyuka12";

    $conn = mysqli_connect($sname, $uname, $password, $db_name);
    if(!$conn) {
        echo "Connection Failed";
    }