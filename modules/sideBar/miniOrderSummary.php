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
        <button type="button" id="sideCheckout" class="inListButton" onclick="window.location.href = '?Page=Checkout';">To Checkout</button>
    <?php elseif ($_GET['Page'] != 'Checkout'): ?>
        <button type="button" class="inListButton" onclick="window.location.href = '?Page=Cart';">To Cart</button>
    <?php endif?>
</div>
<!-- script resoponsible for calculating total prices -->
<script>
    //this sript will look through the contents of the order summary table and calculate the total amount and price
    var table = document.getElementById("productSummary");
    var rows = table.rows;
    var cell;
    var totalAmount = 0, totalSum = 0;
    for (var i = 1; i < rows.length - 1; i++) {
        cell = rows[i].cells[1];
        totalAmount += parseFloat(cell.textContent);

        cell = rows[i].cells[2];
        totalSum += parseFloat(cell.textContent);
    }

    document.getElementById("totalAmount").innerHTML = totalAmount;
    document.getElementById("totalSum").innerHTML = totalSum;


    //block "to checkout" if cart is empty
    blockToCheckoutButton("sideCheckout");
</script>