<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Màn hình đăng nhập</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
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
	<?php include('header-member.php') ?>
	<!-- form -->
	<div class="container" style="padding-top: 60px;">
		<h1 class="page-header">Thông tin khách hàng</h1>
		<div class="row">
			<div class="col-md-8 col-sm-6 col-xs-12 personal-info col-md-offset-2" >
				<h3>Thông tin khách hàng</h3>
				<form action="man-hinh-search.php" method="POST" class="form-horizontal" role="form">
					<div class="form-group" id="info-customer">
						<label class="col-lg-3 control-label">Tên Khách hàng:</label>
						<div class="col-lg-3">
							<input class="form-control" value="" type="text" placeholder="Username">
						</div>
						<label class="col-lg-2 control-label">Email:</label>
						<div class="col-lg-3">
							<input class="form-control" value="" type="email" placeholder="Email">
						</div>
					</div>

					<h3>Cabin 1</h3>
					<h3>Khách hàng 1</h3>
					<div id="khachhangInfo">
						
						<div class="form-group">
							<label class="col-lg-3 control-label">Họ và tên: (CMT/HộChiếu)</label>
							<div class="col-lg-3">
								<input class="form-control" value="" type="text" placeholder="">
							</div>
							<label class="col-lg-2 control-label">Giới tính:</label>
							<div class="col-lg-3">
								<div class="ui-select">
									<select id="user_time_zone" class="form-control">
										<option value="0">Nam</option>
										<option value="1">Nữ</option>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Quốc tịch:</label>
							<div class="col-md-3">
								<div class="ui-select">
									<select id="user_time_zone" class="form-control">
										<option value="">-- select one --</option>
										<option value="afghan">Afghan</option>
										<option value="albanian">Albanian</option>
										<option value="algerian">Algerian</option>
										<option value="american">American</option>
										<option value="andorran">Andorran</option>
										<option value="angolan">Angolan</option>
										<option value="antiguans">Antiguans</option>
										<option value="argentinean">Argentinean</option>
										<option value="armenian">Armenian</option>
										<option value="australian">Australian</option>
										<option value="austrian">Austrian</option>
										<option value="azerbaijani">Azerbaijani</option>
										<option value="bahamian">Bahamian</option>
										<option value="bahraini">Bahraini</option>
										<option value="bangladeshi">Bangladeshi</option>
										<option value="barbadian">Barbadian</option>
										<option value="barbudans">Barbudans</option>
										<option value="batswana">Batswana</option>
										<option value="belarusian">Belarusian</option>
										<option value="belgian">Belgian</option>
										<option value="belizean">Belizean</option>
										<option value="beninese">Beninese</option>
										<option value="bhutanese">Bhutanese</option>
										<option value="bolivian">Bolivian</option>
										<option value="bosnian">Bosnian</option>
										<option value="brazilian">Brazilian</option>
										<option value="british">British</option>
										<option value="bruneian">Bruneian</option>
										<option value="bulgarian">Bulgarian</option>
										<option value="burkinabe">Burkinabe</option>
										<option value="burmese">Burmese</option>
										<option value="burundian">Burundian</option>
										<option value="cambodian">Cambodian</option>
										<option value="cameroonian">Cameroonian</option>
										<option value="canadian">Canadian</option>
										<option value="cape verdean">Cape Verdean</option>
										<option value="central african">Central African</option>
										<option value="chadian">Chadian</option>
										<option value="chilean">Chilean</option>
										<option value="chinese">Chinese</option>
										<option value="colombian">Colombian</option>
										<option value="comoran">Comoran</option>
										<option value="congolese">Congolese</option>
										<option value="costa rican">Costa Rican</option>
										<option value="croatian">Croatian</option>
										<option value="cuban">Cuban</option>
										<option value="cypriot">Cypriot</option>
										<option value="czech">Czech</option>
										<option value="danish">Danish</option>
										<option value="djibouti">Djibouti</option>
										<option value="dominican">Dominican</option>
										<option value="dutch">Dutch</option>
										<option value="east timorese">East Timorese</option>
										<option value="ecuadorean">Ecuadorean</option>
										<option value="egyptian">Egyptian</option>
										<option value="emirian">Emirian</option>
										<option value="equatorial guinean">Equatorial Guinean</option>
										<option value="eritrean">Eritrean</option>
										<option value="estonian">Estonian</option>
										<option value="ethiopian">Ethiopian</option>
										<option value="fijian">Fijian</option>
										<option value="filipino">Filipino</option>
										<option value="finnish">Finnish</option>
										<option value="french">French</option>
										<option value="gabonese">Gabonese</option>
										<option value="gambian">Gambian</option>
										<option value="georgian">Georgian</option>
										<option value="german">German</option>
										<option value="ghanaian">Ghanaian</option>
										<option value="greek">Greek</option>
										<option value="grenadian">Grenadian</option>
										<option value="guatemalan">Guatemalan</option>
										<option value="guinea-bissauan">Guinea-Bissauan</option>
										<option value="guinean">Guinean</option>
										<option value="guyanese">Guyanese</option>
										<option value="haitian">Haitian</option>
										<option value="herzegovinian">Herzegovinian</option>
										<option value="honduran">Honduran</option>
										<option value="hungarian">Hungarian</option>
										<option value="icelander">Icelander</option>
										<option value="indian">Indian</option>
										<option value="indonesian">Indonesian</option>
										<option value="iranian">Iranian</option>
										<option value="iraqi">Iraqi</option>
										<option value="irish">Irish</option>
										<option value="israeli">Israeli</option>
										<option value="italian">Italian</option>
										<option value="ivorian">Ivorian</option>
										<option value="jamaican">Jamaican</option>
										<option value="japanese">Japanese</option>
										<option value="jordanian">Jordanian</option>
										<option value="kazakhstani">Kazakhstani</option>
										<option value="kenyan">Kenyan</option>
										<option value="kittian and nevisian">Kittian and Nevisian</option>
										<option value="kuwaiti">Kuwaiti</option>
										<option value="kyrgyz">Kyrgyz</option>
										<option value="laotian">Laotian</option>
										<option value="latvian">Latvian</option>
										<option value="lebanese">Lebanese</option>
										<option value="liberian">Liberian</option>
										<option value="libyan">Libyan</option>
										<option value="liechtensteiner">Liechtensteiner</option>
										<option value="lithuanian">Lithuanian</option>
										<option value="luxembourger">Luxembourger</option>
										<option value="macedonian">Macedonian</option>
										<option value="malagasy">Malagasy</option>
										<option value="malawian">Malawian</option>
										<option value="malaysian">Malaysian</option>
										<option value="maldivan">Maldivan</option>
										<option value="malian">Malian</option>
										<option value="maltese">Maltese</option>
										<option value="marshallese">Marshallese</option>
										<option value="mauritanian">Mauritanian</option>
										<option value="mauritian">Mauritian</option>
										<option value="mexican">Mexican</option>
										<option value="micronesian">Micronesian</option>
										<option value="moldovan">Moldovan</option>
										<option value="monacan">Monacan</option>
										<option value="mongolian">Mongolian</option>
										<option value="moroccan">Moroccan</option>
										<option value="mosotho">Mosotho</option>
										<option value="motswana">Motswana</option>
										<option value="mozambican">Mozambican</option>
										<option value="namibian">Namibian</option>
										<option value="nauruan">Nauruan</option>
										<option value="nepalese">Nepalese</option>
										<option value="new zealander">New Zealander</option>
										<option value="ni-vanuatu">Ni-Vanuatu</option>
										<option value="nicaraguan">Nicaraguan</option>
										<option value="nigerien">Nigerien</option>
										<option value="north korean">North Korean</option>
										<option value="northern irish">Northern Irish</option>
										<option value="norwegian">Norwegian</option>
										<option value="omani">Omani</option>
										<option value="pakistani">Pakistani</option>
										<option value="palauan">Palauan</option>
										<option value="panamanian">Panamanian</option>
										<option value="papua new guinean">Papua New Guinean</option>
										<option value="paraguayan">Paraguayan</option>
										<option value="peruvian">Peruvian</option>
										<option value="polish">Polish</option>
										<option value="portuguese">Portuguese</option>
										<option value="qatari">Qatari</option>
										<option value="romanian">Romanian</option>
										<option value="russian">Russian</option>
										<option value="rwandan">Rwandan</option>
										<option value="saint lucian">Saint Lucian</option>
										<option value="salvadoran">Salvadoran</option>
										<option value="samoan">Samoan</option>
										<option value="san marinese">San Marinese</option>
										<option value="sao tomean">Sao Tomean</option>
										<option value="saudi">Saudi</option>
										<option value="scottish">Scottish</option>
										<option value="senegalese">Senegalese</option>
										<option value="serbian">Serbian</option>
										<option value="seychellois">Seychellois</option>
										<option value="sierra leonean">Sierra Leonean</option>
										<option value="singaporean">Singaporean</option>
										<option value="slovakian">Slovakian</option>
										<option value="slovenian">Slovenian</option>
										<option value="solomon islander">Solomon Islander</option>
										<option value="somali">Somali</option>
										<option value="south african">South African</option>
										<option value="south korean">South Korean</option>
										<option value="spanish">Spanish</option>
										<option value="sri lankan">Sri Lankan</option>
										<option value="sudanese">Sudanese</option>
										<option value="surinamer">Surinamer</option>
										<option value="swazi">Swazi</option>
										<option value="swedish">Swedish</option>
										<option value="swiss">Swiss</option>
										<option value="syrian">Syrian</option>
										<option value="taiwanese">Taiwanese</option>
										<option value="tajik">Tajik</option>
										<option value="tanzanian">Tanzanian</option>
										<option value="thai">Thai</option>
										<option value="togolese">Togolese</option>
										<option value="tongan">Tongan</option>
										<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
										<option value="tunisian">Tunisian</option>
										<option value="turkish">Turkish</option>
										<option value="tuvaluan">Tuvaluan</option>
										<option value="ugandan">Ugandan</option>
										<option value="ukrainian">Ukrainian</option>
										<option value="uruguayan">Uruguayan</option>
										<option value="uzbekistani">Uzbekistani</option>
										<option value="venezuelan">Venezuelan</option>
										<option value="vietnamese">Vietnamese</option>
										<option value="welsh">Welsh</option>
										<option value="yemenite">Yemenite</option>
										<option value="zambian">Zambian</option>
										<option value="zimbabwean">Zimbabwean</option>
									</select>
								</div>						
							</div>

							<label class="col-md-2 control-label">Ngày sinh:</label>
							<div class="col-md-3">
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="" value="Ngày sinh" id='input-date-search'/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Sổ hộ chiếu:</label>
							<div class="col-md-2">
								<div class="ui checkbox" id="checkpassport">
									<input type="checkbox" id="checkboxpassport">
									<label></label>
								</div>
							</div>
							<div class="col-md-3" id="autoUpdatePassportEntry" hidden>
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="" value="Entry date" id='input-date-search'/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
							<div class="col-md-3" id="autoUpdatePassportExit" hidden>
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="" value="Exit date" id='input-date-search'/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Visa:</label>
							<div class="col-md-1">
								<div class="ui checkbox" id="checkvisa">
									<input type="checkbox" id="checkboxvisa">
									<label></label>
								</div>
							</div>
							<div class="col-md-4" id="autoUpdateVisa" hidden>
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="" value="Expiry date" id='input-date-search'/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Other:<br> (Quốc tịch VN only)</label>
							<div class="col-lg-3">
								<input class="form-control" value="" type="text" placeholder="Số CMTND">
							</div>
							<div class="col-lg-3">
								<input class="form-control" value="" type="text" placeholder="Địa chỉ thường chú">
							</div>
						</div>
						<div class="form-group">
							<label class="col-lg-3 control-label">Điểm đón :</label>
							<div class="col-lg-4">
								<input class="form-control" value="" type="text" placeholder="Tên khách sạn/SĐT">
							</div>
							<div class="col-md-3">
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="" value="Thời gian đón" id='input-date-search'/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>	
						<div class="form-group">
							<label class="col-md-3 control-label">Điểm trả :</label>
							<div class="col-lg-4">
								<input class="form-control" value="" type="text" placeholder="Tên khách sạn/SĐT">
							</div>
							<div class="col-md-3">
								<div class='input-group date' id='datetimepicker'>
									<input type='text' class="form-control" name="" value="Thời gian trả" id='input-date-search'/>
									<span class="input-group-addon">
										<span class="glyphicon glyphicon-calendar"></span>
									</span>
								</div>
							</div>
						</div>	
						
						<div class="form-group">
							<label class="col-md-3 control-label"><h3>Dịch vụ khác</h3></label>
							<label class="col-md-3 control-label">Đón/tiễn sân bay, notes for sales</label>
						</div>
					</div>
					<br><br>

					<div class="form-group">
						<label class="col-md-3 control-label"></label>
						<div class="col-md-8">
							<a href="man-hinh-search.php"><input class="btn btn-primary" value="HOÀN THÀNH" type="button"></a>
							<span></span>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- end form -->

	<?php include('footer.php'); ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#checkboxpassport').change(function(){
				if(this.checked){
					$('#autoUpdatePassportEntry').fadeIn('slow');
					$('#autoUpdatePassportExit').fadeIn('slow');
				}
				else{
					$('#autoUpdatePassportEntry').fadeOut('slow');
					$('#autoUpdatePassportExit').fadeOut('slow');
				}
			});
		});
		$(document).ready(function(){
			$('#checkboxvisa').change(function(){
				if(this.checked)
					$('#autoUpdateVisa').fadeIn('slow');
				else
					$('#autoUpdateVisa').fadeOut('slow');
			});
		});
	</script>

</body>
</html>
