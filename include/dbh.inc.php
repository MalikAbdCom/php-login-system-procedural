<?php

$dbusername = "root";
$dbpassword = "";
$dbname = "learn-login-system";
$dbserver = "localhost";


$conn = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("error bang : " . mysqli_connect_error());
} /* else {
    echo "bisa";
}
 */