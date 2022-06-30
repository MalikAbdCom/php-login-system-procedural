<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    include_once 'dbh.inc.php';
    include_once 'function.inc.php';

    if (emptyInputSignIn($username, $password)) {
        header("Location: ../signin.php?error=emptyInput");
        exit();
    }

    // kalau berhasil 
    signInProcess($conn, $username, $password);
} else {
    header('Location: ../signin.php');
    exit();
}
