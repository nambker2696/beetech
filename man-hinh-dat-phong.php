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
		<h1 class="page-header">Đặt phòng</h1>
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12 personal-info col-md-offset-2" id="form-booking">
				<h3>Thông tin Booking</h3>
				<form class="form-horizontal" role="form" id="order-room">
					<div class="form-group">
						<label class="col-lg-3 control-label">Tên tàu:</label>
						<div class="col-lg-8">
							<input class="form-control" name="" value="" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Ngày khởi hành:</label>
						<div class="col-lg-3">
							<div class='input-group date' id='datetimepicker'>
								<input type='text' class="form-control" name="" value="Ngày khởi hành" id='input-date-search'/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<label class="col-lg-2 control-label">Ngày kết thúc:</label>
						<div class="col-lg-3">
							<div class='input-group date' id='datetimepicker'>
								<input type='text' class="form-control" name="" value="Ngày kết thúc" id='input-date-search'/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
					</div>
					<div class="form-group">

					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Loại:</label>
						<div class="col-lg-3">
							<input class="form-control" value="" type="text">
						</div>
						<label class="col-lg-2 control-label">Số lượng khách:</label>
						<div class="col-lg-3">
							<input class="form-control" type="number" name="" value="" placeholder="" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">Người lớn:</label>
						<div class="col-lg-3">
							<input class="form-control" type="number" name="" value="" placeholder="" >
						</div>
						<label class="col-lg-2 control-label">Trẻ em:</label>
						<div class="col-lg-3">
							<input class="form-control" type="number" name="" value="" placeholder="" >
						</div>
					</div>
					<div class="form-group">
						<label class="col-lg-3 control-label">TÌNH TRẠNG</label>
						<div class="col-lg-3">
							<input class="form-control" name="" value="" type="text">
						</div>
						<label class="col-md-2 control-label">Đang giữ:</label>
						<div class="col-md-3">
							<input class="form-control" name="" value="" type="text">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label">Người đặt:</label>
						<div class="col-md-8">
							<input class="form-control" name="" value="" type="text" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<input class="btn btn-primary" value="Save Changes" type="button">
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