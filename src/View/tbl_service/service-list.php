<table class="table">
  <thead>
  <tr>
      <th>STT</th>
      <th>Service name</th>
      <th>prices</th>
      <th>Date use</th>
      <th>Img</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($services as $key => $service): ?>
      <tr>
          <td><?php echo ++$key ?></td>
          <td>
              <a href="index.php?page=service-list&id=<?php echo $service['service_id'] ?>">
                  <?php echo $service['service_name'] ?>
              </a>
          </td>
          <td><?php echo $service['service_prices'] ?></td>
          <td><?php echo $service['style'] ?></td>
          <td><?php echo $service['date_use'] ?></td>
          <td><?php echo $service['img'] ?></td>
<!--          <td> <a href="./index.php?page=delete&id=--><?php //echo $service['room_id']; ?><!--" class="btn btn-warning btn-sm">Delete</a></td>-->
<!--          <td> <a href="./index.php?page=edit&id=--><?php //echo $service['room_id']; ?><!--" class="btn btn-sm">Update</a></td>-->
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>
