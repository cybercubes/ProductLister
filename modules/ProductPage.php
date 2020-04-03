<?php
    if (isset($_GET['ProductName'])) {
        $currentProduct = $_GET['ProductName'];
    }
    //$backLink = '?Page=Browse&Category=' . $_GET['Category'];

    //check if the current product is in the cart
    $inCart = false;
    if (in_array($currentProduct, $_SESSION['cart'])) {
        $inCart = true;
    }
?>

<div class="productDescription">
    <img src="./img/default_product.png" alt="Mint Chocolate">
    <h2><?php echo $currentProduct;?></h2>
    <p class="price"><input type="number" min="1" max="5" value="1"> $19.99 </p>
    <form method="POST" action="">
        <?php if ($inCart): ?>
            <button type="submit" name="removeFromCart" value="<?php echo $currentProduct; ?>">Remove from cart</button>
        <?php else: ?>
            <button type="submit" name="addToCart" value="<?php echo $currentProduct; ?>">Add to cart</button>
        <?php endif;?>
    </form>
    <br> <br>
</div>