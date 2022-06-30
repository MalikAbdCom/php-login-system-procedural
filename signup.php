<?php include_once './partial/layout/header.php'; ?>

<h4 class="container center add-margin-y">Sign up</h4>

<div class="container">
    <?php
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 'emptyInput':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>Please fill the empty input!</p>";
                break;
            case 'usernameinvalid':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>User Name is invalid!</p>";
                break;
            case 'emailinvalid':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>E-mail is invalid!</p>";
                break;
            case 'passwordInvalid':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>Use more strong password!</p>";
                break;
            case 'passwordDoesntMatch':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>Password doesn't match</p>";
                break;
            case 'usernameExist':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>User Name / E-mail is already taken!</p>";
                break;
            default:
                echo "<p style='color:green; text-align:center; font-weight: bold;'>Congratulations, you have Signed Up!!</p>";
                break;
        }
    }
    ?>
    <form class="col s4" action="./include/signup.inc.php" method="POST">
        <div class="row center center-this-form">
            <div class="input-field col s8">
                <input name="fullname" autocomplete="off" placeholder="fullname" id="fullname" type="text">
            </div>
            <div class="input-field col s8">
                <input name="username" autocomplete="off" placeholder="username" id="username" type="text">
            </div>
            <div class="input-field col s8">
                <input name="email" autocomplete="off" placeholder="email" id="Email" type="email">
            </div>
            <div class="input-field col s8">
                <input name="password" autocomplete="off" placeholder="password" id="password" type="password">
            </div>
            <div class="input-field col s8">
                <input name="passwordRepeat" autocomplete="off" placeholder="password repeat" id="passwordRepeat" type="password">
            </div>
            <div class="input-field col s8">
                <button name="submit" type="submit" class="waves-effect waves-light btn blue">Sign Up</button>
            </div>
            <div class="input-field col s8">
                <a class="btn btn-brand green" href="./index.php">Back to home page</a>
            </div>
        </div>
    </form>


</div>

<?php include_once "./partial/layout/footer.php"; ?>