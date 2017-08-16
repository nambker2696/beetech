<header id="header" class="" style="    -webkit-box-shadow: 0 1px 10px 0 rgba(0,0,0,.1);">
  <div class="container">
  <!-- Static navbar -->
  <nav class="navbar " style="min-height: 50px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="float: left;background-color: none">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav nav-bar-custom">
          <li>
            <div class="logo" id="logo-beetech">
              <a href="home.php"><img class="logo-beetech" src="img/logo_beetech.png"> </a>
            </div>
          </li>
          <li class="dropdown nav-bar-item-5">
            <a href="#" class="dropdown-toggle">Sản phẩm</a>
          </li>
          <li class="nav-bar-item-5 <?php echo ($page == 'price') ? "is-active" : ""; ?>" ><a href="chon-goi-dich-vu.php">Giá</a></li>
          <li class="nav-bar-item-5"><a href="#">Bản dùng thử</a></li>
          <li class="nav-bar-item-5 <?php echo ($page == 'faq') ? "is-active" : ""; ?>"><a href="man-hinh-cau-hoi-thuong-gap.php">Câu hỏi thường gặp</a></li>
          <li class="nav-bar-item-5 <?php echo ($page == 'feedback') ? "is-active" : ""; ?>"><a href="man-hinh-y-kien-khach-hang.php">Ý kiến khách hàng</a></li>
          <li class="dropdown nav-bar-item-avatar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img class="icon-avatar" src="https://avatars0.githubusercontent.com/u/25922489?v=4&s=460">
            </a>
            <ul class="dropdown-menu dropdown-menu-right" style="border: 0">
              <li><a href="#" style="padding: 10px 15px!important;">Thông tin</a></li>
              <li><a href="#" style="padding: 10px 15px!important;">Chỉnh sửa</a></li>
              <li><a href="#" style="padding: 10px 15px!important;">Thoát</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
</div> <!-- /container -->
</header><!-- /header -->
