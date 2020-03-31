<?php
    if (isset($_GET['ProductName'])) {
        $title = $_GET['ProductName'];
    }

    //$backLink = '?Page=Browse&Category=' . $_GET['Category'];
?>

<div class="productDescription">
    <img src="./img/default_product.png" alt="Mint Chocolate">
    <h2><?php echo $title;?></h2>
    <p class="price"><input type="number" min="1" max="5" value="1"> $19.99 </p>
    <p>Oof! Ouch! Ow!</p>
    <button type="button">Add to cart</button>
    <br> <br>
    <!-- <button type="button" onclick="window.location.href = '<?php //echo $backLink; ?>';">Back</button> -->
</div>