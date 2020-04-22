<div class="flex-container">
    <?php
        $listResult = mysqli_query($link, "SELECT * FROM products");
        while ($row = mysqli_fetch_assoc($listResult)):
            //check if the product is in the car

            $inCart = false;
            foreach( $_SESSION['cart'] as $item) {
                if ($item['name'] == $row['name']) {
                    $inCart = true;
                    break;
                }
            }

    ?>
        <div class="card">
            <div onclick="window.location.href = '?Page=Product&ProductName=<?php echo $row['name']; ?>';">
                <img src="./img/default_product.png" alt="">
                <h1><?php echo $row['name']; ?></h1>
                <p class="price">$<?php echo $row['price'];?></p>
                <p><?php echo $row['description'];?></p>
            </div>
            <form method="POST" action="">
                <input type="hidden" name="price" value="<?php echo $row['price'];?>" />
                <input type="hidden" name="description" value="<?php echo $row['description']?>" />
                <input type="hidden" name="quantity" value="1" />
                <?php if ($inCart): ?>
                    <p><button type="submit" name="removeFromCart" value="<?php echo $row['name']; ?>">Remove from cart</button></p>
                <?php elseif($row['quantity'] == 0) : ?>
                    <p><button disabled type="submit" value="<?php echo $row['name']; ?>">OUT OF STOCK</button></p>
                <?php else: ?>
                    <p><button type="submit" name="addToCart" value="<?php echo $row['name']; ?>">Add to cart</button></p>
                <?php endif;?>
            </form>
        </div>
    <?php endwhile; ?>
</div>