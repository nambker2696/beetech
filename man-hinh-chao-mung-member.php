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
	<?php include('header-logged.php') ?>
	<!-- form -->
	<div class="content">	
		<div class="container" style="padding-top: 60px;">
			<h1 class="" style="font-size: 5rem;color: #777;margin-bottom: 40px;margin-left: 160px;">Welcome to Bee</h1>

			<div class="col-md-6 col-sm-6 col-xs-12 personal-info col-md-offset-2" >
				<div class=""  style="position: relative; color: #777">
					<div>
						<h3 style="margin-bottom: 0;text-align: right;font-size: 19px;"><span>Beetect Cruise is a website to manager<br>
						room in your cruise.....</span>  </h3>
		    	</div>
	    	</div>
	    	<div style="text-align: right;margin-top: 20px;" >
		    	<a style="color: #FF6B3F;padding-bottom: 10px;border-bottom: 1px solid #FF6B3F;font-size: 17px;" href="man-hinh-hien-thi-chu-tau.php">Continue</a>
	    	</div>
		</div>
	</div>
	<!-- end Content -->
	<?php include('footer.php'); ?>


</body>
</html>