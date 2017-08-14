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
	<?php include('header.php') ?>
	<!-- form -->
	<div class="content">
		<?php include('breadcrumb.php') ?>

		<div class="container" id="form-login">
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel with-nav-tabs panel-info">
						<div class="panel-heading">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#login" data-toggle="tab"> Login </a></li>
								<li><a href="#signup" data-toggle="tab"> Signup </a></li>
							</ul>
						</div>
						<!-- form login -->
						<div class="panel-body">
							<div class="tab-content">
								<div id="login" class="tab-pane fade in active register">
									<div class="container-fluid">
										<div class="row">
											<h2 class="text-center" style="color: #5cb85c;"> <strong> Login  </strong></h2><hr />

											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-12">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon">
																<span class="glyphicon glyphicon-user"></span>
															</div>
															<input type="text" placeholder="User Name" name="uname" class="form-control">
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-12">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon">
																<span class="glyphicon glyphicon-lock"></span>
															</div>

															<input type="password" placeholder="Password" name="pass" class="form-control">
														</div>
													</div>
												</div>
											</div>

											<div class="col-xs-12 col-sm-12 col-md-12">
												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<input type="checkbox" name="check" checked> Remember Me
													</div>
												</div>

												<div class="col-xs-6 col-sm-6 col-md-6">
													<div class="form-group">
														<a href="#forgot" data-toggle="modal"> Forgot Password? </a>
													</div>
												</div>
											</div>
											<hr />
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-4">
													<button type="submit" onclick="myFunctionLogin()" class="btn btn-success btn-block btn-lg"> Login </button>
												</div>
											</div>

										</div>
									</div> 
								</div>

								<!-- // form register -->
								<div id="signup" class="tab-pane fade">
									<div class="container-fluid">
										<div class="row">
											<h2 class="text-center" style="color: #f0ad4e;"> <Strong> Register </Strong></h2> <hr />
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-12">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon iga1">
																<span class="glyphicon glyphicon-user"></span>
															</div>
															<input type="text" class="form-control" placeholder="Enter User Name" name="name">
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-12">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon iga1">
																<span class="glyphicon glyphicon-envelope"></span>
															</div>
															<input type="email" class="form-control" placeholder="Enter E-Mail" name="mail">
														</div>
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-12">
													<div class="form-group">
														<div class="input-group">
															<div class="input-group-addon iga1">
																<span class="glyphicon glyphicon-lock"></span>
															</div>
															<input type="password" class="form-control" placeholder="Enter Password" name="pass">
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="row">
												<div class="col-xs-12 col-sm-12 col-md-4">
													<div class="form-group">
														<button type="submit" class="btn btn-lg btn-block btn-warning"> Register</button>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="modal fade" id="forgot">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss='modal' aria-hidden="true"><span class="glyphicon glyphicon-remove"></span></button>
						<h4 class="modal-title" style="font-size: 32px; padding: 12px;"> Recover Your Password </h4>
					</div>

					<div class="modal-body">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon iga2">
												<span class="glyphicon glyphicon-envelope"></span>
											</div>
											<input type="email" class="form-control" placeholder="Enter Your E-Mail ID" name="email">
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<div class="input-group-addon iga2">
												<span class="glyphicon glyphicon-lock"></span>
											</div>
											<input type="password" class="form-control" placeholder="Enter Your New Password" name="newpwd">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="modal-footer">
						<div class="form-group">
							<button type="submit" class="btn btn-lg btn-info"> Save <span class="glyphicon glyphicon-saved"></span></button>

							<button type="button" data-dismiss="modal" class="btn btn-lg btn-default"> Cancel <span class="glyphicon glyphicon-remove"></span></button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<h2>Các màn hình hoàn thành</h2>
			<ul>
				<li>
					<a href="man-hinh-dat-phong.php" title="">Màn hình đặt phòng</a>		
				</li>
				<li>
					<a href="man-hinh-thong-tin-khach-hang.php">Màn hình thông tin khách hàng khi đặt phòng</a>

				</li>
				<li>
					<a href="man-hinh-search.php" title="">Màn hình tìm kiếm tàu</a>

				</li>
				<li>
					<a href="man-hinh-hien-thi.php" title="">Màn hình hiển thị</a>

				</li>
				<li>
					<a href="man-hinh-dang-ki-tau.php" title="">Màn hình đăng kí tàu(Nam làm)</a>

				</li>
				<li>
					<a href="man-hinh-dang-ky-tau.php" title="">Màn hình đăng kí tàu(Toàn Làm)</a>
				</li>
				<li>
					<a href="man-hinh-chon-tau.php">Man hinh chon tau</a>
				</li>
				<li><a href="man-hinh-chao-mung.php" title="">Man hinh chao mung</a></li>
				<li><a href="man-hinh-kich-hoat-qua-mail.php" title="">Màn hình kích hoạt mail</a></li>
			</ul>
		</div>
	</div>
	

	<!-- end form -->
	<?php include('footer.php'); ?>
	<script>
	function myFunctionLogin(){
		swal(
			'You login success!',
			'Wellcome to our website!',
			'success'
		)
	}
	</script>
</body>
</html>
