<header class="header">
  <div class="container">
    <div class="header-inner">
      <div class="logo">
        <a href="../../index.php">Магазин одягу</a>
      </div>
      <div class="catalog">
        <p id="catalog-p">каталог</p>
        <div class="cat">
          <div class="cat-inner">
            <div class="cat-item men">
              <h2 class="cat-title">Чоловічий одяг</h2>

              <?php
              $query_men = "SELECT * FROM `goods_categories` WHERE `sex` = 'men'";
              $cats_men = mysqli_query($conn, $query_men);
              while ($cat_men = mysqli_fetch_assoc($cats_men)) {
              ?>
                <a class="cat-link" href="../pages/categorie.php?categorie=<?php echo $cat_men['id'] ?>"><?php echo $cat_men['categorie']; ?></a>
              <?php
              }
              ?>

            </div>
            <div class="cat-item women">
              <h2 class="cat-title">Жіночий одяг</h2>
              <?php
              $query_women = "SELECT * FROM `goods_categories` WHERE `sex` = 'women'";
              $cats_women = mysqli_query($conn, $query_women);
              while ($cat_women = mysqli_fetch_assoc($cats_women)) {
              ?>
                <a class="cat-link" href="../pages/categorie.php?categorie=<?php echo $cat_women['id'] ?>"><?php echo $cat_women['categorie'] ?></a>
              <?php
              }
              ?>
            </div>
          </div>

        </div>
      </div>
      <div class="log-small">
        <div class="small-inner">
          <a class="log-link bucket" href="../pages/bucket.php">

            <?php
            if (empty($_SESSION['user'])) {
              $count = count($_SESSION['bucket'], $mode = COUNT_NORMAL);
            } else {
              $user = $_SESSION['user'][0]['id'];
              $sql_buck = "SELECT * FROM `bucket` WHERE `user_id` = '$user'";
              $count_res = mysqli_query($conn, $sql_buck);
              $count = mysqli_num_rows($count_res);
            }
            if ($count !== 0) {
              echo '<span class=count>' . $count . '</span>';
            }
            ?>
            кошик</a>
          <?php
          if (empty($_SESSION['user'])) {
          ?>
            <a class="log-link login" href="../pages/login.php">Увійти </a>
            <a class="log-link reg" href="../pages/signup.php">Зарeєструватись</a>
          <?php
          } else {
          ?>

            <div class="account-item">
              <a class="account-user-name" href="../pages/account.php?info">
                <div class="account-img">
                  <img src="../img/icons/account.png" alt="">
                </div> <?php echo $_SESSION['user']['0']['login']; ?>
              </a>
              <div class="account-popup">
                <div class="account-popup-inner">
                  <a class="account-user-name" href="../pages/account.php?info">Акаунт</a>
                  <a class="account-user-name" href="../pages/account.php?orders">Мої замовлення</a>

                  <form class="logout-form" method="POST" action="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                    <button class="log-link logout" type="submit" name="logout">Вийти</button>
                    <?php
                    if (isset($_POST['logout'])) {
                      unset($_SESSION['user']);
                      unset($_SESSION['user_bucket']);

                      exit("<meta http-equiv='refresh' content='0; url= ../index.php'>");
                    }
                    ?>
                  </form>
                </div>
              </div>
            </div>
          <?php
          }
          ?>


        </div>
      </div>
      <div class="log">
        <a class="log-link bucket" href="../pages/bucket.php">

          <?php
          if (empty($_SESSION['user'])) {
            $count = count($_SESSION['bucket'], $mode = COUNT_NORMAL);
          } else {
            $user = $_SESSION['user'][0]['id'];
            $sql_buck = "SELECT * FROM `bucket` WHERE `user_id` = '$user'";
            $count_res = mysqli_query($conn, $sql_buck);
            $count = mysqli_num_rows($count_res);
          }
          if ($count !== 0) {
            echo '<span class=count>' . $count . '</span>';
          }
          ?>
          кошик</a>
        <?php
        if (empty($_SESSION['user'])) {
        ?>
          <a class="log-link login" href="../pages/login.php">Увійти </a>/
          <a class="log-link reg" href="../pages/signup.php">Зарeєструватись</a>
        <?php
        } else {
        ?>

          <div class="account-item">
            <a class="account-user-name" href="../pages/account.php?info">
              <div class="account-img">
                <img src="../img/icons/account.png" alt="">
              </div> <?php echo $_SESSION['user']['0']['login']; ?>
            </a>
            <div class="account-popup">
              <div class="account-popup-inner">
                <a class="account-user-name" href="../pages/account.php?info">Акаунт</a>
                <a class="account-user-name" href="../pages/account.php?orders">Мої замовлення</a>

                <form class="logout-form" method="POST" action="<?php echo $_SERVER['HTTP_REFERER'] ?>">
                  <button class="log-link logout" type="submit" name="logout">Вийти</button>
                  <?php
                  if (isset($_POST['logout'])) {
                    unset($_SESSION['user']);
                    unset($_SESSION['user_bucket']);

                    exit("<meta http-equiv='refresh' content='0; url= ../index.php'>");
                  }
                  ?>
                </form>
              </div>
            </div>
          </div>
        <?php
        }
        ?>


      </div>
    </div>
  </div>



</header>