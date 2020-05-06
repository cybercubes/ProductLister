<?php
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
//handle search request
if (isset($_GET['search'])) {
    $productName = mysqli_real_escape_string($link, $_GET['search']);
    $SearchQuery = "SELECT * FROM products WHERE name LIKE '%$productName%';";
    $listQuery = mysqli_query($link, $SearchQuery);
}

//Handle Product page information
if (isset($_GET['ProductName'])) {
    $currentProduct = mysqli_real_escape_string($link, $_GET['ProductName']);

    //check if the current product is in the cart
    $inCart = false;
    foreach( $_SESSION['cart'] as $item) {
        if ($item['name'] == $currentProduct) {
            $inCart = true;
            break;
        }
    }

    $productResult = mysqli_query($link, "SELECT * FROM products WHERE products.name = '$currentProduct';");
    $result = mysqli_fetch_assoc($productResult);
}

//Handles browse menu information
if (isset($_GET['Category'])) {
    //prepare a safe string for the sql request
    $categ = mysqli_real_escape_string($link, $_GET['Category']);
    $headingMessage = "Select the product";
    $MyQuery = "SELECT p.name FROM products p, categories c WHERE c.name = '$categ' AND p.category_ID = c.ID;";
    $hLink = '?Page=Product&ProductName=';
    $listQuery = mysqli_query($link, $MyQuery);
} else {
    $headingMessage = "Select the category";
    $MyQuery = "SELECT name FROM categories;";
    $hLink = '?Page=Browse&Category=';
    $listQuery = mysqli_query($link, $MyQuery);
}