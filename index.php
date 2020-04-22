<?php
    //initialise session
    session_start();
    require_once 'connect_db.php';

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    //handle add to cart request
    if (isset($_POST['addToCart'])) {
        if (!in_array($_POST['addToCart'], $_SESSION['cart'])) {
            array_push($_SESSION['cart'], $_POST['addToCart']);
        }
    }

    //handle remove from cart request
    if (isset($_POST['removeFromCart'])) {
        if (in_array($_POST['removeFromCart'], $_SESSION['cart'])) {
            $index = array_search($_POST['removeFromCart'], $_SESSION['cart']);
            unset($_SESSION['cart'][$index]);
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
        <script>
            //this code will disable the "to checkout" buttons if the cart is empty
            function blockToCheckoutButton(buttId) {
                var cartLength = <?php echo count($_SESSION['cart']); ?>;
                if (cartLength == 0) {
                    document.getElementById(buttId).style.backgroundColor = "#A0A0A0";
                    document.getElementById(buttId).style.color = "#C0C0C0";
                    document.getElementById(buttId).disabled = true;
                }
            }
        </script>
    </head>
    <body>
        <!-- Navigation Bar -->
        <?php include 'modules/navBar.php'; ?>
        <!--Sites main Body -->
        <section>
            <div class="secondaryContainer">
                <?php include 'modules/sideBar/miniOrderSummary.php'; ?>
            </div>
            <div class="mainContainer">
                <?php include 'businessLogic.php'; ?>
            </div>
        </section>
        <!-- footer for the website -->
        <?php include 'modules/footer.php' ?>
        <!-- Script that is responsible for the collapsible element on the side bar -->
        <script>
            var coll = document.getElementsByClassName("collapsible");
            var i;
            for (i = 0; i < coll.length; i++) {
                coll[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var content = this.nextElementSibling;
                    if (content.style.display === "block") {
                        content.style.display = "none";
                    } else {
                        content.style.display = "block";
                    }
                });
            }
        </script>
    </body>
</html>