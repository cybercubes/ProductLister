<div class="flex-container">
    <?php foreach ($productList as $item): ?>
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
            <p><button >Add to Cart</button></p>
        </div>
    <?php endforeach; ?>
</div>