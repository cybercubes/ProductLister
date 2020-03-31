<?php
    //those values mimic values taken from the database
    $categoryList = ['Hard Candies'];
    $productList = ['JawBuster 9000', 'PepperMint Delux'];
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
        <style>

        </style>
    </head>
    <body>
        <!-- Navigation Bar -->
        <?php include 'modules\\navBar.php'?>
        <!--Sites main Body -->
        <section>
            <div class="secondaryContainer">
                <?php include 'modules\\miniOrderSummary.php'?>
                <?php include 'modules\\hotCategories.php'?>
                <?php include 'modules\\cartProductSummary.php'?>
            </div>
            <div class="mainContainer">
                <?php include 'businessLogic.php'?>
            </div>
        </section>
        <!-- footer for the website -->
        <footer>
            <a href="https://www.facebook.com/">Facebook</a>
            <a href="https://twitter.com/">Twitter</a>
            <a href="https://mail.google.com/">G-mail</a>
            <br>
            <br>
            <p>
                &#169 2020 Weeb Shop. All rights reserved.
            </p>
        </footer>
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