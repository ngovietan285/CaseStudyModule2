<div class="row">
    <form method="post">
        <div class="form-control">
            <label>Tieu De</label>
            <input type="text" name="title" value="<?php echo $note->getTitle() ?>">
        </div>
        <div class="form-control">
            <label>Noi Dung</label>
            <input type="text" name="content" value="<?php echo $note->getContent()?>">
        </div>
        <div class="form-control">
            <label>Phan Loai</label>
            <select name="type_id" class="form-control">
                <?php foreach ($types as $type) : ?>
                    <option value="<?php echo $type->getId(); ?>"><?php echo $type->getName() ?></option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="edit">
        </div>
    </form>
</div>