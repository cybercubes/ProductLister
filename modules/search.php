<?php
    if (isset($_GET['search'])) {
        $search = $_GET['search'];
    }
?>

<div class="listHeading">
    <p><h2>Search results for: "<?php echo $search;?>"</h2></p>
    <form action="#" class="search-container">
        <input type="text" placeholder="Search.." name="search">
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