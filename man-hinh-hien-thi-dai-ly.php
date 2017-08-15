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
  <?php include('header-dai-ly.php') ?>
  <div class="content"> 
    <div class="container">
      <h3>Chon tau xem quan ly</h3>
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
            <div class="booking-btn">

            <!-- // fom dan duong dat phong -->
              <form action="man-hinh-dat-phong.php" method="POST" accept-charset="utf-8">
                <button class="btn-booking-room" type="submit">
                  <span> Đặt phòng </span> 
                </button>
              </form>
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
                <th class="th-room-infor">1</th>
                <th class="th-room-infor">2</th>
                <th class="th-room-infor">3</th>
                <th class="th-room-infor">4</th>
                <th class="th-room-infor">5</th>
                <th class="th-room-infor">6</th>
                <th class="th-room-infor">7</th>
                <th class="th-room-infor">8</th>
                <th class="th-room-infor">9</th>
                <th class="th-room-infor">10</th>
                <th class="th-room-infor">11</th>
                <th class="th-room-infor">12</th>
                <th class="th-room-infor">13</th>
                <th class="th-room-infor">14</th>
                <th class="th-room-infor">15</th>
                <th class="th-room-infor">16</th>
                <th class="th-room-infor">17</th>
                <th class="th-room-infor">18</th>
                <th class="th-room-infor">19</th>
                <th class="th-room-infor">20</th>
                <th class="th-room-infor">21</th>
                <th class="th-room-infor">22</th>
                <th class="th-room-infor">23</th>
                <th class="th-room-infor">24</th>
                <th class="th-room-infor">25</th>
                <th class="th-room-infor">26</th>
                <th class="th-room-infor">27</th>
                <th class="th-room-infor">28</th>
                <th class="th-room-infor">29</th>
                <th class="th-room-infor">30</th>
              </tr>
            </thead>
            <tbody>
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
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
              </tr>
              <tr class="tr-room-infor">
                 <td class="td-room-infor td-room-name">Junio Tw in 1</td>
                <td class="td-room-infor td-room-code">A3</td>
                <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
              </tr>
              <tr class="tr-room-infor">
                <td class="td-room-infor td-room-name">Junio Tw in 1</td>
                <td class="td-room-infor td-room-code">A3</td>
                <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
              </tr>
              <tr class="tr-room-infor">
                 <td class="td-room-infor td-room-name">Junio Tw in 1</td>
                <td class="td-room-infor td-room-code">A3</td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
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
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                <td class="td-room-infor"></td>
                  <td class="td-keeping-room td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor"></td>
                <td class="td-booked-room-full-infor td-room-infor" style="border-left: 0;"></td>
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
