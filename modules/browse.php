<?php
    if (isset($_GET['Category'])) {
        $headingMessage = "Select the product";
        $list = $productList;
        $link = "?Page=Product&Category=HardCandy&ProductName=";
    } else {
        $headingMessage = "Select the category";
        $list = $categoryList;
        $link = "?Page=Browse&Category=HardCandy";
    }
?>

<div class="listHeading">
    <?php echo "<p><h2>" . $headingMessage . "</h2></p>"; ?>
</div>
<div class="itemList">
    <table>
        <?php foreach ($list as $item): ?>
            <tr onclick="window.location.href = '<?php echo $link . $item; ?>';">
                <td><?php echo $item; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>