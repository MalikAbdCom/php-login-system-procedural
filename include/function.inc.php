<?php

// sign up validation

function emptyInput($username, $email, $password, $passwordRepeat, $fullname)
{
    if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat) || empty($fullname)) {
        return true;
    } else {
        return false;
    }
}

function userNameValidation($username)
{
    if (!preg_match("/^[a-z][a-z]+\d*$|^[a-z]\d\d+$/", $username)) {
        return true;
    } else {
        return false;
    }
}

function emailValidation($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function passwordValidation($password)
{
    if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
        return true;
    } else {
        return false;
    }
}

function passwordMatch($password, $passwordRepeat)
{
    if ($password !== $passwordRepeat) {
        return true;
    } else {
        return false;
    }
}

function userNameExists($conn, $username, $email)
{
    // so what we are doing below is prepare statement so whenever user input something, it is not directly inputing to database, but we connect the data base to get preperation and then match the input from the user (so there is something like layer) then we can do something about the data that we want to process
    $sql = "SELECT * FROM `login-system-table` WHERE username = ? OR email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=usernameistaken");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);
    $resultData = mysqli_stmt_get_result($stmt);


    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        return false;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $username, $email, $password, $passwordRepeat, $fullname)
{
    $sql = "INSERT INTO `login-system-table` (username, email, password, name) VALUE (?,?,?,?); ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=usernameistaken");
        exit();
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $username, $email, $hashedPassword, $fullname);
    mysqli_stmt_execute($stmt);

    mysqli_stmt_close($stmt);
    header("Location: ../signup.php?error=none");
    exit();
}

// end of sign up validtion

// sign in validation 
function emptyInputSignIn($username, $password)
{
    if (empty($username) || empty($password)) {
        return true;
    } else {
        return false;
    }
}

function signInProcess($conn, $username, $password)
{
    $isExists = userNameExists($conn, $username, $username);
    if ($isExists === false) {
        header("Location : ../signin.php?error=wronglogindata");
        exit();
    }
    $passwordHased = $isExists['password'];
    $checkPassword = password_verify($password, $passwordHased);
    if ($checkPassword === false) {
        header("Location : ../signin.php?error=errorLogin");
        exit();
    } else if ($checkPassword == true) {
        session_start();
        // //isExist dapat data dari database
        $_SESSION['id'] = $isExists['id'];
        $_SESSION['username'] = $isExists['username'];
        // var_dump($_SESSION['id']);
        // var_dump($_SESSION['username']);
        header('Location: ../index.php');
    }
}

// end of sign in validation 