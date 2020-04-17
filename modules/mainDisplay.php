<div class="flex-container">
    <?php
    $listResult = mysqli_query($link, "SELECT * FROM products");
    while ($row = mysqli_fetch_assoc($listResult)):
        //check if the product is in the car
        $inCart = false;
        if (in_array($row['name'], $_SESSION['cart'])) {
            $inCart = true;
        }
    ?>
        <div class="card">
            <div onclick="window.location.href = '?Page=Product&ProductName=<?php echo $row['name']; ?>';">
                <img src="./img/default_product.png" alt="Coffee">
                <h1><?php echo $row['name']; ?></h1>
                <p class="price">$<?php echo $row['price'];?></p>
                <p><?php echo $row['description'];?></p>
            </div>
            <form method="POST" action="">
                <?php if ($inCart): ?>
                    <p><button type="submit" name="removeFromCart" value="<?php echo $row['name']; ?>">Remove from cart</button></p>
                <?php else: ?>
                    <p><button type="submit" name="addToCart" value="<?php echo $row['name']; ?>">Add to cart</button></p>
                <?php endif;?>
            </form>
        </div>
    <?php endwhile; ?>
</div>