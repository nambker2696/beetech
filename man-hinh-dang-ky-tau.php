<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Màn hình đăng ký tàu</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/man-hinh-dang-ky-tau.css">
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

  <div class="container">
    <h1 class="page-header">Đăng ký tàu</h1>
    <div class="container">
      <div class="wrapper">
        <ul class="steps">
          <li class="li-step1 is-active">Bước 1: Thông tin cơ bản</li>
          <li class="li-step2">Bước 2: Thiết bị trong phòng</li>
          <li class="li-step3">Bước 3: Thêm hình ảnh</li>
        </ul>

        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 personal-info col-md-offset-3">
            <div class="step1">
              <h3>Thông tin tàu của bạn</h3>
              <form class="form-horizontal" role="form">
                <div class="form-group">
                  <input placeholder="Tên tàu  *" class="beet-form-input " name="" value="" type="text">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Loại tàu  *">
                    </div>
                    <div class="col-lg-6">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Số lượng  *">  
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Xếp hạng">
                    </div>
                    <div class="col-lg-6">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Tổng số phòng  *">  
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input placeholder="Địa chỉ ebsite của bạn" class="beet-form-input " name="" value="" type="text">
                </div>
                <div class="form-group">
                  <textarea class="beet-form-input" placeholder="Thông tin tàu"></textarea> 
                </div>
                <h3>Thông tin cá nhân liên hệ bạ</h3>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Tên liên hệ  *">
                    </div>
                    <div class="col-lg-6">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Số điện thoại  *">  
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Địa chỉ  *">
                    </div>
                    <div class="col-lg-6">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Email  *">  
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="step2">
              <div class="clearfix" style="margin-bottom: 15px">
                <h3 class="title-equipment-in-room">Những thiết bị có trong phòng</h3>
                <i class="fa fa-plus add-equipment" ></i>
              </div>
              <form class="form-horizontal form-add-equipment" role="form">
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 ">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Tên thiết bị  *">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Số lượng  *">  
                    </div>
                    <div  class="col-lg-1" style="padding: 0;">
                      <i class="fa fa-times-circle remove-equipment" style="font-size: 20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Tên thiết bị  *">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5 ">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Số lượng  *">  
                    </div>
                    <div  class="col-lg-1" style="padding: 0;">
                      <i class="fa fa-times-circle remove-equipment" style="font-size: 20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Tên thiết bị  *">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Số lượng  *">  
                    </div>
                    <div  class="col-lg-1" style="padding: 0;">
                      <i class="fa fa-times-circle remove-equipment" style="font-size: 20px;"></i>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-lg-6">
                      <input class="beet-form-input" name="" value="" type="text" placeholder="Tên thiết bị  *">
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-5">
                      <input class="beet-form-input " name="" value="" type="text" placeholder="Số lượng  *">  
                    </div>
                    <div  class="col-lg-1" style="padding: 0;">
                      <i class="fa fa-times-circle remove-equipment" style="font-size: 20px;"></i>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="step3">
              <div class="clearfix" style="margin-bottom: 15px">
                <h3 class="title-equipment-in-room">Thêm hình ảnh</h3>
              </div>
              <div class="add-images">
                <form>
                  <div class="form-add-cruise-img">
                    <i class="fa fa-plus add-img" ></i>
                  </div>
                  <input id="input_image" type="file" name="" style="position:fixed;top:-1000px;">

                </form>
              </div>
              <div class="upload-image-cruise">
                <a class="content" href="">
                  <img class="cruise-img" src="http://i2.mirror.co.uk/incoming/article3235220.ece/ALTERNATES/s615/celebrityresize.jpg">  
                </a>
                <a href="">
                  <img class="cruise-img" src="http://i2.mirror.co.uk/incoming/article3235220.ece/ALTERNATES/s615/celebrityresize.jpg">  
                </a>
              </div>  
            </div>
            <div style="margin-top: 20px;">
              <button class="btn-next-step"><span>Bước tiếp theo</span></button>
              <button class="btn-cancel-step"><span>Quay lại</span></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <!-- end form -->
  <?php include('footer.php'); ?>
  <script type="text/javascript">
    var $current_step = 1;
    $('.form-add-cruise-img').click(function(){
      $('#input_image').click();
    });
    $('.btn-next-step').click(function(){
      if ($current_step == 1) {
        $current_step = 2;
        $('.li-step1').removeClass('is-active');
        $('.li-step2').addClass('is-active');
        $('.step1').hide();
        $('.step2').show();
        $('.btn-next-step').text('Bước tiếp theo');
      }
      else if ($current_step == 2) {
        $current_step = 3;
        $('.li-step2').removeClass('is-active');
        $('.li-step3').addClass('is-active');
        $('.step2').hide();
        $('.step3').show();
        $('.btn-next-step').text('Hoàn tất');
      }
    });
    $('.btn-cancel-step').click(function(){
      if ($current_step == 2) {
        $current_step = 1;
        $('.li-step2').removeClass('is-active');
        $('.li-step1').addClass('is-active');
        $('.step2').hide();
        $('.step1').show();
      }
      else if ($current_step == 3) { 
        $current_step = 2;
        $('.li-step3').removeClass('is-active');
        $('.li-step2').addClass('is-active');
        $('.step3').hide();
        $('.step2').show();
        $('.btn-next-step').text('Bước tiếp theo');
      }
    });
    $('.add-equipment').click(function(){
      $('.form-add-equipment').append("<div class='form-group'><div class='row'><div class='col-lg-6'> <input class='beet-form-input' type='text' placeholder='Tên thiết bị  *'></div><div class='col-lg-5'><input class='beet-form-input' type='text' placeholder='Số lượng  *'></div><div  class='col-lg-1' style='padding: 0;'><i class='fa fa-times-circle remove-equipment' style='font-size: 20px;'></i></div></div></div>");
    });
    $(document).on('click', '.remove-equipment', function(){
      $(this).parents('.form-group').remove()
    });
  </script>
</body>
</html>
