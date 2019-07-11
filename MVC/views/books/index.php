<?php
require_once 'views/layouts/header.php';
?>
    <button onclick="add()" type="button" class="ADD btn btn-primary">+ADD NEW BOOK</button>
    <table cellpadding="5" cellspacing="0" border="1px" style="text-align: center">
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>Create At</th>
            <th>Action</th>
        </tr>
        <?php if (empty($books)): ?>
            <tr>
                <td colspan="6">Khong co ban ghi nao</td>
            </tr>
        <?php else: ?>
            <?php foreach ($books as $book):?>
                <tr>
                    <?php
                        $urlDetail = "index.php?controller=book&action=deital&id={$book['id']}";
                        $urlUpdate = "index.php?controller=book&action=update&id={$book['id']}";
                        $urlDelete = "index.php?controller=book&action=delete&id={$book['id']}";
                    ?>
                    <td><?php echo $book['id'];?></td>
                    <td><?php echo $book['name'];?></td>
                    <td><?php echo $book['created_at'];?></td>
                    <td><a href="<?php echo $urlDetail; ?>" id="read"><i class="far fa-eye"></i></a> <a id="update" href="<?php echo $urlUpdate; ?>"><i class="fas fa-pen"></i></a> <a onclick="return confirm('Ban co muon xoa')" id="delete" href="<?php echo $urlDelete; ?>"><i class="fas fa-trash-alt"></i></a> </td>

                </tr>
            <?php endforeach;?>
        <?php endif;?>

    </table>
<?php
require_once 'views/layouts/footer.php';
?>