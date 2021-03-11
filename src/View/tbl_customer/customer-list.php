<h2>Customers</h2>

<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Address</th>
        <th>Sex</th>
        <th>id card</th>
        <th>Phone</th>
        <th>Nationality</th>
        <th>Img</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($customers as $key => $customer): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $customer['customer_name'] ?></td>
            <td><?php echo $customer['address'] ?></td>
            <td><?php echo $customer['sex'] ?></td>
            <td><?php echo $customer['id_card'] ?></td>
            <td><?php echo $customer['phone'] ?></td>
            <td><?php echo $customer['nationality'] ?></td>
            <td>
                <a href="">
<!--                <a href="index.php?page=room-details&id=--><?php //echo $customer['customers_id_id'] ?><!--">-->
                    <img style="width: 30px" src="img/<?php echo $customer['img'] ?>">
                </a>
            </td>
            <td> <a href="./index.php?page=delete&id=<?php echo $customer['customers_id']; ?>" class="btn btn-warning btn-sm">Delete</a></td>
            <td> <a href="./index.php?page=edit&id=<?php echo $customer['customers_id_id']; ?>" class="btn btn-sm">Update</a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

