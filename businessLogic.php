<?php

if (isset($_GET['Page'])) {
    $currPage = $_GET['Page'];
    switch ($currPage) {
        case "Home":
            include 'modules\\mainDisplay.php';
            break;
        case "Browse":
            include 'modules\\browse.php';
            break;
        case "About":
            include 'modules\\about.php';
            break;
        case "Cart":
            include 'modules\\cart.php';
            break;
        case "Product":
            include 'modules\\productPage.php';
            break;
        case "Search":
            include 'modules\\search.php';
            break;
        case "Checkout":
            include 'modules\\checkoutForm.php';
            break;
        default:
            include 'modules\\mainDisplay.php';
            break;
    }
} else {
    include 'modules\\mainDisplay.php';
}
