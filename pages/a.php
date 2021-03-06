<?php require_once '../conDB.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Про нас</title>
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

  </svg>
  <div class="page">
    <?php require_once '../include/header.php' ?>
    <main class="main">
      <div class="container">
        <?php
        // <!-- тут вносю в базу в таблицю buyer_info-->

        $uuu = array_keys($_POST);

        if (empty($_SESSION['user'])) {
          $user_id = mt_rand(100000000, 999999999);
        } else {
          $user_id = $_SESSION['user']['0']['id'];
        }
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $father = $_POST['father'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        if ($_POST['shiping-method'] == 'post') {
          $number = $_POST['number'];
          $street = 'NULL';
          $build = 'NULL';
          $flat = 'NULL';
        } else {
          $number = 'NULL';
          $street = $_POST['street'];
          $build = $_POST['build'];
          $flat = $_POST['flat'];
        }
        $payment_method = $_POST['payment-method'];
        $total_price = $_POST['total-price'];

        $sql = "INSERT INTO `buyer_info`(`user_id`) VALUES ('$user_id')";
        mysqli_query($conn, $sql);

        // кінець 
        //===============

        //<!-- тут вносю в базу в таблицю buyer_order-->

        for ($i = 0; $i < count($uuu); $i++) {
          if (strpos($uuu[$i], 'good_id') !== false) {

            $real_good_id = $_POST[$uuu[$i]];

            $good_id = str_replace('good_id', '', $uuu[$i]);
            $size =  $_POST['good_size' . $good_id];
            $quantity =  $_POST['good_quantity' . $good_id];
            $good_price =  $_POST['good_price' . $good_id];

            $query = "INSERT INTO `buyer_order`(`user_id`, `good_id`, `size`, `quantity`, `price`,  `name`, `surname`, `father`, `tel`, `email`, `city`, `number`, `street`, `build`, `flat`, `payment_method`, `total_price`) VALUES ('$user_id','$real_good_id','$size','$quantity','$good_price','$name','$surname','$father','$tel','$email','$city','$number','$street','$build','$flat','$payment_method','$total_price')";
            mysqli_query($conn, $query);
          }
        }
        if ($_POST['payment-method'] == 'cart') {
        ?>

          <form method="POST" accept-charset="utf-8" action="https://www.liqpay.ua/api/3/checkout">
            <input type="hidden" name="data" value="eyJ2ZXJzaW9uIjozLCJhY3Rpb24iOiJwYXkiLCJhbW91bnQiOjUsImN1cnJlbmN5IjoiVUFIIiwiZGVzY3JpcHRpb24iOiLQnNGW0Lkg0YLQvtCy0LDRgCIsInB1YmxpY19rZXkiOiJzYW5kYm94X2k1NzIzMzY3OTU5NiIsImxhbmd1YWdlIjoicnUifQ==" />
            <input type="hidden" name="signature" value="h5FC316LbWK3gV4s5yGZ/ifiPvc=" />
            <button style="border: none !important; display:inline-block !important;text-align: center !important;padding: 7px 20px !important;
    color: #fff !important; font-size:16px !important; font-weight: 600 !important; font-family:OpenSans, sans-serif; cursor: pointer !important; border-radius: 2px !important;
    background: rgba(122,183,43,1) !important;" onmouseover="this.style.opacity='0.5';" onmouseout="this.style.opacity='1';">
              <img src="https://static.liqpay.ua/buttons/logo-small.png" name="btn_text" style="margin-right: 7px !important; vertical-align: middle !important;" />
              <span style="vertical-align:middle; !important">Сплатити <?php echo $total_price ?> UAH</span>
            </button>
          </form>
        <?php
        } else {
          echo '<h2>Вітаю, ви здійснили покупку. Менеджер з вами зв\'яжеться для уточнення інформації</h2>';
        }
        if (empty($_SESSION['user'])) {
          unset($_SESSION['bucket']);
          $_SESSION['bucket'] = [];
        } else {
          $sql_del = "DELETE FROM `bucket` WHERE `good_id` = '$real_good_id' AND `user_id` = '$user_id'";
          mysqli_query($conn, $sql_del);
        }
        ?>
      </div>
    </main>
    <?php require_once '../include/footer.php' ?>
  </div>
  <script src="app.js"></script>
</body>

</html>