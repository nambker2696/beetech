<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Màn hình đăng nhập</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet"  href="css/man-hinh-goi-dich-vu.css">
  <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
  <script src="js/jquery-1.11.3.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
  <script src="dist/semantic.min.js"></script>
</head>
<body>
  <?php $page = 'price'; include('header.php') ?>
  <div class="container" style="margin-top: 40px;">
    <div>
      <div class='pricing pricing-palden'>
        <!-- // select 1 -->
        <div class='pricing-item'>
          <div class='pricing-deco'>
            <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
              <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A; c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
              <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
              <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
              <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A; c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
            </svg>
            <div class='pricing-price'><span class='pricing-currency'>$</span>29
              <span class='pricing-period'>/ mo</span>
            </div>
            <h3 class='pricing-title'>Member</h3>
          </div>
          <ul class='pricing-feature-list'>
            <li class='pricing-feature'>Kiểm tra tình trạng phòng</li>
            <li class='pricing-feature'>Chọn tàu</li>
          </ul>
          <form action="sau-khi-chon-goi-dich-vu.php" method="POST" accept-charset="utf-8" style="margin-top: 100px;">
            <button class='pricing-action'>Chọn mua</button>  
          </form>
        </div>

        <!-- select 2 -->
        <div class='pricing-item pricing__item--featured'>
          <div class='pricing-deco'>
            <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
              <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A; c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
              <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
              <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
              <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A; c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
            </svg>
            <div class='pricing-price'><span class='pricing-currency'>$</span>99
              <span class='pricing-period'>/ mo</span>
            </div>
            <h3 class='pricing-title'>Cruiser</h3>
          </div>
          <ul class='pricing-feature-list'>
            <li class='pricing-feature'>Đặt phòng, giữ phòng, hủy phòng</li>
            <li class='pricing-feature'>Kiểm tra tình trạng phòng</li>
            <li class='pricing-feature'>Tạo tài khoản</li>
            <li class='pricing-feature'>Xem tàu</li>
            <li class='pricing-feature'>Chọn tàu</li>
          </ul>
          <form action="sau-khi-chon-goi-dich-vu.php" method="POST" accept-charset="utf-8">
            <button class='pricing-action'>Chọn mua</button>  
          </form>

        </div>

        <!-- select 3 -->
        <div class='pricing-item'>
          <div class='pricing-deco'>
            <svg class='pricing-deco-img' enable-background='new 0 0 300 100' height='100px' id='Layer_1' preserveAspectRatio='none' version='1.1' viewBox='0 0 300 100' width='300px' x='0px' xml:space='preserve' xmlns:xlink='http://www.w3.org/1999/xlink' xmlns='http://www.w3.org/2000/svg' y='0px'>
              <path class='deco-layer deco-layer--1' d='M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729&#x000A; c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z' fill='#FFFFFF' opacity='0.6'></path>
              <path class='deco-layer deco-layer--2' d='M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729&#x000A;  c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z' fill='#FFFFFF' opacity='0.6'></path>
              <path class='deco-layer deco-layer--3' d='M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716&#x000A;  H42.401L43.415,98.342z' fill='#FFFFFF' opacity='0.7'></path>
              <path class='deco-layer deco-layer--4' d='M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428&#x000A; c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z' fill='#FFFFFF'></path>
            </svg>
            <div class='pricing-price'><span class='pricing-currency'>$</span>59
              <span class='pricing-period'>/ mo</span>
            </div>
            <h3 class='pricing-title'>Agency</h3>
          </div>
          <ul class='pricing-feature-list'>
            <li class='pricing-feature'>Đặt phòng, giữ phòng</li>
            <li class='pricing-feature'>Kiểm tra tình trạng phòng</li>
            <li class='pricing-feature'>Xem tàu</li>
            <li class='pricing-feature'>Chọn tàu</li>
          </ul>
          <form action="sau-khi-chon-goi-dich-vu.php" method="POST" accept-charset="utf-8">
            <button class='pricing-action'>Chọn mua</button>  
          </form> 
        </div>
      </div>
    </div>
    <section>
      <table class="table">
          <thead>
            <tr>
              <th class="th-price">MEMBER</th>
              <th class="th-price">CRUISER</th>
              <th class="th-price">AGENCY</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
            </tr>
            <tr>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
            </tr>
            <tr>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
            </tr>
            <tr>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
              <td class="td-price">Chỉ từ USD/ 3 tháng</td>
            </tr>
          </tbody>
        </table>
    </section>
  </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
