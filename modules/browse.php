<div class="listHeading">
    <?php echo "<p><h2>" . $headingMessage . "</h2></p>"; ?>
</div>
<div class="itemList">
    <table>
        <?php
        while ($row = mysqli_fetch_assoc($listQuery)): ?>
            <tr onclick="window.location.href = '<?php echo $hLink . $row["name"]; ?>';">
                <td><?php echo $row["name"]; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>