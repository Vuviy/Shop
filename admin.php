    <?php require_once 'conDB.php' ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>admin</title>
      <link rel="stylesheet" href="style/admin.css">
    </head>

    <body>
      <?php
      if (!isset($_SESSION['admin'])) {
      ?>
        <div class="enter-form">
          <form action="admin.php" method="POST">
            <input type="text" placeholder="login" name="login">
            <input type="password" placeholder="pasword" name="password">
            <input type="submit" name="enter" value="Enter">
          </form>
        </div>
      <?php
      } else {
      ?>
        <form action="admin.php" method="POST">
          <input type="submit" name="logout" value="logout">
        </form>
        <?php
        $sql_buyers = "SELECT * FROM `buyer_info` ORDER BY `id` DESC";
        $res_buyers = mysqli_query($conn, $sql_buyers);
        $arr = [];
        while ($buyer = mysqli_fetch_assoc($res_buyers)) {
          if (!in_array($buyer['user_id'], $arr)) {
            array_push($arr, $buyer['user_id']);
          }
        }
        for ($i = 0; $i < count($arr); $i++) {
        ?>
          <div class="container">
            <div class="bio">
              <p><?php echo $arr[$i] ?></p>
            </div>
            <div class="orders-container">
              <?php
              $user_id = $buyer['user_id'];
              $sql_order = "SELECT * FROM `buyer_order` WHERE `user_id` = '$arr[$i]'";
              $res_order = mysqli_query($conn, $sql_order);
              while ($order = mysqli_fetch_assoc($res_order)) {
              ?>
                <div>
                  <form class="order" method="POST" action="admin.php">
                    <div><?php echo $order['name'] . ' ' . $order['surname'] . ' ' . $order['father'] ?></div>
                    <div>
                      <p>телефон</p>
                      <input type=" text" name="tel" value="<?php echo $order['tel'] ?>">
                    </div>
                    <div>
                      <p>пошта</p>
                      <input type="text" name="email" value="<?php echo $order['email'] ?>">
                    </div>
                    <div>
                      <p>id товару</p>
                      <span><?php echo $order['good_id'] ?></span>
                    </div>
                    <div class="size small">
                      <p>розмір</p>
                      <input type="text" name="size" value="<?php echo $order['size'] ?>">
                    </div>
                    <div class="small">
                      <p>к-ть</p>
                      <input type="text" name="quantity" value="<?php echo $order['quantity'] ?>">
                    </div>
                    <div>
                      <p>ціна</p>
                      <span><?php echo $order['price'] ?></span>
                    </div>
                    <div>
                      <p>місто</p>
                      <input type="text" name="city" value="<?php echo $order['city'] ?>">
                    </div>
                    <div class="small">
                      <p>№ в-ня</p>
                      <input type="text" name="number" value="<?php echo $order['number'] ?>">
                    </div>
                    <div>
                      <p>вулиця</p>
                      <input type="text" name="street" value="<?php echo $order['street'] ?>">
                    </div>
                    <div>
                      <p>№ будинку</p>
                      <input type="text" name="build" value="<?php echo $order['build'] ?>">
                    </div>
                    <div>
                      <p>№ квартири</p>
                      <input type="text" name="flat" value="<?php echo $order['flat'] ?>">
                    </div>
                    <div>
                      <p>оплата</p>
                      <span><?php echo $order['payment_method'] ?></span>
                    </div>
                    <div>
                      <p>статус</p>
                      <input type="text" name="status" value="<?php echo $order['status'] ?>">
                    </div>
                    <div class="date">
                      <p>дата</p>
                      <span><?php echo $order['datetime'] ?></span>
                    </div>
                    <div>
                      <input type="submit" name="update<?php echo $order['id'] ?>" value="оновити">
                    </div>
                  </form>
                </div>
                <?php



                if (isset($_POST['update' . $order['id']])) {

                  $tel = $_POST['tel'];
                  $email = $_POST['email'];
                  $size = $_POST['size'];
                  $quantity = $_POST['quantity'];
                  $city = $_POST['city'];
                  $number = $_POST['number'];
                  $street = $_POST['street'];
                  $build = $_POST['build'];
                  $flat = $_POST['flat'];
                  $status = $_POST['status'];

                  $order_id = $order['id'];

                  $sql_update = "UPDATE `buyer_order` SET `size`='$size',`quantity`='$quantity',`status`='$status',`tel`='$tel',`email`='$email',`city`='$city',`number`='$number',`street`='$street',`build`='$build',`flat`='$flat' WHERE `id` = '$order_id'";
                  mysqli_query($conn, $sql_update);
                  exit("<meta http-equiv='refresh' content='0; url= admin.php'>");
                }

                ?>
              <?php
              }
              ?>
            </div>
          </div>
        <?php
        }
        ?>



      <?php

      }
      ?>


      <?php

      // login
      //=======
      $login = $_POST['login'];
      $password = $_POST['password'];

      $sql_enter = "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'";
      $res_enter = mysqli_query($conn, $sql_enter);
      if (isset($_POST['enter'])) {

        if (mysqli_num_rows($res_enter) == 0) {
          $err = true;
        } else {
          $_SESSION['admin'] = [];
          exit("<meta http-equiv='refresh' content='0; url= admin.php'>");
        }
      }
      //=============
      //=============
      //logout
      if (isset($_POST['logout'])) {
        unset($_SESSION['admin']);
        exit("<meta http-equiv='refresh' content='0; url= index.php'>");
      }
      //=============
      //=============



      ?>

    </body>

    </html>