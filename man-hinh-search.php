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
	<link rel="stylesheet" href="http://bsdp-assets.blackcherry.us/1.3.0/datepicker.min.css">
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
	<!-- end form -->
	<div class="content">
		<div class="container" >
			<div id="search">
				<form action="man-hinh-chon-tau.php" method="POST" accept-charset="utf-8">
					<div class="ui column centered grid">
						<div class="ui col-md-2">
							<div class="ui input">
								<input type="text" placeholder="Nhập tên tàu muốn tìm...">
							</div>
						</div>
						<div class="ui col-md-2">
							<div class="ui input">
								<input type="text" placeholder="Nhập tên tours ...">&nbsp;
							</div>
						</div>
						<!-- <div class='col-md-2'> -->
						<div class="ui col-md-2">
							<div class='input-group date' id='datetimepicker1'>
								<input type='text' class="form-control" value="Ngày khởi hành" id='input-date-search'/>
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<!-- </div> -->

						<div class="ui col-md-2">
							<div class="ui input">
								<input type="text" placeholder="Số phòng muốn đặt ...">
							</div>
						</div>
						<div class="ui col-md-2">			
							<div class="ui checkbox" id="checkroom">
								<input type="checkbox" id="checkboxinput">
								<label>Kiểm tra còn phòng </label>
							</div>
						</div>
						<div class="ui col-md-2">
							<div id="button-search">
								<button class="ui button" type="submit" >Tìm kiếm</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>


<!-- 		<section id="show-search">
			<div class="ui container column">
				<h1 class="ui dividing header">Danh sách tàu</h1>
				<br>
				<table class="ui celled table">
					<thead>
						<tr>
							<th>Tên tàu</th>
							<th>Mã tàu</th>
							<th>Tháng</th>
							<th>Trạng thái</th>
							<th>Chi tiết</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr class="positive">
							<td>ATHENA CRUISE 1</td>
							<td>CD_001</td>
							<td>2017-8</td>
							<td><i class="icon checkmark"></i>Còn phòng</td>
							<td><a href="#" title="">Chi tiết</a></td>
							<td>Edit,Action,Non Active</td>
						</tr>
						<tr class="positive">
							<td>ATHENA CRUISE 2</td>
							<td>CD_001</td>
							<td>2017-8</td>
							<td><i class="icon checkmark"></i>Còn phòng</td>
							<td><a href="#" title="">Chi tiết</a></td>
							<td>Edit,Action,Non Active</td>
						</tr>
						<tr>
							<td>ATHENA CRUISE 3</td>
							<td>CD_001</td>
							<td>2017-8</td>
							<td class="negative"><i class="icon close"></i> Hết phòng</td>
							<td><a href="#" title="">Chi tiết</a></td>
							<td>Edit,Action,Non Active</td>
						</tr>
						<tr class="negative">
							<td>ATHENA CRUISE 4</td>
							<td>CD_001</td>
							<td>2017-8</td>
							<td><i class="icon close"></i>Hết phòng</td>
							<td><a href="#" title="">Chi tiết</a></td>
							<td>Edit,Action,Non Active</td>
						</tr>
					</tbody>
				</table>
			</div>
		</section> -->
	</div>
	<!-- end content -->
	<?php include('footer.php'); ?>

</body>
</html>