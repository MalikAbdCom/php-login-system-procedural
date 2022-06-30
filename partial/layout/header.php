<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style/materialize/materialize.min.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <!-- navigation -->
    <nav class="purple">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">Change This</a></li>
                    <?php
                    if (isset($_SESSION['username'])) {
                        echo  "<li><a class='btn btn-brand green' href='profile.php'>Profile page</a></li>";
                        echo "<li><a class='btn btn-brand blue ' href='include/signout.inc.php'>Sign out</a></li>";
                    } else {
                        echo  "<li><a style='font-weight: bold;' href='signin.php'>Sign In</a></li>";
                        echo "<li><a style='font-weight: bold;' class='btn btn-brand blue ' href='signup.php'>Sign Up</a></li>";
                    }
                    ?>

                </ul>
            </div>
        </div>
    </nav>
    <!-- end of navigation -->