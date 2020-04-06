<?php
    if (isset($_GET['search'])) {
        $searchQuerry = $_GET['search'];
    }
?>

<div class="listHeading">
    <p><h2>Search results for: "<?php echo $searchQuerry;?>"</h2></p>
    <form action="?Page=Search" method="GET" class="search-container">
        <input type="text" placeholder="Search.." name="search">
        <input type="hidden" name="Page" value="Search">
        <button type="submit">Search</button>
    </form>
</div>
<div class="itemList">
    <table>
        <tr onclick="window.location.href = 'product.html';">
            <td>Jaw breaker</td>
            <td>$24 per lb.</td>
        </tr>
    </table>
</div>