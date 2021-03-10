
<h2>Our Rooms</h2>
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
          <td><?php echo $room['room_name'] ?></td>
          <td><?php echo $room['status'] ?></td>
          <td><?php echo $room['style'] ?></td>
          <td><?php echo $room['room_rates'] ?></td>
          <td>
              <a href="index.php?page=room-details&id=<?php echo $room['room_id'] ?>">
                  <img style="width: 100px" src="img/<?php echo $room['img'] ?>">
              </a>
          </td>
          <td> <a href="./index.php?page=delete&id=<?php echo $room['room_id']; ?>" class="btn btn-warning btn-sm">Delete</a></td>
          <td> <a href="./index.php?page=edit&id=<?php echo $room['room_id']; ?>" class="btn btn-sm">Update</a></td>
      </tr>
  <?php endforeach; ?>
  </tbody>
</table>





