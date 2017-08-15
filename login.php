<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Màn hình gía</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header.css">
  <link rel="stylesheet" href="css/login.css">
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
	<?php $page = 'login'; include('header.php') ?>
	<!-- form -->
	<div class="content">
		<div class="container" id="form-login">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<div class="panel with-nav-tabs ">
						<!-- form login -->
						<div class="panel-body">
							<div class="tab-content">
								<form action="chon-goi-dich-vu.php" method="POST" accept-charset="utf-8">
									
									<div  class="tab-pane fade in active register">
										<div class="container-fluid">
											<div class="row">
												<h1 class="beet-signin"> <strong> Sign In  </strong></h1>
                        <div class="beet-form-group">
                          <label>Email</label>
                          <input type="text" name="uname" class="beet-input-login">  
                        </div>
                        <div class="beet-form-group">
                          <label class="beet-label">Password</label>
                          <input class="beet-input-login" type="password" name="pass">
                        </div>
                        <div class="beet-form-group">
                          <a href="#forgot" data-toggle="modal"> Forgot Password? </a>
                          <button type="submit" onclick="myFunctionLogin()" class="beet-btn-login"> SIGN IN </button>
                        </div>
											</div>
										</div> 
									</div>
								</form>
								<!-- // form register -->
							</div>
						</div>
					</div>
				</div>
			</div>
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
