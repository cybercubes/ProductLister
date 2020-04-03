<div class="flex-container">
    <?php foreach ($productList as $item):
        //check if the product is in the car
        $inCart = false;
        if (in_array($item, $_SESSION['cart'])) {
            $inCart = true;
        }
    ?>
        <div class="card">
            <div onclick="window.location.href = '?Page=Product&ProductName=<?php echo $item; ?>';">
                <img src="./img/default_product.png" alt="Coffee">
                <h1><?php echo $item; ?></h1>
                <p class="price">$19.99</p>
                <p>
                    Black and bitter, like the deep depths of hell. bitter, like the
                    deep depths of hell. bitter, like the deep depths of hell. bitter,
                    like the deep depths of hell.
                </p>
            </div>
            <form method="POST" action="">
                <?php if ($inCart): ?>
                    <p><button type="submit" name="removeFromCart" value="<?php echo $item; ?>">Remove from cart</button></p>
                <?php else: ?>
                    <p><button type="submit" name="addToCart" value="<?php echo $item; ?>">Add to cart</button></p>
                <?php endif;?>
            </form>
        </div>
    <?php endforeach; ?>
</div>