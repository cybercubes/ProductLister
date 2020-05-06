<div class="productDescription">
    <img src="./img/default_product.png" alt="">
    <h2><?php echo $currentProduct; ?></h2>
    <p><?php echo $result['description']; ?></p>
    <form method="POST" action="">
        <?php if ($inCart): ?>
            <button type="submit" name="removeFromCart" value="<?php echo $currentProduct; ?>">Remove from cart</button>
        <?php elseif($result['quantity'] == 0) : ?>
            <p>OUT OF STOCK</p>
        <?php else: ?>
            <input type="hidden" value="<?php echo $result['price']; ?>" name="price" />
            <input type="hidden" value="<?php echo $result['description']; ?>" name="description" />
            <p class="price"><input type="number" min="1" max="99" value="1" name="quantity" /> price: $<?php echo $result['price']; ?> </p>
            <button type="submit" name="addToCart" value="<?php echo $currentProduct; ?>">Add to cart</button>
        <?php endif; ?>
    </form>
    <br> <br>
</div>