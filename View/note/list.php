<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand">INotes</a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </nav>
</div>
<div class="container">
    <a href="?page=add" class="col-12 col-md-6">
        <button type="button" class="btn btn-outline-success mt-2">Create</button>
    </a>
</div>
<div class="container">
    <table class="table mt-2">
        <thead class="thead-light">
        <tr>
            <th>STT</th>
            <th>Title</th>
            <th>Note Type</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
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
                </td
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>