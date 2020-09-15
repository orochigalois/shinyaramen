<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">	
	<meta name="description" content="Shinya ramen Geelong Japanese ramen" />
	<meta name="keywords" content="Shinya ramen Geelong Japanese ramen" />
	<meta name="author" content="Shinya ramen Geelong Japanese ramen" />	
	<link rel="profile" href="http://gmpg.org/xfn/11">


	<link rel="stylesheet" href="css/local.css">
	<link rel="stylesheet" href="css/slicknav.css">
	<link rel="stylesheet" href="css/lity.css">
	<?php include($_SERVER['DOCUMENT_ROOT'] . 'sample/common-css.php'); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . 'sample/common-js.php'); ?>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/rellax/1.0.0/rellax.min.js"></script>
	<script src="js/jquery.slicknav.js"></script>
	<script src="js/lity.js"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<script>
		$(function() {
			// #で始まるアンカーをクリックした場合に処理
			// $('a[href^=#]').click(function() {
			// 	// スクロールの速度
			// 	var speed = 400; // ミリ秒
			// 	// アンカーの値取得
			// 	var href = $(this).attr("href");
			// 	// 移動先を取得
			// 	var target = $(href == "#" || href == "" ? 'html' : href);
			// 	// 移動先を数値で取得
			// 	var position = target.offset().top;
			// 	// スムーススクロール
			// 	$('body,html').animate({
			// 		scrollTop: position
			// 	}, speed, 'swing');
			// 	return false;
			// });


			$('a.toggle_submenu').click(function(e) {
				e.preventDefault();
				$('.submenu').show();
				$('.mainmenu').hide();
			});
			$('a.toggle_back').click(function(e) {
				e.preventDefault();
				$('.submenu').hide();
				$('.mainmenu').show();
			});

			// $('a.toggle_submenu').hover(function(){
			// 		$( '.submenu' ).show(); 
			// 		$( '.mainmenu' ).hide(); 
			// 	}, function(){
			// 		$( '.submenu' ).hide(); 
			// 		$( '.mainmenu' ).hide(); 
			// });



		});
	</script>


	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>

	<title><?php wp_title(); ?></title>
	
	<?php wp_head(); ?>

	<script type="text/javascript">
		var _ajaxurl = '<?= admin_url("admin-ajax.php"); ?>';
		var _pageid = '<?= get_the_ID(); ?>';
		var _imagedir = '<?php lp_image_dir(); ?>';
	</script>
	 
</head>
<body <?php body_class(); ?>>
<?php include_once("analyticstracking.php") ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/sample/common-header.php'); ?>
	<img src="images/shinyaramen_logo250.jpg" class="logo">
	<div id="content">