<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Màn hình đăng nhập</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/home.css">
  <link rel="stylesheet" href="css/mobile/style.css">
	<!-- <link rel="stylesheet"  href="css/man-hinh-goi-dich-vu.css"> -->
	<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" />
	<script src="js/jquery-1.11.3.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="dist/semantic.min.js"></script>
</head>
<body>
	<?php $page = 'home'; include('header.php') ?>
	<div class="slider-warpper">
		<div class="flex__container flex--pikachu flex--active" data-slide="1">
			<div class="flex__item flex__item--left">

			</div>
			<div class="flex__item flex__item--right">
				<div class="flex__content">
					<p class="text--sub">New 7 Wonders of Nature</p>
					<h1 class="text--big">Halongbay</h1>
					<p class="text--normal">The bay features thousands of limestone karsts and isles in various shapes and sizes. Hạ Long Bay is a center of a larger zone which includes Bái Tử Long Bay to the northeast, and Cát Bà Island to the southwest. These larger zones share a similar geological, geographical, geomorphological, climate and cultural characters.</p>
				</div>
				<div class="slider__navi">
					<a href="#" class="slide-nav active" data-slide="1"><i class="fa fa-circle" style="color: #fff"></i></a>
					<a href="#" class="slide-nav" data-slide="2"><i class="fa fa-circle-thin" style="color: #fff"></i></a>
					<a href="#" class="slide-nav" data-slide="3"><i class="fa fa-circle-thin" style="color: #fff"></i></a>
					<a href="#" class="slide-nav" data-slide="4"><i class="fa fa-circle-thin" style="color: #fff"></i></a>
				</div>
			</div>
			<div class="flex__item flex__item--left">
			</div>
		</div>

	</div>
	<div class="container">
		<div class="search-center-content"  style="position: relative;">
			<form class="form-search">
				<div class="search-input-wrapper">
					<i class="fa fa-search" style="color: #777"></i>
					<input type="" name="" placeholder="Search something">
				</div>
				<div class="search-button"><span>Search</span></div>
			</form>
		</div>

	</div>
	<div class="content">
		<div class="container" id="solugen-company">
			<div class="row" >
				<div class="col-md-4 solugen">
					<img src="img/number1.jpg" alt="">
					Chúng tôi uy tín nhất
				</div>
				<div class="col-md-4 solugen">
					<img src="img/like.png" alt="">
					Được người dùng tin tưởng
				</div>
				<div class="col-md-4 solugen">
					<img src="img/24_7.png" alt="">
					Luôn luôn lắng nghe KH
				</div>
			</div>
		</div>
		<div class="container" id="content-vietnam">
			<!-- <div class="container"> -->
			<div class="scroll-to-marker-wrapper" onclick="smoothScroll(document.getElementById('second'))">
				<div class="half-line"></div>
				<div class="scroll-indicator-wrapper">
					<div class="scroll-indicator-inner">
						<i class="fa fa-chevron-down icon-down-scroll" aria-hidden="true"></i>
						<!-- <i class="fa fa-chevron-circle-down " aria-hidden="true"></i> -->
					</div>
				</div>
				<div class="half-line"></div>
			</div>


			<h1>Du lịch Việt Nam</h1>
			<a href="#" title="">View all</a>
			<hr class="core-section-underline" data-reactid="1686">
			<div class="row" id="second">
				<?php include('content-home.php') ?>
			</div>
		</div>
		<div class="container" id="content-city">
			<h1>Các thành phố đẹp</h1>
			<a href="#" title="">View all</a>
			<hr class="core-section-underline" data-reactid="1686">
			<?php include('city-content.php') ?>
		</div>
	</div>

	<?php include('footer.php') ?>

	<script type="text/javascript">
		var view = $("#contenter");
		var move = "200px";
		var sliderLimit = -400

		$("#right-button").click(function(){
		    
		    var currentPosition = parseInt(view.css("left"));
		    if (currentPosition >= sliderLimit) view.stop(false,true).animate({left:"-="+move},{ duration: 400})

		});

		$("#left-button").click(function(){

		    var currentPosition = parseInt(view.css("left"));
		    if (currentPosition < 0) view.stop(false,true).animate({left:"+="+move},{ duration: 400})

		});

		window.smoothScroll = function(target) {
			var scrollContainer = target;
		    do { //find scroll container
		    	scrollContainer = scrollContainer.parentNode;
		    	if (!scrollContainer) return;
		    	scrollContainer.scrollTop += 1;
		    } while (scrollContainer.scrollTop == 0);
		    
		    var targetY = 0;
		    do { //find the top of target relatively to the container
		    	if (target == scrollContainer) break;
		    	targetY += target.offsetTop;
		    } while (target = target.offsetParent);
		    
		    scroll = function(c, a, b, i) {
		    	i++; if (i > 30) return;
		    	c.scrollTop = a + (b - a) / 30 * i;
		    	setTimeout(function(){ scroll(c, a, b, i); }, 5);
		    }
		    // start scrolling
		    scroll(scrollContainer, scrollContainer.scrollTop, targetY, 0);
		}
		$('.slide-nav').on('click', function(e) {
			$('.fa-circle').removeClass('fa-circle').addClass('fa-circle-thin')
			$(this).children().removeClass('fa-circle-thin');
			$(this).children().addClass('fa-circle');
			var url = "url(img/bg_" + $(this).data('slide')  + ".jpg)";
			$('.flex__item--right').css("background-image", url);
			$('.flex__item--left').css("background-image", url);
		});
	</script>
</body>
</html>