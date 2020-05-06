<div class="listHeading">
    <p><h2>Search results for: "<?php echo $productName;?>"</h2></p>
    <form action="?Page=Search" method="GET" class="search-container">
        <input type="text" placeholder="Search.." name="search">
        <input type="hidden" name="Page" value="Search">
        <button type="submit">Search</button>
    </form>
</div>
<div class="itemList">
    <table>
        <?php
        while ($row = mysqli_fetch_assoc($listQuery)): ?>
            <tr onclick="window.location.href = '?Page=Product&ProductName=<?php echo $row['name']; ?>';">
                <td><?php echo $row['name']; ?></td>
                <td>$<?php echo $row['price']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>