<h2>Cập nhật thông tin khách hàng</h2>
<form method="post">

    <input type="hidden" name="id" value="<?php echo $room[0]['room_id']; ?>"/>
    <div class="form-group">
        <label>room name</label>
        <input type="text" name="room_name" value="<?php echo $room[0]['room_name']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>status</label>
        <input type="text" name="status" value="<?php echo $room[0]['status']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>style</label>
        <textarea name="style" class="form-control"><?php echo $room[0]['style']; ?></textarea>
    </div>
    <div class="form-group">
        <label>room rate</label>
        <input type="number" name="room_rates" value="<?php echo $room[0]['room_rates']; ?>" class="form-control"/>
    </div>
    <div class="col-4 form-group">
        <label>img</label>
        <input type="file" name="img">
        <input type="hidden" name="old-img" placeholder="chose img" value="<?php echo $room[0]['img']?>"/>
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>
