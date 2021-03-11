
<div class="card mb-3">
    <?php foreach ($rooms as $key => $room): ?>
    <img src="/img" <?php echo $room['image'] ?> class="card-img-top " style="width: 100px">
    <table class="table">
        <thead>
        <tr>
            <th colspan="2" scope="col" ><?php echo $room['room_name'] ?></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">size</th>
            <td><?php echo $room['size'] ?></td>
        </tr>
        <tr>
            <th scope="row">Bed</th>
            <td><?php echo $room['bed'] ?>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        1.6m Queen size bed
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        1.6m Queen size bed/ Twin beds
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">installation</th>
            <td colspan="2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Window: no view
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Bathtub
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        LCD TV 32 inches
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                    <label class="form-check-label" for="flexCheckChecked">
                        Outside windows
                    </label>
                </div>
            </td>
        </tr>
        <tr>
            <th scope="row">price</th>
            <td><?php echo $room['room_rates'] ?></td>
        </tr>
        </tbody>
    </table>
    <?php endforeach; ?>

</div>

