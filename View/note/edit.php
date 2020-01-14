<div class="col-12 col-md-12">
    <div class="row">
        <form method="post">
            <div class="form-group">
                <label>Tiêu Đề</label>
                <input type="text" name="title" class="form-control" value="<?php echo $note->getTitle(); ?>">
            </div>
            <div class="form-group">
                <label>Nội Dung</label>
                <input type="text" name="content" class="form-control" value="<?php echo $note->getContent(); ?>">
            </div>
            <div>
                <label>Phân Loại</label>
                <select name="type_id" class="form-control">
                    <?php foreach ($types as $type) : ?>
                        <option value="<?php echo $type->getId(); ?>"><?php echo $type->getName() ?></option>
                    <?php endforeach; ?>
                </select>
                <button class="btn btn-primary mt-3" type="submit" value="Edit">Edit</button>
            </div>
        </form>
    </div>
</div>
