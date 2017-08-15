<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Màn hình đăng nhập</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="css/mobile/style.css">


	<script src="js/jquery-1.11.3.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="dist/semantic.min.js"></script>
	<script src="http://bsdp-assets.blackcherry.us/1.3.0/bootstrap-datepicker.min.js"></script>
	<script src="js/sweetalert2.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/sweetalert2.min.css">
	<script type="text/javascript">
		$(function () {
			$(".date").datepicker();
		});
	</script>
	<script type="text/javascript">
		
	</script>
</head>
<body>
	<?php include('header-chu-tau.php') ?>
	<!-- form -->
	<div class="content">	
		<div class="container" style="padding-top: 60px;">
			<h1 class="page-header">Chào mừng bạn đến với Beetech</h1>
			<div class="col-md-6 col-sm-6 col-xs-12 personal-info col-md-offset-2" >
				<form action="man-hinh-hien-thi-chu-tau.php" method="POST" class="form-horizontal" role="form">
					<div class="form-group" id="hello-website">
						<label id="comment-admin">CHÚC MỪNG ANNIE ĐÃ KHỞI TẠO TÀI KHOẢN THÀNH CÔNG.<br>
							XIN VUI LÒNG ĐĂNG NHẬP ĐỂ TIẾP TỤC<br>
						</label>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-6">
							<input class="btn btn-primary" value="Đăng nhập" type="submit">
							<span></span>
						</div>
					</div>

				</form>
			</div>
		</div>
	</div>
	<!-- end Content -->
	<?php include('footer.php'); ?>


</body>
</html>