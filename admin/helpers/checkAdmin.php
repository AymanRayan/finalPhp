<?php
    if ($_SESSION['user']['title'] !== 'admin') {
        header('location: '.url(""));
        exit();
    }
?>