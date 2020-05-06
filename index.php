<?php
    //initialise session
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    //establish connection to the database
    require_once 'connect_db.php';

    require_once 'handlers.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Weebshop product Lister</title>
        <!-- here we link all of our css-->
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/orderSummary.css">
        <link rel="stylesheet" type="text/css" href="css/browseList.css">
        <link rel="stylesheet" type="text/css" href="css/cards.css">
        <link rel="stylesheet" type="text/css" href="css/fancyList.css">
        <link rel="stylesheet" type="text/css" href="css/productDisplay.css">
        <link rel="stylesheet" type="text/css" href="css/checkoutForm.css">
        <link rel="stylesheet" type="text/css" href="css/mainSearchBar.css">
    </head>
    <body>
        <!-- Navigation Bar -->
        <?php include 'modules/navBar.php'; ?>
        <!--Sites main Body -->
        <section>
            <!--side container -->
            <div class="secondaryContainer">
                <?php include 'modules/sideBar/miniOrderSummary.php'; ?>
            </div>
            <!--main content container -->
            <div class="mainContainer">
                <?php include 'businessLogic.php'; ?>
            </div>
        </section>
        <!-- footer for the website -->
        <?php include 'modules/footer.php' ?>
        <!-- here we link javascript to our website -->
        <script src="js/main.js">
        </script>
    </body>
</html>