<h2>Cập nhật thông tin service</h2>
<form method="post" enctype="multipart/form-data">

    <input type="hidden" name="id" value="<?php echo $service[0]['service_id']; ?>"/>
    <div class="form-group">
        <label>service name</label>
        <input type="text" name="service_name" value="<?php echo $service[0]['service_name']; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>service price</label>
        <input type="number" name="service_prices" value="<?php echo $service[0]['service_prices']; ?>" class="form-control"/>
    </div>
    <div class="col-4 form-group">
        <label>img</label>
        <input type="file" name="img">
        <input type="hidden" name="old-img" placeholder="chose img" value="<?php echo $service[0]['img']?>"/>
    </div>
    <div class="form-group">
        <input  type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>

