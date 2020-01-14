<div class="col-12 mt-4">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title text-center">Ghi chú</h5>
            <h6 class="card-subtitle mb-2 mt-2 text-muted"><?php echo $note->getTitle(); ?></h6>
            <p class="card-text"><?php echo $note->getContent() ?> </p>
            <a href="index.php?page=edit&id=<?php echo $note->getId(); ?>" class="btn btn-success">Edit</a>
            <a href="index.php?page=delete&id=<?php echo $note->getId(); ?>" class="btn btn-danger"
               onclick="return confirm('bạn có chắc chắn muốn xóa ghi chú này ?')">Delete</a>
        </div>
    </div>
</div>