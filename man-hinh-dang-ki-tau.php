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
		<h1 class="page-header">Đăng kí tàu</h1>
		<div class="row">
			<!-- left column -->
			<div class="col-md-4 col-sm-6 col-xs-12">
				<div class="text-center">
					<img src="img/Athena Cruise overview.jpg" class="avatar img-circle img-thumbnail" alt="avatar">
					<h6>Upload a different photo...</h6>
					<input type="file" class="text-center center-block well well-sm">
				</div>
			</div>
			<!-- edit form column -->
			<div class="col-md-8 col-sm-6 col-xs-12 personal-info">
				<h3>Thông tin tàu</h3>
				<form class="form-horizontal" role="form">
					<div class="form-group">
						<label class="col-lg-3 control-label">Tên tàu:</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="" type="text">
						</div>
						<label class="col-lg-2 control-label">Số lượng tàu:</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="" type="number">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Loại tàu:</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="" type="text">
						</div>
						<div class="col-lg-3">
							<input class="form-control" name="" value="" type="text" placeholder="Xếp hạng">
						</div>
						<div class="col-lg-2">
							<input class="form-control" name="" value="" type="number" placeholder="Số phòng">
						</div>

					</div>
					<h3>Thông tin người quản lý</h3>
					<div class="form-group">
						<label class="col-lg-3 control-label">Tên liên hệ :</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="" type="text">
						</div>
						<label class="col-lg-2 control-label">Số ĐT :</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Địa chỉ:</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="Địa chỉ" type="text">
						</div>
						<label class="col-lg-2 control-label">Mail:</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="Mail" type="mail">
						</div>
					</div>
					<h3>Thông tin người nhập</h3>
					<div class="form-group">
						<label class="col-lg-3 control-label">SĐT của bạn:</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="Số điện thoại" type="text">
						</div>
					</div>

					
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<input class="btn btn-primary" value="Gửi" type="button">
							<span></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>


	<!-- end form -->

	<?php include('footer.php'); ?>

</body>
</html>