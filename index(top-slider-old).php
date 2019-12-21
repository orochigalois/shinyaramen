<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>hazi's works. hajime hakamada JAPANESE ARTIST of PHOTO &amp; FILM 眼映像</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="hazi's works. hajime hakamada JAPANESE ARTIST of PHOTO &amp; FILM 眼映像" />
	<meta name="keywords" content="hazi's works. hajime hakamada JAPANESE ARTIST of PHOTO &amp; FILM 眼映像" />
	<meta name="author" content="hazi's works. hajime hakamada JAPANESE ARTIST of PHOTO &amp; FILM 眼映像" />
	<link rel="shortcut icon" href="images/favicon.ico"/>
	<link rel="stylesheet" href="local.css?2" >
	<link rel="stylesheet" href="jquery.maximage.css" >
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/common-css.php'); ?>
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/common-js.php'); ?>
	<script>
		$(function(){

			var $maxImage = $('#maximage');

			//Max Image 2で使う画像をあらかじめ非表示にする
			$maxImage.hide();

			$maxImage.maximage({

			//次の画像が表示されるまでの間隔　ミリ秒単位
			cycleOptions: {timeout: 10000},

			//最初の画像が読み込まれた時
			onFirstImageLoaded: function(){

				//最初の画像をフェードインで表示させる
				$maxImage.fadeIn(1000);
			}
			});
		});
	</script>
</head>
<body>
	<?php include_once("analyticstracking.php") ?>
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/common-header.php'); ?>
<div id="maximage">
    <img class="bgmaximage" src="images/top-001.jpg" width="1600px" height="1068px" />
    <img class="bgmaximage" src="images/top-002.jpg" width="1600px" height="1068px" />
    <img class="bgmaximage" src="images/top-003.jpg" width="1600px" height="1068px" />
</div>
<!--
	<div id="wrapper">
		<div id="content">
			<div class="main-gallery">
		    <img src="images/top-001.jpg" alt="" class="gallery-cell">
		    <img src="images/top-002.jpg" alt="" class="gallery-cell">
				<img src="images/top-003.jpg" alt="" class="gallery-cell">
			</div>
		</div>
	</div>
-->
	<script>
	$('.main-gallery').flickity({
	    // 最初に表示させる画像（セル）を指定できます。0から始まります。
	    initialIndex: 1,
	    // 各画像（セル）の基準位置をしていできます。デフォルトはcenter。
	    cellAlign: 'center',
	    // trueでラッパー内に収まるようにスライドします。
	    contain: true,
	    // trueで無限スライダーになります。
	    wrapAround: true,
	    // 画像（セル）を読み込んだ後、再度、位置を調節します。デフォルトはtrue
	    imagesLoaded: true,
	    // falseにするとフリックできなくなります。
	    draggable: false,
	    // falseで矢印ボタンを非表示にします。
	    prevNextButtons: false,
	    // falseで下のドットを非表示にします。
	    pageDots: false,
	    // キーボードの左右で切り替えできるかどうかを指定します。
	    accessibility: true,
	    // 自動再生するかどうかを指定します。trueで3秒間隔で切り替わります。
	    autoPlay: 8000 //数字を指定するとその速さで切り替わります。
	});
	</script>
</body>
</html>
