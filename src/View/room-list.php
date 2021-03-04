
<!--<h2>Room lists</h2>-->

<table class="table">
  <thead>
  <tr>
      <th>STT</th>
      <th>Room name</th>
      <th>Status</th>
      <th>Style</th>
      <th>Room rate</th>
      <th>Img</th>
  </tr>
  </thead>
  <tbody>
  <?php foreach ($rooms as $key => $room): ?>
      <tr>
          <td><?php echo ++$key ?></td>
          <td>
              <a href="index.php?page=room-list&id=<?php echo $room['room_id'] ?>">
                  <?php echo $room['room_name'] ?>
              </a>
          </td>
          <td><?php echo $room['status'] ?></td>
          <td><?php echo $room['style'] ?></td>
          <td><?php echo $room['room_rates'] ?></td>
          <td><?php echo $room['img'] ?></td>
          <td> <a href="./index.php?page=delete&id=<?php echo $room['room_id']; ?>" class="btn btn-warning btn-sm">Delete</a></td>
          <td> <a href="./index.php?page=edit&id=<?php echo $room['room_id']; ?>" class="btn btn-sm">Update</a></td>
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>





