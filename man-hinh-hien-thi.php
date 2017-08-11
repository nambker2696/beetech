<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Màn hình đăng nhập</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/man-hinh-hien-thi.css">
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="http://bsdp-assets.blackcherry.us/1.3.0/datepicker.min.css">
  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="dist/semantic.min.js"></script>
  <script src="http://bsdp-assets.blackcherry.us/1.3.0/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $(".calendar").datepicker();
    });
  </script>
</head>
<body>
  <?php include('header-chu-tau.php') ?>
  <div class="container">
    <div class="content" style="display: flex;">
      <div class="calendar">
      </div>
      <div class="center-content" style="width: 100%">
        <div class="header-boat-infor clearfix">
          <div class="header-boat">
            <span class="boat-name">
              <span class="title">Tên tàu:</span> Athena Cruise 1
            </span>
            <span class="time">
              <span class="title">Tháng:</span>  7
            </span>  
          </div>
          <div class="booking-btn">
            <button class="btn-booking-room">
              <span> Đặt phòng </span> 
              </button>
            <button class="btn-keeping-room">
              <span>Giữ phòng</span> 
            </button>
          </div>
        </div>
        <table class="table-room-infor">
          <thead>
            <tr>
              <th class="th-room-infor">Tên phòng</th>
              <th class="th-room-infor">Mã phòng</th>
              <?php for ($i = 1; $i <= 7; $i++) { ?> 
                <th class="th-room-infor"><?php echo $i ?>/8/2017</th>
              <? }?>
            </tr>
          </thead>
          <tbody>
            <tr class="tr-room-infor">
              <td class="td-room-infor td-room-name">Junio Tw in 1</td>
              <td class="td-room-infor td-room-code">A1</td>
              <td class="td-keeping-room td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-available-room td-room-infor"></td>
              <td class="td-booked-room-full-infor td-room-infor"></td>
              <td class="td-booked-room-lack-infor td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
            </tr>
            <tr class="tr-room-infor">
              <td class="td-room-infor td-room-name">Junio Tw in 1</td>
              <td class="td-room-infor td-room-code">A2</td>
              <td class="td-available-room td-room-infor"></td>
              <td class="td-keeping-room td-room-infor"></td>
              <td class="td-booked-room-full-infor td-room-infor"></td>
              <td class="td-booked-room-lack-infor td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
            </tr>
            <tr class="tr-room-infor">
              <td class="td-room-infor td-room-name">Junio Tw in 1</td>
              <td class="td-room-infor td-room-code">A3</td>
              <td class="td-keeping-room td-room-infor"></td>
              <td class="td-booked-room-full-infor td-room-infor"></td>
              <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
              <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
            </tr>
            <tr class="tr-room-infor">
              <td class="td-room-infor td-room-name">Junio Tw in 1</td>
              <td class="td-room-infor td-room-code">B1</td>
              <td class="td-keeping-room td-room-infor" style="border-top: 0;"></td>
              <td class="td-available-room td-room-infor"></td>
              <td class="td-booked-room-full-infor td-room-infor"></td>
              <td class="td-booked-room-lack-infor td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
            </tr>
            <tr class="tr-room-infor">
              <td class="td-room-infor td-room-name">Junio Tw in 1</td>
              <td class="td-room-infor td-room-code">B2</td>
              <td class="td-booked-room-full-infor td-room-infor"></td>
              <td class="td-booked-room-lack-infor td-room-infor"></td>
              <td class="td-keeping-room td-room-infor"></td>
              <td class="td-available-room td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
              <td class="td-room-infor"></td>
            </tr>
          </tbody>
        </table>
      </div>  
    </div>
    
  </div>
</section>
  <?php include('footer.php'); ?>
</body>
</html>
