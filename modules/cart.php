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
            <button type="button"">remove</button>
        </div>
        <button class="submitButton" onclick="window.location.href = '?Page=Checkout';"> Checkout</button>
    <?php endforeach; ?>
</div>