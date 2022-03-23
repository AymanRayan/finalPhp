<?php
    session_start();
    $server = "localhost";
    $dbName = "finalproject";
    $dbUser = "root";
    $dbPassword= "";
    $con = mysqli_connect($server, $dbUser, $dbPassword, $dbName);
?>