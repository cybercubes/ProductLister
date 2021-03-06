<button type="button" class="collapsible">Order Summary</button>
<div class="content">
    <!-- will later take data from the database-->
    <table id="productSummary">
        <th>Name</th>
        <th>Amount</th>
        <th>Price</th>
        <?php foreach($_SESSION['cart'] as $item): ?>
            <tr onclick="window.location.href = '?Page=Product&ProductName=<?php echo $item['name'];?>';">
                <td><?php echo $item['name'];?></td>
                <td><?php echo $item['quantity'];?></td>
                <td><?php echo $item['price'];?></td>
            </tr>
        <?php endforeach;?>
        <tr>
            <td>Total sum</td>
            <td id="totalAmount"></td>
            <td id="totalSum"></td>
        </tr>
    </table>
    <?php if ($_GET['Page'] == 'Cart'): ?>
        <button type="button" class="inListButton checkout" onclick="window.location.href = '?Page=Checkout';">To Checkout</button>
    <?php elseif ($_GET['Page'] != 'Checkout'): ?>
        <button type="button" class="inListButton" onclick="window.location.href = '?Page=Cart';">To Cart</button>
    <?php endif?>
</div>