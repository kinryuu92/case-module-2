<?php


namespace App\View;

if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<?php
foreach ($result as $key => $supplier) : ?>
    <option value="$supplier['id']"><?php echo $supplier['room_name'] ?></option>
<?php endforeach; ?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new room</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>room name</label>
                    <input type="text" class="form-control" name="room" value="" placeholder="input room" required>
                </div>
                <div class="form-group">
                    <label>status</label>
                    <input type="text" class="form-control" name="status" value="" placeholder="input status" required>
                </div>
                <div class="form-group">
                    <label>style</label>
                    <input type="text" class="form-control" name="style" value="" placeholder="input style" required>
                </div>
                <div class="form-group">
                    <label>room rate</label>
                    <input type="number" class="form-control" name="rate" value="" placeholder="input rate" required>
                </div>
                <div class="col-4 form-group">
                    <label>img</label>
                    <input type="file" name="img" placeholder="chose img" required>
                </div>
                <button type="submit" class="btn btn-primary">Add new</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
