<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Shinya ramen Geelong Japanese ramen</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Shinya ramen Geelong Japanese ramen" />
	<meta name="keywords" content="Shinya ramen Geelong Japanese ramen" />
	<meta name="author" content="Shinya ramen Geelong Japanese ramen" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<link rel="stylesheet" href="local.css?58">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/dist/lity.css">
	<?php include( $_SERVER['DOCUMENT_ROOT'] . 'sample/common-css.php'); ?>
	<?php include( $_SERVER['DOCUMENT_ROOT'] . 'sample/common-js.php'); ?>
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.0.0/rellax.min.js"></script>
	 <script src="js/jquery.slicknav.js"></script>
	 <script src="js/lity.js"></script>
	 <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	 <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	 <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	 <script>
	 $(function(){
	    // #で始まるアンカーをクリックした場合に処理
	    $('a[href^=#]').click(function() {
	       // スクロールの速度
	       var speed = 400; // ミリ秒
	       // アンカーの値取得
	       var href= $(this).attr("href");
	       // 移動先を取得
	       var target = $(href == "#" || href == "" ? 'html' : href);
	       // 移動先を数値で取得
	       var position = target.offset().top;
	       // スムーススクロール
	       $('body,html').animate({scrollTop:position}, speed, 'swing');
	       return false;
	    });
	 });
	 </script>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/sample/common-header.php'); ?>
	<img src="images/shinyaramen_logo250.jpg" class="logo">
		<div id="content">
			<h1 id="tojumphome"></h1>
				<div id="top-video">
						<video src="video/backvideo-low.mp4?2" autoplay loop muted></video>
					</div>
					<section id="toptext">
						<p class="top-title">NOW OPEN</p>
						<p class="top-lead">something texting comes here</p>
					</section>
				<div id="content1"><h1 id="tojumpabout"></h1><img src="images/box1.jpg?2" class="rellax" data-rellax-speed="0"></p></div>

				<div id="inner-boxmenu">
					<div class="rellax"data-rellax-speed="0"><h1 id="tojumpmenu"></h1>
						<h1 class="text-menu">SHINYA MENU </h1>
						<a href="images/ramen-menu.jpg" data-lity data-lity-desc="Photo of a flower" class="ourmenu">▶︎ RAMEN MENU</a>
						<a href="images/bento-menu.jpg" data-lity data-lity-desc="Photo of a flower" class="ourmenu">▶︎ BENTO MENU</a>
						<a href="https://ordermate.online/shinyaramen/menu" data-lity data-lity-desc="Photo of a flower" class="ourmenu">▶︎ PRICE LIST</a>
					</div>
				</div>
			<div id="inner-boxlocation"><h1 id="tojumplocation"></h1>
				<h1 class="text-location">SHINYA RAMEN</h1><p class="location-lead"> 8A Gheringhap St Geelong VIC 3220 <br>TEL:(03) 5222 4162<br>MAIL:info@shinya.au</p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3137.758485529202!2d144.35703390126758!3d-38.145808460789894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8c45cbd3baaa61e2!2sShinya%20Ramen!5e0!3m2!1sja!2sau!4v1566611702796!5m2!1sja!2sau" id="location" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
			</div>

			<div id="inner-boxsns">
					<p class="text-sns">FOLLOW AND LIKE US</p>
					<div id="snsicon">
						<a href="#" class="btn-social-long-twitter"><i class="fab fa-twitter"></i> <span>Follow Me</span></a>
						<a href="https://www.facebook.com/shinyaramengeelong/" class="btn-social-long-facebook"><i class="fab fa-facebook"></i> <span>Follow Me</span></a>
						<a href="#" class="btn-social-long-insta"><i class="fab fa-instagram"></i> <span>Follow Me</span></a>
					</div>
					<div class=" col_3">
							<div class="rellax" data-rellax-speed="1"><img src="images/sample-box.jpg?1"></div>
							<div class="rellax" data-rellax-speed="1"><img src="images/sample-box.jpg?1"></div>
							<div class="rellax" data-rellax-speed="1"><img src="images/sample-box.jpg?1"></div>
							<div class="rellax" data-rellax-speed="1"><img src="images/sample-box.jpg?1"></div>
							<div class="rellax" data-rellax-speed="1"><img src="images/sample-box.jpg?1"></div>
							<div class="rellax" data-rellax-speed="1"><img src="images/sample-box.jpg?1"></div>
					</div>
			</div>

			<div id="inner-boxInquiry">
					<p class="text-sns">Inquiry</p>
			</div>
		</div>
		<?php include( $_SERVER['DOCUMENT_ROOT'] . '/sample/common-footer.php'); ?>
	<script>
	var rellax = new Rellax('.rellax', {
		center: true,
	});
	</script>

	<script>
	jQuery(function($){
		$('#gnav').slicknav();
	});
	</script>
	<script>
	var lightbox = lity('//www.youtube.com/watch?v=XSGBVzeBUbk');
// Bind as an event handler
$(document).on('click', '[data-lightbox]', lity);
</script>
</body>
</html>
