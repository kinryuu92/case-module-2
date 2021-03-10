<?php

namespace App\View;
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}

?>
<?php
foreach ($result as $key => $supplier) : ?>
    <option value="$supplier['id']"><?php echo $supplier['service_name'] ?></option>
<?php endforeach; ?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new service</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>services name</label>
                    <input type="text" class="form-control" name="service_name" value="" placeholder="input services" required>
                </div>
                <div class="form-group">
                    <label>services prices</label>
                    <input type="text" class="form-control" name="service_price" value="" placeholder="input status" required>
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

