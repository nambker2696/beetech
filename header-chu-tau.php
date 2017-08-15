<header id="header" class="">
  <div class="container">
  <!-- Static navbar -->
  <nav class="navbar" style="min-height: 50px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="float: left;">
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
              <img class="logo-beetech" src="img/logo_beetech.png"> 
            </div>
          </li>
          <li class="nav-bar-item-5 <?php echo ($page == 'list-cruise') ? "is-active" : ""; ?>"><a href="man-hinh-chon-tau.php">Danh sách tàu</a></li>
          <li class="nav-bar-item-5 <?php echo ($page == 'recent-room') ? "is-active" : ""; ?>"><a href="">Các phòng đặt gần đây</a></li>
          <li class="nav-bar-item-5" ><a  href="#">Booking của bạn</a></li>
          <li class="nav-bar-item-5 <?php echo ($page == 'room-manage') ? "is-active" : ""; ?>"><a href="man-hinh-hien-thi-dai-ly.php">Quản lý phòng</a></li>
          <li class="dropdown nav-bar-item-avatar">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img class="icon-avatar" src="https://avatars0.githubusercontent.com/u/25922489?v=4&s=460">
            </a>
            <ul class="dropdown-menu">
              <li><a href="#">Thông tin</a></li>
              <li><a href="#">Chỉnh sửa</a></li>
              <li><a href="#">Thoát</a></li>
            </ul>
          </li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
</div> <!-- /container -->
</header><!-- /header -->
