<?php require_once '../conDB.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Оформлення зпмовлення</title>
  <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <svg style="display: none;">
    <symbol id="telegram" viewBox="0 0 22 19">
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.6736 12.0686L8.67319 12.0683L8.67365 12.0678L8.67366 12.0677L8.67373 12.0678L17.9473 3.69909C18.3543 3.33786 17.8584 3.16171 17.3181 3.48936L5.87259 10.7102L0.928757 9.16714C-0.138893 8.84024 -0.14656 8.10659 1.16846 7.57914L20.4335 0.150643C21.3133 -0.248824 22.1626 0.361976 21.8267 1.70868L18.5459 17.1692C18.3168 18.2678 17.6529 18.5306 16.7332 18.0231L11.7355 14.3307L9.33332 16.6666C9.32575 16.6739 9.31821 16.6813 9.31072 16.6886C9.04204 16.9501 8.81975 17.1666 8.33332 17.1666L8.6736 12.0686Z" fill="#1E2E36" />
      </g>
    </symbol>
    <symbol id="inst" viewBox="0 0 22 22">
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.60274 0.397758C7.74053 0.34598 8.10409 0.333313 11.001 0.333313H10.9977C13.8955 0.333313 14.2577 0.34598 15.3955 0.397758C16.5311 0.449759 17.3066 0.629538 17.9866 0.893319C18.6889 1.16554 19.2822 1.52999 19.8755 2.12333C20.4689 2.71623 20.8333 3.31134 21.1067 4.01291C21.3689 4.69114 21.5489 5.46625 21.6022 6.60182C21.6533 7.73961 21.6667 8.10317 21.6667 11.0001C21.6667 13.897 21.6533 14.2597 21.6022 15.3975C21.5489 16.5326 21.3689 17.3079 21.1067 17.9864C20.8333 18.6877 20.4689 19.2828 19.8755 19.8757C19.2829 20.4691 18.6886 20.8344 17.9873 21.1069C17.3086 21.3706 16.5326 21.5504 15.3971 21.6024C14.2593 21.6542 13.8968 21.6669 10.9997 21.6669C8.10298 21.6669 7.73964 21.6542 6.60185 21.6024C5.46651 21.5504 4.69117 21.3706 4.01249 21.1069C3.31137 20.8344 2.71626 20.4691 2.12358 19.8757C1.53047 19.2828 1.16602 18.6877 0.893349 17.9862C0.629791 17.3079 0.450011 16.5328 0.397789 15.3972C0.346232 14.2595 0.333344 13.897 0.333344 11.0001C0.333344 8.10317 0.346677 7.73939 0.397566 6.6016C0.448678 5.46648 0.62868 4.69114 0.893127 4.01268C1.16646 3.31134 1.53091 2.71623 2.12425 2.12333C2.71715 1.53021 3.31226 1.16577 4.01383 0.893319C4.69206 0.629538 5.46717 0.449759 6.60274 0.397758ZM10.6455 2.25547C10.4298 2.25538 10.23 2.25529 10.0442 2.25558V2.25291C8.05614 2.25513 7.6748 2.26847 6.69079 2.31291C5.65078 2.36069 5.08611 2.53402 4.7101 2.68069C4.21232 2.87447 3.85676 3.10559 3.48342 3.47892C3.11008 3.85226 2.87853 4.20782 2.68519 4.7056C2.53919 5.08161 2.36541 5.64606 2.31785 6.68607C2.26674 7.81052 2.25652 8.14653 2.25652 10.995C2.25652 13.8435 2.26674 14.1813 2.31785 15.3057C2.36519 16.3457 2.53919 16.9102 2.68519 17.2857C2.87897 17.7837 3.11008 18.1384 3.48342 18.5117C3.85676 18.8851 4.21232 19.1162 4.7101 19.3095C5.08633 19.4555 5.65078 19.6293 6.69079 19.6773C7.81524 19.7284 8.1528 19.7395 11.0011 19.7395C13.8491 19.7395 14.1869 19.7284 15.3113 19.6773C16.3513 19.6298 16.9162 19.4564 17.2918 19.3098C17.7898 19.1164 18.1442 18.8853 18.5176 18.512C18.8909 18.1389 19.1225 17.7844 19.3158 17.2866C19.4618 16.9111 19.6356 16.3466 19.6831 15.3066C19.7343 14.1821 19.7454 13.8444 19.7454 10.9977C19.7454 8.15097 19.7343 7.81319 19.6831 6.68873C19.6358 5.64872 19.4618 5.08427 19.3158 4.70871C19.122 4.21093 18.8909 3.85537 18.5176 3.48203C18.1445 3.1087 17.7896 2.87758 17.2918 2.68425C16.9158 2.53825 16.3513 2.36447 15.3113 2.31691C14.1866 2.2658 13.8491 2.25558 11.0011 2.25558L10.6455 2.25547ZM5.5232 10.9999C5.5232 7.97481 7.9759 5.52211 11.001 5.52211H11.0008C14.026 5.52211 16.478 7.97481 16.478 10.9999C16.478 14.0251 14.0262 16.4767 11.001 16.4767C7.9759 16.4767 5.5232 14.0251 5.5232 10.9999ZM14.5566 11.0002C14.5566 9.03644 12.9646 7.44464 11.001 7.44464C9.0372 7.44464 7.44541 9.03644 7.44541 11.0002C7.44541 12.9638 9.0372 14.5558 11.001 14.5558C12.9646 14.5558 14.5566 12.9638 14.5566 11.0002ZM15.415 5.30636C15.415 4.59946 15.9883 4.02679 16.695 4.02679V4.02635C17.4017 4.02635 17.975 4.59969 17.975 5.30636C17.975 6.01303 17.4017 6.58637 16.695 6.58637C15.9883 6.58637 15.415 6.01303 15.415 5.30636Z" fill="#1E2E36" />
      </g>
    </symbol>
    <symbol id="arrow" viewBox="0 0 14 8">
      <g>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.5303 0.46967C13.8232 0.762563 13.8232 1.23744 13.5303 1.53033L7.53033 7.53033C7.23744 7.82322 6.76256 7.82322 6.46967 7.53033L0.46967 1.53033C0.176777 1.23744 0.176777 0.762563 0.46967 0.469669C0.762563 0.176776 1.23744 0.176776 1.53033 0.469669L7 5.93934L12.4697 0.46967C12.7626 0.176777 13.2374 0.176777 13.5303 0.46967Z" fill="#1E2E36" />
      </g>
      <symbol>
        <symbol id="close" viewBox="0 0 500 500">
          <g>
            <path d="M443.6,387.1L312.4,255.4l131.5-130c5.4-5.4,5.4-14.2,0-19.6l-37.4-37.6c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4  L256,197.8L124.9,68.3c-2.6-2.6-6.1-4-9.8-4c-3.7,0-7.2,1.5-9.8,4L68,105.9c-5.4,5.4-5.4,14.2,0,19.6l131.5,130L68.4,387.1  c-2.6,2.6-4.1,6.1-4.1,9.8c0,3.7,1.4,7.2,4.1,9.8l37.4,37.6c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1L256,313.1l130.7,131.1  c2.7,2.7,6.2,4.1,9.8,4.1c3.5,0,7.1-1.3,9.8-4.1l37.4-37.6c2.6-2.6,4.1-6.1,4.1-9.8C447.7,393.2,446.2,389.7,443.6,387.1z" />
          </g>
        </symbol>
  </svg>


  <div class="page">

    <?php require_once '../include/header.php' ?>


    <main class="main">
      <div class="container">
        <!-- початок форми
              ============ -->
        <form action="a.php" method="POST">
          <!-- ========= -->
          <!-- ========= -->
          <div class="peyment">
            <div class="peyment-info">

              <?php
              if (isset($_SESSION['user'])) {
                $user_id = $_SESSION['user']['0']['id'];
                $sql_info = "SELECT * FROM `users` WHERE `id` = '$user_id'";
                $res_info = mysqli_query($conn, $sql_info);
                while ($user_info = mysqli_fetch_assoc($res_info)) {
                  if ($user_info['name'] !== 'NULL') {
              ?>
                    <div class="bio pay-item">
                      <h4 class="title">Ваші контактні дані</h4>
                      <div class="bio-inputs">
                        <div class="item">
                          <label for="name">Ваше ім'я:</label>
                          <input name="name" id="name" type="text" placeholder="Ваше ім'я" value="<?php echo $user_info['name'] ?>" required>
                        </div>
                        <div class="item">
                          <label for="surname">Ваше прізвище:</label>
                          <input name="surname" id="surname" type="text" placeholder="Ваше прізвище" value="<?php echo $user_info['surname'] ?>" required>
                        </div>
                        <div class="item">
                          <label for="father">По батькові:</label>
                          <input name="father" id="father" type="text" placeholder="Як Вас по батькові" value="<?php echo $user_info['father'] ?>">
                        </div>
                        <div class="item">
                          <label for="tel">Ваш телефон:<small>в форматі 0хх хх ххх хх</small> </label>
                          <input name="tel" id="tel" type="tel" placeholder="Телефон" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" value="<?php echo $user_info['tel'] ?>" required>
                        </div>
                        <div class="item">
                          <label for="email">Ваш Email:</label>
                          <input name="email" id="email" type="email" placeholder="email" value="<?php echo $user_info['email'] ?>" required>
                        </div>
                      </div>
                    </div>
                    <?php
                    if ($user_info['city'] !== 'NULL') {
                    ?>
                      <div class="ship pay-item">
                        <h4 class="title">Доставка</h4>
                        <div class="ship-inner">
                          <div class="item">
                            <label for="city">Місто</label>
                            <input name="city" id="city" type="tel" placeholder="Наприклад: Київ" value="<?php echo $user_info['city'] ?>">
                          </div>
                          <div class="num-or-not">
                            <div class="ship-method method-post active">у відділення
                              <input class="hidden-radio" type="radio" name="shiping-method" value="post" checked>
                            </div>
                            <div class="ship-method method-courier">кур'єром
                              <input class="hidden-radio" type="radio" name="shiping-method" value="courier">
                            </div>
                          </div>
                          <div class="item post">
                            <label for="number">Відділення</label>
                            <input name="number" id="number" type="text" placeholder="Номер відділення" value="<?php echo $user_info['number'] ?>">
                          </div>
                          <div class="item courier hiden">
                            <div class="courier-item">
                              <label for="street">Вулиця</label>
                              <input name="street" id="street" type="text" value="<?php echo $user_info['street'] ?>">
                            </div>
                            <div class="courier-item">
                              <label for="build">Будинок</label>
                              <input name="build" id="build" type="text" value="<?php echo $user_info['build'] ?>">
                            </div>
                            <div class="courier-item">
                              <label for="flat">Квартира</label>
                              <input name="flat" id="flat" type="text" value="<?php echo $user_info['flat'] ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php
                    } else {
                    ?>
                      <div class="ship pay-item">
                        <h4 class="title">Доставка</h4>
                        <div class="ship-inner">
                          <div class="item">
                            <label for="city">Місто</label>
                            <input name="city" id="city" type="tel" placeholder="Наприклад: Київ">
                          </div>
                          <div class="num-or-not">
                            <div class="ship-method method-post active">у відділення
                              <input class="hidden-radio" type="radio" name="shiping-method" value="post" checked>
                            </div>
                            <div class="ship-method method-courier">кур'єром
                              <input class="hidden-radio" type="radio" name="shiping-method" value="courier">
                            </div>
                          </div>
                          <div class="item post">
                            <label for="number">Відділення</label>
                            <input name="number" id="number" type="text" placeholder="Номер відділення">
                          </div>
                          <div class="item courier hiden">
                            <div class="courier-item">
                              <label for="street">Вулиця</label>
                              <input name="street" id="street" type="text">
                            </div>
                            <div class="courier-item">
                              <label for="build">Будинок</label>
                              <input name="build" id="build" type="text">
                            </div>
                            <div class="courier-item">
                              <label for="flat">Квартира</label>
                              <input name="flat" id="flat" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                  <?php
                  } else {
                  ?>
                    <div class="bio-inputs">
                      <div class="item">
                        <label for="name">Ваше ім'я:</label>
                        <input name="name" id="name" type="text" placeholder="Ваше ім'я" value="" required>
                      </div>
                      <div class="item">
                        <label for="surname">Ваше прізвище:</label>
                        <input name="surname" id="surname" type="text" placeholder="Ваше прізвище" value="" required>
                      </div>
                      <div class="item">
                        <label for="father">По батькові:</label>
                        <input name="father" id="father" type="text" placeholder="Як Вас по батькові" value="">
                      </div>
                      <div class="item">
                        <label for="tel">Ваш телефон:<small>в форматі 0хх хх ххх хх</small> </label>
                        <input name="tel" id="tel" type="tel" placeholder="Телефон" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" value="" required>
                      </div>
                      <div class="item">
                        <label for="email">Ваш Email:</label>
                        <input name="email" id="email" type="email" placeholder="email" value="" required>
                      </div>
                    </div>
                    <?php
                    if ($user_info['city'] !== 'NULL') {
                    ?>
                      <div class="ship pay-item">
                        <h4 class="title">Доставка</h4>
                        <div class="ship-inner">
                          <div class="item">
                            <label for="city">Місто</label>
                            <input name="city" id="city" type="tel" placeholder="Наприклад: Київ" value="<?php echo $user_info['city'] ?>">
                          </div>
                          <div class="num-or-not">
                            <div class="ship-method method-post active">у відділення
                              <input class="hidden-radio" type="radio" name="shiping-method" value="post" checked>
                            </div>
                            <div class="ship-method method-courier">кур'єром
                              <input class="hidden-radio" type="radio" name="shiping-method" value="courier">
                            </div>
                          </div>
                          <div class="item post">
                            <label for="number">Відділення</label>
                            <input name="number" id="number" type="text" placeholder="Номер відділення" value="<?php echo $user_info['number'] ?>">
                          </div>
                          <div class="item courier hiden">
                            <div class="courier-item">
                              <label for="street">Вулиця</label>
                              <input name="street" id="street" type="text" value="<?php echo $user_info['street'] ?>">
                            </div>
                            <div class="courier-item">
                              <label for="build">Будинок</label>
                              <input name="build" id="build" type="text" value="<?php echo $user_info['build'] ?>">
                            </div>
                            <div class="courier-item">
                              <label for="flat">Квартира</label>
                              <input name="flat" id="flat" type="text" value="<?php echo $user_info['flat'] ?>">
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php
                    } else {
                    ?>
                      <div class="ship pay-item">
                        <h4 class="title">Доставка</h4>
                        <div class="ship-inner">
                          <div class="item">
                            <label for="city">Місто</label>
                            <input name="city" id="city" type="tel" placeholder="Наприклад: Київ">
                          </div>
                          <div class="num-or-not">
                            <div class="ship-method method-post active">у відділення
                              <input class="hidden-radio" type="radio" name="shiping-method" value="post" checked>
                            </div>
                            <div class="ship-method method-courier">кур'єром
                              <input class="hidden-radio" type="radio" name="shiping-method" value="courier">
                            </div>
                          </div>
                          <div class="item post">
                            <label for="number">Відділення</label>
                            <input name="number" id="number" type="text" placeholder="Номер відділення">
                          </div>
                          <div class="item courier hiden">
                            <div class="courier-item">
                              <label for="street">Вулиця</label>
                              <input name="street" id="street" type="text">
                            </div>
                            <div class="courier-item">
                              <label for="build">Будинок</label>
                              <input name="build" id="build" type="text">
                            </div>
                            <div class="courier-item">
                              <label for="flat">Квартира</label>
                              <input name="flat" id="flat" type="text">
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php
                    }
                    ?>
                <?php
                  }
                }
                ?>
                <!-- ================================= -->
                <!-- для незареєстрованих користувачів -->
                <!-- ================================= -->
              <?php
              } else {
              ?>
                <div class="bio pay-item">
                  <h4 class="title">Ваші контактні дані</h4>
                  <div class="bio-inputs">
                    <div class="item">
                      <label for="name">Ваше ім'я:</label>
                      <input name="name" id="name" type="text" placeholder="Ваше ім'я" required>
                    </div>
                    <div class="item">
                      <label for="surname">Ваше прізвище:</label>
                      <input name="surname" id="surname" type="text" placeholder="Ваше прізвище" required>
                    </div>
                    <div class="item">
                      <label for="father">По батькові:</label>
                      <input name="father" id="father" type="text" placeholder="Як Вас по батькові">
                    </div>
                    <div class="item">
                      <label for="tel">Ваш телефон:<small>в форматі 0хх хх ххх хх</small> </label>
                      <input name="tel" id="tel" type="tel" placeholder="Телефон" pattern="[0-9]{3}[0-9]{2}[0-9]{3}[0-9]{2}" required>
                    </div>
                    <div class="item">
                      <label for="email">Ваш Email:</label>
                      <input name="email" id="email" type="email" placeholder="email" required>
                    </div>
                  </div>
                </div>
                <div class="ship pay-item">
                  <h4 class="title">Доставка</h4>
                  <div class="ship-inner">
                    <div class="item">
                      <label for="city">Місто</label>
                      <input name="city" id="city" type="tel" placeholder="Наприклад: Київ">
                    </div>
                    <div class="num-or-not">
                      <div class="ship-method method-post active">у відділення
                        <input class="hidden-radio" type="radio" name="shiping-method" value="post" checked>
                      </div>
                      <div class="ship-method method-courier">кур'єром
                        <input class="hidden-radio" type="radio" name="shiping-method" value="courier">
                      </div>
                    </div>
                    <div class="item post">
                      <label for="number">Відділення</label>
                      <input name="number" id="number" type="text" placeholder="Номер відділення">
                    </div>
                    <div class="item courier hiden">
                      <div class="courier-item">
                        <label for="street">Вулиця</label>
                        <input name="street" id="street" type="text">
                      </div>
                      <div class="courier-item">
                        <label for="build">Будинок</label>
                        <input name="build" id="build" type="text">
                      </div>
                      <div class="courier-item">
                        <label for="flat">Квартира</label>
                        <input name="flat" id="flat" type="text">
                      </div>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>

              <!-- ========== -->
              <div class="pay pay-item">
                <h4 class="title">Оплата</h4>
                <div class="pay-inner">
                  <div class="pay-method cart">на карту LiqPay
                    <input class="hidden-radio" type="radio" name="payment-method" value="cart" required>
                  </div>
                  <div class="pay-method in-post">У відділення пошти
                    <input class="hidden-radio" type="radio" name="payment-method" value="in-post" required>
                  </div>
                </div>
              </div>
            </div>
            <div class="good-aside">
              <h3>Ваше замовлення:</h3>

              <?php
              if (empty($_GET['good'])) {
                if ($count !== 0) {
                  // для незареєстрованого користувача
                  if (empty($_SESSION['user'])) {
                    for ($i = 0; $i < $count; $i++) {
                      $id_good = $_SESSION['bucket'][$i]['id'];
                      $query = "SELECT * FROM `goods` WHERE `id` = $id_good";
                      $goods = mysqli_query($conn, $query);
                      while ($good = mysqli_fetch_assoc($goods)) {
              ?>
                        <input style="position:absolute; opacity:0; z-index:-40;" name="good_id<?php echo $i ?>" type="text" value="<?php echo $id_good ?>">
                        <div class="good-aside-item">
                          <div class="good-aside-img">
                            <img src="../img/dress/<?php echo $good['photo'] ?>" alt="">
                          </div>
                          <div class="good-aside-info">
                            <h3 class="good-aside-title"><?php echo $good['title'] ?></h3>

                            <span class="good-aside-article"><?php echo $good['article'] ?></span>
                            <p class="good-aside-price">Ціна: <span class="price-item"><?php echo $good['price'] ?></span><span>грн</span></p>
                            <input style="position:absolute; opacity:0; z-index:-40;" name="good_price<?php echo $i ?>" type="text" value="<?php echo $good['price'] ?>">

                            <?php
                            if ($_SESSION['bucket'][$i]['quantity'] != 1) {
                              echo "<p class=\"good-aside-price one-price\">Ціна за одиницю: <span class=\"price-item-one\">" . $good['price'] . "</span><span>грн</span></p>";
                            }
                            ?>
                            <div class="good-aside-sizes">
                              <span>Розмір: <span class="size-value"><?php echo $_SESSION['bucket'][$i]['size'] ?></span></span>
                              <input style="position:absolute; opacity:0; z-index:-40;" name="good_size<?php echo $i ?>" type="text" value="<?php echo $_SESSION['bucket'][$i]['size'] ?>">
                            </div>
                            <div class="good-aside-quantity">
                              <span>Кількість: <span class="quantity-item"><?php echo $_SESSION['bucket'][$i]['quantity'] ?></span> </span>
                              <input style="position:absolute; opacity:0; z-index:-40;" name="good_quantity<?php echo $i ?>" type="text" value="<?php echo $_SESSION['bucket'][$i]['quantity'] ?>">
                            </div>
                          </div>
                        </div>
                      <?php
                      }
                    }
                    //  для зареєестрованого користувача
                  } else {
                    $user_id = $_SESSION['user']['0']['id'];
                    $query = "SELECT * FROM `bucket` WHERE `user_id` = '$user_id'";
                    $user_buck = mysqli_query($conn, $query);
                    $good = [];
                    while ($buck = mysqli_fetch_assoc($user_buck)) {
                      $good['user_id'] = $buck['user_id'];
                      $good['good_id'] = $buck['good_id'];
                      $good['size'] = $buck['size'];
                      $good['quantity'] = $buck['quantity'];
                      $user_id_good = $good['good_id'];
                      $sql_good = "SELECT * FROM `goods` WHERE `id` = '$user_id_good'";
                      $user_goods = mysqli_query($conn, $sql_good);
                      while ($good_info = mysqli_fetch_assoc($user_goods)) {
                      ?>
                        <input style="position:absolute; opacity:0; z-index:-40;" name="good_id<?php echo $good_info['id'] ?>" type="text" value="<?php echo $good['good_id'] ?>">
                        <div class="good-aside-item">
                          <div class="good-aside-img">
                            <img src="../img/dress/<?php echo $good_info['photo'] ?>" alt="">
                          </div>
                          <div class="good-aside-info">
                            <h3 class="good-aside-title"><?php echo $good_info['title'] ?></h3>

                            <!-- тут була кнопка -->
                            <!-- тут була кнопка -->

                            <span class="good-aside-article"><?php echo $good['article'] ?></span>
                            <p class="good-aside-price">Ціна: <span class="price-item"><?php echo $good_info['price'] ?></span><span>грн</span></p>
                            <input style="position:absolute; opacity:0; z-index:-40;" name="good_price<?php echo $good_info['id'] ?>" type="text" value="<?php echo $good_info['price'] ?>">
                            <?php
                            if ($good['quantity'] != 1) {
                              echo "<p class=\"good-aside-price one-price\">Ціна за одиницю: <span class=\"price-item-one\">" . $good_info['price'] . "</span><span>грн</span></p>";
                            }
                            ?>
                            <div class="good-aside-sizes">
                              <span>Розмір: <span class="size-value"><?php echo $good['size'] ?></span></span>
                              <input style="position:absolute; opacity:0; z-index:-40;" name="good_size<?php echo $good_info['id'] ?>" type="text" value="<?php echo $good['size'] ?>">
                            </div>
                            <div class="good-aside-quantity">
                              <span>Кількість: <span class="quantity-item"><?php echo $good['quantity'] ?></span> </span>
                              <input style="position:absolute; opacity:0; z-index:-40;" name="good_quantity<?php echo $good_info['id'] ?>" type="text" value="<?php echo $good['quantity'] ?>">
                            </div>
                          </div>
                        </div>
                  <?php
                      }
                    }
                  }
                } else {
                  echo '<h1>У кошику немає товарів</h1>';
                }
              } else { //якшо нажати просто купити а не з корзини

                $id_good = (int) $_GET['good'];
                $query_item = "SELECT * FROM `goods` WHERE `id` = $id_good";
                $items = mysqli_query($conn, $query_item);
                while ($item = mysqli_fetch_assoc($items)) {
                  ?>
                  <input style="position:absolute; opacity:0; z-index:-40;" name="good_id" type="text" value="<?php echo $id_good ?>">
                  <div class="good-aside-item">
                    <div class="good-aside-img">
                      <img src="../img/dress/<?php echo $item['photo'] ?>" alt="">
                    </div>
                    <div class="good-aside-info">
                      <h3 class="good-aside-title">
                        <?php echo $item['title'] ?>
                      </h3>
                      <span class="good-aside-article"><?php echo $item['article'] ?></span>
                      <p class="good-aside-price">Ціна: <span class="price-item">
                          <?php echo $item['price'] ?>
                        </span><span>грн</span></p>
                      <input style="position:absolute; opacity:0; z-index:-40;" name="good_price" type="text" value="<?php echo $item['price'] ?>">
                      <?php
                      if ($_GET['quantity'] != 1) {
                        echo "<p class=\"good-aside-price one-price\">Ціна за одиницю: <span class=\"price-item-one\">" . $item['price'] . "</span><span>грн</span></p>";
                      }
                      ?>
                      <div class="good-aside-size">
                        <span>Розмір: <span class="size-value"><?php echo $_GET['size'] ?></span></span>
                        <input style="position:absolute; opacity:0; z-index:-40;" name="good_size" type="text" value="<?php echo $_GET['size'] ?>">
                      </div>
                      <div class="good-aside-quantity">
                        <span>Кількість: <span class="quantity-item"><?php echo $_GET['quantity'] ?></span> </span>
                        <input style="position:absolute; opacity:0; z-index:-40;" name="good_quantity" type="text" value="<?php echo $_GET['quantity'] ?>">
                      </div>
                    </div>
                  </div>
              <?php
                }
              }
              ?>
              <div class="good-aside-summ">
                <div class="all-price">
                  <span class="title">Всього до сплати:</span>
                  <span class="summ"><span class="total-price"></span> грн</span>
                  <input style="position:absolute; opacity:0; z-index:-40;" class="summInput" name="total-price" type="text" value="total-prise">
                </div>
                <div class="all-price">
                  <span class="title">Доставка:</span>
                  <span class="summ">~59 грн</span>
                </div>
                <div class="btn-pay">
                  <button name="pay-btn" class="good-aside-bye" type="submit">Замовити</button>
                </div>
              </div>
            </div>
          </div>
          <!-- кінець форми -->
          <!-- ============ -->
        </form>
        <!-- ========= -->
        <!-- ========= -->
        <!-- <div class="row">
          <form class="form" action="">
            <p>підпишіться на розсилку новин</p>
            <input type="mail" placeholder="E-mail">
            <button type="submit">підписатись</button>
          </form>
        </div> -->
    </main>

    <?php require_once '../include/footer.php' ?>
  </div>
  <script src="../js/header.js"></script>
  <script src="../js/buy.js"></script>
</body>

</html>