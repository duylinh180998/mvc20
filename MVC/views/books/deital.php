<?php
require_once 'views/layouts/header.php';
?>
<table cellpadding="5" cellspacing="0" border="1px" style="text-align: center">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>Create At</th>
    </tr>
    <?php if (empty($books)): ?>
        <tr>
            <td colspan="6">Khong co ban ghi nao</td>
        </tr>
    <?php else: ?>
            <tr>
                <td><?php echo $book['id'];?></td>
                <td><?php echo $book['name'];?></td>
                <td><?php echo $book['created_at'];?></td>

            </tr>
    <?php endif;?>
</table>
<?php
require_once 'views/layouts/footer.php';
?>