<div class="flex-container">
    <?php if (count($_SESSION['cart']) == 0): ?>
        <p>Nothing here Chief</p>
    <?php endif; ?>
    <?php foreach ($_SESSION['cart'] as $item): ?>
        <div class="fancyCard">
            <img src="./img/default_product.png" alt="Mint Chocolate">
            <h1 onclick="window.location.href = '?Page=Product&ProductName=<?php echo $item; ?>';"><?php echo $item; ?></h1>
            <p class="price"><input type="number" min="1" max="5" value="1"> $19.99 </p>
            <p>Oof! Ouch! Ow!</p>
            <form method="POST" action="">
                <button type="submit" name="removeFromCart" value="<?php echo $item; ?>">Remove from cart</button>
            </form>
        </div>
    <?php endforeach; ?>
    <button class="submitButton" onclick="window.location.href = '?Page=Checkout';" id="checkout"> Checkout</button>

    <script>
        //this code will disable the "to checkout" button if the cart is empty
        var cartLength = <?php echo count($_SESSION['cart']); ?>;
        if (cartLength == 0) {
            document.getElementById("checkout").style.backgroundColor = "#A0A0A0";
            document.getElementById("checkout").style.color = "#404040";
            document.getElementById("checkout").disabled = true;
        }
    </script>
</div>