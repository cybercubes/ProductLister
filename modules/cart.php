<div class="flex-container">
    <?php if (count($_SESSION['cart']) == 0): ?>
        <p>Nothing here Chief</p>
    <?php endif; ?>
    <?php foreach ($_SESSION['cart'] as $item): ?>
        <div class="fancyCard">
            <img src="./img/default_product.png" alt="Mint Chocolate">
            <h1 onclick="window.location.href = '?Page=Product&ProductName=<?php echo $item['name']; ?>';"><?php echo $item['name']; ?></h1>
            <p class="price"><input type="number" min="1" max="5" value="1"> $19.99 </p>
            <p>Oof! Ouch! Ow!</p>
            <form method="POST" action="">
                <button type="submit" name="removeFromCart" value="<?php echo $item; ?>">Remove from cart</button>
            </form>
        </div>
    <?php endforeach; ?>
    <button class="submitButton" onclick="window.location.href = '?Page=Checkout';" id="checkout"> Checkout</button>
    <script>
        //block "to checkout" if cart is empty
        blockToCheckoutButton("checkout");
    </script>
</div>