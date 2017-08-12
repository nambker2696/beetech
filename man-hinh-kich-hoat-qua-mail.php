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
	<link rel="stylesheet" href="css/man-hinh-xac-nhan-mail.css">


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
	<!-- form -->
	<!-- <div class="content">	 -->
	<!-- <?php include('breadcrumb.php') ?> -->
	<div class="container">	
		<ol class="breadcrumb">
			<li><a href="#">Home</a></li>
			<li><a href="#">Kích hoạt tài khoản</a></li>
			<li class="active">Xác nhận</li>
		</ol>
	</div>
	<div class="container">
		<h2>Chào mừng bạn đã trở lại Nam !</h2>
		<h3>Làm ơn hãy nhập lại mật khẩu và sau đó bấm vào nút xác nhận để hoàn thành đăng ký tài khoản!</h3>
		<div class="panel">
			<div class="panel-body">

				<form>
					<div class="form-group">
						<input type="password" class="form-control" id="password" placeholder="Password">
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-md-6">
								<div class="checkbox checkbox-warning checkbox-circle">
									<input id="checkbox8" type="checkbox" checked>
									<label for="checkbox8"> Remember Me </label>
								</div>
							</div>
							<div class="col-md-6"> <a href="#">Forgot your password?</a> </div>
						</div>
					</div>
					<button type="submit" class="btn btn-default btn-lg btn-block" onclick="myFunctionSuccess()">Xác nhận</button>
				</form>
			</div>
		</div>
	</div>
	
	<!-- end Content -->
	<?php include('footer.php'); ?>

	<script>
		function myFunctionSuccess(){
			swal(
				'You create success!',
				'Wellcome to our website!',
				'success'
				)
		}
	</script>
</body>
</html>