<?php

if (isset($_POST["submit"])) {
    $firstName = $_POST["fn-text"];
    $lastName = $_POST["ln-text"];
    $userEmail = $_POST["email-text"];
    $pwd = $_POST["pass-text"];
    $pwdConf = $_POST["conf-pass-text"];

    require_once 'dbhandler.php';
    require_once 'webfunctions.php';

    if (pwdMatch($pwd, $pwdConf) !== false) {
        header("location: ../index.php?error=passworddontmatch");
        exit();
    }

    if (emailExists($conn, $userEmail) !== false) {
        header("location: ../index.php?error=existinguser");
        exit();
    }

    createUser($conn, $firstName, $lastName, $userEmail, $pwd);
}
else {
    header("location: ../index.php");
    exit();
}