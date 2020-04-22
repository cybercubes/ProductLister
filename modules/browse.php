<?php
    if (isset($_GET['Category'])) {
        $headingMessage = "Select the product";
        $list = 'products';
        $hLink = '?Page=Product&ProductName=';
    } else {
        $headingMessage = "Select the category";
        $list = 'categories';
        $hLink = '?Page=Browse&Category=';
    }
?>

<div class="listHeading">
    <?php echo "<p><h2>" . $headingMessage . "</h2></p>"; ?>
</div>
<div class="itemList">
    <table>
        <?php
        $listQuery = mysqli_query($link, "SELECT name FROM " . $list);
        while ($row = mysqli_fetch_assoc($listQuery)): ?>
            <tr onclick="window.location.href = '<?php echo $hLink . $row["name"]; ?>';">
                <td><?php echo $row["name"]; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>