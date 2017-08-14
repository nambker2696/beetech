<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Màn hình đăng ký tàu</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/man-hinh-chon-tau.css">
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/mobile/style.css">
  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="dist/semantic.min.js"></script>
  <script src="http://bsdp-assets.blackcherry.us/1.3.0/bootstrap-datepicker.min.js"></script>
  <script type="text/javascript">
    $(function () {
      $(".date").datepicker();
    });
  </script>
</head>
<body>
  <?php include('header-logged.php') ?>

  <!-- form -->

  <div class="container" style="padding-top: 60px;">
    <h1 class="page-header">Lựa chọn tàu</h1>
    <div class="row">
      <div class="col-md-4" style="margin-bottom: 15px;">
        <h3>Danh sách tàu còn trống phòng</h3>
        <h3 id="cruise_1" class="h3-list-boat h3-list-boat-active ">
          <span>ahihi Cruise 1</span>
        </h3>
        <h3 id="cruise_2" class="h3-list-boat">
          <span>ahihi Cruise 2</span>
        </h3>
      </div>
      <script type="text/javascript">
        $('#cruise_1').click(function(){
          if ($(this).hasClass('h3-list-boat-active') == false) {
            $(this).addClass('h3-list-boat-active');
            $('#cruise_2').removeClass('h3-list-boat-active')
          }
        });
        $('#cruise_2').click(function(){
          if ($(this).hasClass('h3-list-boat-active') == false) {
            $(this).addClass('h3-list-boat-active');
            $('#cruise_1').removeClass('h3-list-boat-active')
          }
        });
      </script>
      <div class="col-md-8">
        <div class="list-room-empty clearfix">
          <div class="cruise-image-left">
            <a class="cruise-image-link" href="">
              <img class="img-cruise" src="http://i2.mirror.co.uk/incoming/article3235220.ece/ALTERNATES/s615/celebrityresize.jpg">  
            </a>
          </div>  
          <div class="cruise-information">
            <h3><span>Ahihi Cruise 2 ngày 1 đêm</span></h3>
            <span class="span-shot-describe">
              <span>Lịch trình tham quan: Bái Tử Long - Thiên Cảnh Sơn - Vũng Viếng</span>
            </span>
          </div>
          <div class="more-infor">
          <form action="man-hinh-chi-tiet-tau.php" method="POST " accept-charset="utf-8">
             <button class="btn-cruise-see-more-infor">
              <span>Xem thêm</span>
            </button>
          </form>
        </div>
      </div>
      <div class="list-room-empty clearfix">
        <div class="cruise-image-left">
          <a class="cruise-image-link" href="">
            <img class="img-cruise" src="http://www.leapsandboundstravel.com/images/ocean-cruise.jpg">  
          </a>
        </div>  
        <div class="cruise-information">
          <h3><span>Ahihi Cruise 2 ngày 1 đêm</span></h3>
          <span class="span-shot-describe">
            <span>Lịch trình tham quan: Bái Tử Long - Thiên Cảnh Sơn - Vũng Viếng</span>
          </span>
        </div>
        <div class="more-infor">
          <button class="btn-cruise-see-more-infor">
            <span>Xem thêm</span>
          </button>
        </div>
      </div> 
      <div class="list-room-empty clearfix">
        <div class="cruise-image-left">
          <a class="cruise-image-link" href="">
            <img class="img-cruise" src="http://i2.mirror.co.uk/incoming/article3235220.ece/ALTERNATES/s615/celebrityresize.jpg">  
          </a>
        </div>  
        <div class="cruise-information">
          <h3><span>Ahihi Cruise 2 ngày 1 đêm</span></h3>
          <span class="span-shot-describe">
            <span>Lịch trình tham quan: Bái Tử Long - Thiên Cảnh Sơn - Vũng Viếng</span>
          </span>
        </div>
        <div class="more-infor">
          <button class="btn-cruise-see-more-infor">
            <span>Xem thêm</span>
          </button>
        </div>
      </div> 
      <div class="list-room-empty clearfix">
        <div class="cruise-image-left">
          <a class="cruise-image-link" href="">
            <img class="img-cruise" src="http://i2.mirror.co.uk/incoming/article3235220.ece/ALTERNATES/s615/celebrityresize.jpg">  
          </a>
        </div>  
        <div class="cruise-information">
          <h3><span>Ahihi Cruise 2 ngày 1 đêm</span></h3>
          <span class="span-shot-describe">
            <span>Lịch trình tham quan: Bái Tử Long - Thiên Cảnh Sơn - Vũng Viếng</span>
          </span>
        </div>
        <div class="more-infor">
          <button class="btn-cruise-see-more-infor">
            <span>Xem thêm</span>
          </button>
        </div>
      </div> 
    </div>

  </div>

</div>
<!-- end form -->

<?php include('footer.php'); ?>

</body>
</html>
