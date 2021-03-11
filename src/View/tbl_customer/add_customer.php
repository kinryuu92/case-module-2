<?php


namespace App\View;

if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<?php
foreach ($result as $key => $supplier) : ?>
    <option value="$supplier['id']"><?php echo $supplier['customer_name'] ?></option>
<?php endforeach; ?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Add new customer</h1>
        </div>
        <div class="col-12">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="" placeholder="input name" required>
                </div>
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" class="form-control" name="address" value="" placeholder="input address" required>
                </div>
                <div class="form-group">
                    <label>Sex</label>
<!--                    <div class="form-check">-->
<!--                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">-->
<!--                        <label class="form-check-label" for="flexRadioDefault1">-->
<!--                            Male-->
<!--                        </label>-->
<!--                    </div>-->
<!--                    <div class="form-check">-->
<!--                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>-->
<!--                        <label class="form-check-label" for="flexRadioDefault2">-->
<!--                            Female-->
<!--                        </label>-->
<!--                    </div>-->
                    <input type="text" class="form-control" name="sex" value="" placeholder="input sex" required>
                </div>
                <div class="form-group">
                    <label>Card id</label>
                    <input type="number" class="form-control" name="id_card" value="" placeholder="input id" required>
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="number" class="form-control" name="phone" value="" placeholder="input phone" required>
                </div>
                <div class="form-group">
                    <label>Nationality</label>
                    <input type="text" class="form-control" name="nationality" value="" placeholder="input nation" required>
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
