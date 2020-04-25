<?php
    //initialise session
    session_start();
    require_once 'connect_db.php';

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    //handle add to cart request
    if (isset($_POST['addToCart'])) {
        $cartItem = ["name" => $_POST['addToCart'], "price" => $_POST['price'], "quantity" => $_POST['quantity'], "description" => $_POST['description']];
        $alreadyInCart = false;
        foreach($_SESSION['cart'] as $item) {
            if ($item['name'] == $_POST['addToCart']) {
                $alreadyInCart = true;
                break;
            }
        }

        if (!$alreadyInCart) {
            array_push($_SESSION['cart'], $cartItem);
        }
    }

    //handle remove from cart request
    if (isset($_POST['removeFromCart'])) {
        for($i = 0; $i < sizeof($_SESSION['cart']) + 1; $i++){
            if ($_SESSION['cart'][$i]['name'] == $_POST['removeFromCart']) {
                unset($_SESSION['cart'][$i]);
                break;
            }
        }
    }
    //handle edit quantity request in cart
    if (isset($_POST['editQuantity'])) {
        for($i = 0; $i < sizeof($_SESSION['cart']) + 1; $i++){
            if ($_SESSION['cart'][$i]['name'] == $_POST['editQuantity']) {
                $_SESSION['cart'][$i]['quantity'] = $_POST['quantity'];
                break;
            }
        }
    }
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