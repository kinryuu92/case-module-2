


<?php foreach ($services as $key => $service): ?>
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
            <a href="index.php?page=service-list&id=<?php echo $service['service_id'] ?>">
                <img class="card-img-top img-fluid" src="images/<?php echo $service['image'] ?>" alt=""></a>

            <div class="card-body">
                <h5 class="card-title card-book"><?php echo $service['service_name_name'] ?></h5>
                <h6 class="card-title card-book card-book-price"><?php echo $service['service_prices'].' VND' ?></h6>
            </div>
            <div class="card-footer">
                <td><button class="btn btn-primarykey">
                        <a onclick="return confirm('Do you want to delete service')"
                           href="./index.php?page=delete_service&id=<?php echo $service['service_id']; ?>" class="btn btn-warning btn-sm">Delete</a>
                    </button>
                </td>
                <td> <a href="./index.php?page=edit_service&id=<?php echo $service['service_id']; ?>" class="btn btn-sm">Update</a></td>
<!--                <a href="#" class="btn btn-primary d-grid gap-2">Mua</a>-->
            </div>
        </div>
    </div>
<?php endforeach; ?>



<!--<table class="table">-->
<!--  <thead>-->
<!--  <tr>-->
<!--      <th>STT</th>-->
<!--      <th>Service name</th>-->
<!--      <th>prices</th>-->
<!--      <th>Img</th>-->
<!--  </tr>-->
<!--  </thead>-->
<!--  <tbody>-->
<!--  --><?php //foreach ($services as $key => $service): ?>
<!--      <tr>-->
<!--          <td>--><?php //echo ++$key ?><!--</td>-->
<!--          <td>-->
<!--              <a href="index.php?page=service-list&id=--><?php //echo $service['service_id'] ?><!--">-->
<!--                  --><?php //echo $service['service_name'] ?>
<!--              </a>-->
<!--          </td>-->
<!--          <td>--><?php //echo $service['service_prices'] ?><!--</td>-->
<!--          <td><img style="width: 50px" src="img/--><?php //echo $service['img'] ?><!--"></td>-->
<!--          <td><button class="btn btn-primarykey">-->
<!--                  <a onclick="return confirm('Do you want to delete service')"-->
<!--                          href="./index.php?page=delete_service&id=--><?php //echo $service['service_id']; ?><!--" class="btn btn-warning btn-sm">Delete</a>-->
<!--              </button>-->
<!--          </td>-->
<!--          <td> <a href="./index.php?page=edit_service&id=--><?php //echo $service['service_id']; ?><!--" class="btn btn-sm">Update</a></td>-->
<!--      </tr>-->
<!--  --><?php //endforeach; ?>
<!--  </tbody>-->
<!--</table>-->
