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
	<link rel="alternate" href="css/sweetalert.css">


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
	<?php include('header-logged.php') ?>
	<div class="content">	
		<div class="container">	
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Chọn gói dịch vụ thành công</a></li>
				<li class="active">Tạo danh sách mới</li>
			</ol>
			<hr id="hr-breadcrumb">
		</div>
		<div class="container" style="padding-top: 60px;">
			<h1 class="page-header" >Tạo danh sách mới</h1>
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12 personal-info col-md-offset-2" id="form-create-new-service">
					<h3>Tạo danh sách mới</h3>

					<form action="man-hinh-kich-hoat-qua-mail.php" method="POST" class="form-horizontal" role="form" id="order-room">
						<div class="form-group">
							<label class="col-md-4 control-label">Lựa chọn tàu:</label>
							<div class="col-md-4">
								<div class="ui-select">
									<select id="user_time_zone" class="form-control">
										<option value="">-- select one --</option>
										<option value="1">Athina Curise</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Hiển thị tên mong muốn:</label>
							<div class="col-md-4">
								<input class="form-control" value="" type="text" placeholder="Tên hiển thị">
							</div>
						</div>
						<div class="form-group">

						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Địa chỉ email:</label>
							<div class="col-md-4">
								<input class="form-control" value="" type="email" placeholder="Email">
							</div>
							
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Số điện thoại:</label>
							<div class="col-md-4">
								<input class="form-control" type="number" name="" value="" placeholder="Phone" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Nhập mã kí tự:</label>
							<div class="col-md-4">
								<input class="form-control" type="number" name="" value="" placeholder="Number code" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label"></label>
							<div class="col-md-8">
								<input class="btn btn-primary" value="Save Changes" type="submit">
								<span></span>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="row" id="question-create">
				<h3 class="beetech-selected">Tại sao lại chọn Beetech</h3>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
			</div>
			<div class="row" id="question-create">
				<h3 class="beetech-selected">Cách sử dụng</h3>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
			</div>
			<div class="row" id="question-create">
				<h3 class="beetech-selected">Ý kiến khách hàng</h3>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="ui icon input" id="seach-bar">
						<input type="text" placeholder="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Content -->
	<?php include('footer.php'); ?>

</body>
</html>