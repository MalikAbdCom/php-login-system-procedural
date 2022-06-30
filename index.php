<?php include_once './partial/layout/header.php'; ?>

<?php
if (isset($_SESSION['username'])) {
    echo "<h1 style='color:red; text-align:center; font-weight: bold;'>" . "Welcome " . $_SESSION['username'] . "</h1>";
}
?>
<?php include_once "./partial/layout/body.php"; ?>
<?php include_once "./partial/layout/footer.php"; ?>