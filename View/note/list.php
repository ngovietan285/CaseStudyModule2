<a href="?page=add"><input type="button" value="add"></a>
<table border="1px">
    <tr>
        <th>STT</th>
        <th>Title</th>
        <th>Note_Type</th>
    </tr>

    <form class="form-inline my-2 my-lg-0" method="GET"
          action="?&keyword=<?php echo $_GET['keyword'] ?>">
        <input class=" form-control mr-sm-2" type="search" placeholder="Title" aria-label="Search" name="keyword">
        <input class="btn btn-outline-success my-sm-0" type="submit" value="Search">
    </form>

    <?php foreach ($noteDB as $key => $note) : ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td>
                <a href="index.php?page=detail&id=<?php echo $note->getId(); ?>"><?php echo $note->getTitle(); ?></a>
            </td>
            <td><?php echo $note->getTypeId(); ?></td>
            <td>
                <a href="index.php?page=edit&id=<?php echo $note->getId(); ?>" class="btn btn-success"
                   onclick="return confirm('bạn có chắn chắn sửa thông tin của ghi chú này ?')">Edit</a>
                <a href="index.php?page=delete&id=<?php echo $note->getId(); ?>" class="btn btn-danger"
                   onclick="return confirm('bạn có chắc chắn muốn xóa ghi chú này ?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>