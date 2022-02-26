<?php

function pwdMatch($pwd, $pwdConf) {
    $result = true;
    if ($pwd !== $pwdConf) {
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}

function emailExists($conn, $userEmail) {
    $sql = "SELECT * FROM users WHERE Email = ?";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $userEmail);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname, $lastName, $userEmail, $pwd) {
    $sql = "INSERT users (Email, UserPassword, Firstname, Lastname) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../index.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $userEmail, $hashedPwd, $firstname, $lastName);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: ../index.php?error=none");
    exit();

}

function loginUser($conn, $userEmail, $pwd) {
    $userExist = emailExists($conn, $userEmail);

    if ($userExist === false) {
        header("location: ../index.php?error=invalidlogin");
        exit();
    }

    $pwdHashed = $userExist["UserPassword"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("location: ../index.php?error=invalidlogin");
        exit();
    }
    elseif ($checkPwd === true) {
        session_start();

        $_SESSION["currentUserEmail"] = $userExist["Email"];
        $_SESSION["currentUserID"] = $userExist["UserID"];
        $_SESSION["currentUserFirstName"] = $userExist["Firstname"];
        $_SESSION["currentUserLastName"] = $userExist["Lastname"];

        header("location: ../old-dashboard.php");
        exit();
    }
}