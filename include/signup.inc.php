<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $passwordRepeat = $_POST['passwordRepeat'];

    include_once "./dbh.inc.php";
    include_once "./function.inc.php";

    //checking if user's input is not having any error

    if (emptyInput($username, $email, $password, $passwordRepeat, $fullname) !== false) {
        header("Location: ../signup.php?error=emptyInput");
        exit();
    }

    if (userNameValidation($username) !== false) {
        header("Location: ../signup.php?error=usernameinvalid");
        exit();
    }

    if (emailValidation($email) !== false) {
        header("Location: ../signup.php?error=emailinvalid");
        exit();
    }

    if (passwordValidation($password) !== false) {
        header("Location: ../signup.php?error=passwordInvalid");
        exit();
    }

    if (passwordMatch($password, $passwordRepeat) !== false) {
        header("Location: ../signup.php?error=passwordDoesntMatch");
        exit();
    }

    if (userNameExists($conn, $username, $email) !== false) {
        header("Location: ../signup.php?error=usernameExist");
        exit();
    }


    createUser($conn, $username, $email, $password, $passwordRepeat, $fullname);
} else {
    header("Location : ../index.php?error=createUserFail");
}
