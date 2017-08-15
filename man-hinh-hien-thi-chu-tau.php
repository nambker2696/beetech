<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Màn hình đăng nhập</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/man-hinh-hien-thi.css">
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="http://bsdp-assets.blackcherry.us/1.3.0/datepicker.min.css">

</head>
<body>
  <?php include('header-chu-tau.php') ?>
  <div class="content"> 
    <div class="container">
      <ul style="border-bottom: 1px solid #777; padding-bottom: 20px">
        <li><a href="#"><span>Tau Athena 1</span></a> </li>
        <li><a href="#"><span>Tau Athena 2</span></a></li>
        <li><a href="#"><span>Tau Athena 3</span></a></li>
      </ul>
      <div class="show-center-content">
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
          </div>
          <table class="table-room-infor">
            <thead>
              <tr>
                <th class="th-room-infor">Tên phòng</th>
                <th class="th-room-infor">Mã phòng</th>
                <th class="th-room-infor">1/8/2017</th>
                <th class="th-room-infor">2/8/2017</th>
                <th class="th-room-infor">3/8/2017</th>
                <th class="th-room-infor">4/8/2017</th>
                <th class="th-room-infor">5/8/2017</th>
                <th class="th-room-infor">6/8/2017</th>
                <th class="th-room-infor">7/8/2017</th>
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
  </div>
  <!-- end content -->
  <?php include('footer.php'); ?>
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
</body>
</html>
