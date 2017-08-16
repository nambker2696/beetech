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
  <?php $page = 'room-manage'; include('header-chu-tau.php') ?>
  <div class="content"> 
    <div class="container" style="width: 1250px">
      <div class="header-boat-infor clearfix" style="margin-top: 50px;">
        <h2 style="color: #777;">Recent Cruise</h2>
        <div class="recent-cruise">
          <ul style="display: inline-block;display: -webkit-inline-box;margin: 0;padding: 0;">
            <li style="list-style-type: none;padding: 10px 20px 10px 0px;border-bottom: 2px solid #FF6B3F;;text-align: left;margin-right: 8px"><a href="#" style="color: #777;"><span>Tau Athena 1</span></a> </li>
            <li style="list-style-type: none;padding: 10px 20px 10px 0px;text-align: left;"><a href="#"  style="color: #777;"><span>Tau Athena 2</span></a></li>
            <li style="list-style-type: none;padding: 10px 20px 10px 0px;text-align: left;"><a href="#"  style="color: #777;"><span>Tau Athena 3</span></a></li>
          </ul>
          <div class="search-cruise" style="float: right; padding: 10px;">
            <input type="" name="" style="border: 0; border-bottom: 2px solid #777; outline: none;padding: 5px" placeholder="Search cruise">
          </div>
        </div>
        
      </div>
      <div class="clearfix" style="margin-bottom: 20px;float: left;margin-right: 20px">
        <div style="">
          <ul class="group-action-button" style="margin: 0;padding: 0;display: grid;">
            <h3 style="color: #777">Lựa chọn tác vụ</h3>
            <a href="man-hinh-dat-phong.php">
              <button class="btn-action" style=""><span>Đặt phòng</span></button>
            </a>
            <button class="btn-action"><span>Gĩư phòng phòng</span></button>
          </ul>  
        </div>
        <div style="margin-right: 0;width: 220px;margin-top: 20px">
          <h3 style="color: #777">Lịch<i class="fa fa-chevron-down" style="float: right;"></i>
          </h3>
          <div class="calendar" style="float: right;margin-right: 0;">
          </div>
        </div>
      </div>
      <div style="float: right; width: calc(100% - 240px)">
        <div class="month-pagition clearfix">
          <a href="" style="color: #777; float: left; padding: 10px 0;border-bottom: 2px solid #777;margin-bottom: 14px;"><span> <i class="fa fa-arrow-left" style="margin-right: 5px;"></i> Prev Month&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span></a>
          <a href="" style="color: #777;float: right; padding: 10px 0;border-bottom: 2px solid #777;margin-bottom: 14px;"><span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspNext Month <i class="fa fa-arrow-right" style="margin-left: 5px;"></i></span></a>
        </div>
        <div class="show-center-content">
          <div class="center-content" style="width: 100%">
             <table class="table-room-infor">
              <thead>
                <tr>
                  <th class="th-room-infor">Tên</th>
                  <th class="th-room-infor">Mã</th>
                  <th class="th-room-infor">01</th>
                  <th class="th-room-infor">02</th>
                  <th class="th-room-infor">03</th>
                  <th class="th-room-infor">04</th>
                  <th class="th-room-infor">05</th>
                  <th class="th-room-infor">06</th>
                  <th class="th-room-infor">07</th>
                  <th class="th-room-infor">08</th>
                  <th class="th-room-infor">09</th>
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
