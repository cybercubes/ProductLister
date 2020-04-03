<?php
    //those values mimic values taken from the database
    session_start();
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }
    $categoryList = ['Hard Candies'];
    $productList = ['JawBuster 9000', 'PepperMint Delux', 'ASDAS', 'EARFAS', 'eeeeeeee', 'aaaaAAAAAa', 'ASDASDAS'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Weebshop product Lister</title>
        <link rel="stylesheet" type="text/css" href="css/navbar.css">
        <link rel="stylesheet" type="text/css" href="css/footer.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="css/orderSummary.css">
        <link rel="stylesheet" type="text/css" href="css/browseList.css">
        <link rel="stylesheet" type="text/css" href="css/cards.css">
        <link rel="stylesheet" type="text/css" href="css/fancyList.css">
        <link rel="stylesheet" type="text/css" href="css/productDisplay.css">
        <link rel="stylesheet" type="text/css" href="css/checkoutForm.css">
    </head>
    <body>
        <!-- Navigation Bar -->
        <?php include 'modules\\navBar.php' ?>
        <!--Sites main Body -->
        <section>
            <div class="secondaryContainer">
                <?php include 'modules\\sideBar\\miniOrderSummary.php' ?>
                <?php //include 'modules\\sideBar\\hotCategories.php' ?>
                <?php //include 'modules\\sideBar\\cartProductSummary.php' ?>
                <?php //include 'modules\\sideBar\\checkoutSummary.php' ?>
            </div>
            <div class="mainContainer">
                <?php include 'businessLogic.php' ?>
            </div>
        </section>
        <!-- footer for the website -->
        <?php include 'modules\\footer.php' ?>
        <!-- technically we are not suppose to know how to do this part -->
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