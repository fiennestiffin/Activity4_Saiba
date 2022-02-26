<?php

if (isset($_POST["submit"])) {
    $userEmail = $_POST["email"];
    $pwd = $_POST["password"];

    require_once 'dbhandler.php';
    require_once 'webfunctions.php';

    loginUser($conn, $userEmail, $pwd);
}
else {
    header("location: ../index.php");
    exit();
}