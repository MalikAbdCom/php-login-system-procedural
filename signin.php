<?php include_once './partial/layout/header.php'; ?>

<h4 class="container center add-margin-y">Sign In</h4>
<div class="container">
    <?php
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 'errorLogin':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>Login Failed, please check your input!</p>";
                break;
            case 'wronglogindata':
                echo "<p style='color:red; text-align:center; font-weight: bold;'>Cannot find your data, You can sign up bro!</p>";
                break;
            default:
                exit();
                break;
        }
    }
    ?>
    <form class="col s4" action="./include/signin.inc.php" method="POST">
        <div class="row center center-this-form">
            <div class="input-field col s8">
                <input name="username" autocomplete="off" placeholder="username/email" type="text">
            </div>
            <div class="input-field col s8">
                <input name="password" autocomplete="off" placeholder="password" id="password" type="password">
            </div>
            <div class="input-field col s8">
                <button name="submit" type="submit" class="waves-effect waves-light btn blue">Sign In</button>
            </div>
            <div class="input-field col s8">
                <a class="btn btn-brand green" href="./index.php">Back to home page</a>
            </div>
        </div>
    </form>
</div>

<?php include_once "./partial/layout/footer.php"; ?>