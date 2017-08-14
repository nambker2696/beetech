<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Màn hình đăng nhập</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/mobile/style.css">
	

	<script src="js/jquery-1.11.3.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="dist/semantic.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">


</head>
<body>
	<?php include('header-logged.php') ?>
	<!-- form -->
	<div class="content">
		<div id="slider-bar">
			<?php include('slider.php') ?>
		</div>
		<div class="container" id="solugen-company">
			<div class="row" >
				<div class="col-md-4 solugen">
					<img src="img/number1.jpg" alt="">
					Chúng tôi uy tín nhất
				</div>
				<div class="col-md-4 solugen">
					<img src="img/like.png" alt="">
					Được người dùng tin tưởng
				</div>
				<div class="col-md-4 solugen">
					<img src="img/24_7.png" alt="">
					Luôn luôn lắng nghe KH
				</div>
			</div>
		</div>
		<hr>
		<div class="container">
			<h1>Du lịch Việt Nam</h1>
			<div class="row">
				<div class="col-md-3 travel-image">
					<img src="img/1.jpg" alt="">

				</div>
				<div class="col-md-3 travel-image">
					<img src="img/1.jpg" alt="">
				</div>
				<div class="col-md-3 travel-image">
					<img src="img/1.jpg" alt="">
				</div>
				<div class="col-md-3 travel-image">
					<img src="img/1.jpg" alt="">
					
				</div>
			</div>
		</div>
	</div>
	<?php include('footer.php') ?>
</body>
</html>


