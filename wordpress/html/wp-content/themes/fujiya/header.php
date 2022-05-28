<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> -->

	<!--css-->
	<link href="<?= cssr(); ?>/common.css" rel="stylesheet" type="text/css">
	<!--js-->
	<script type="text/javascript" src="<?= jsr(); ?>/jquery.js"></script>
	<script type="text/javascript" src="<?= jsr(); ?>/common.js"></script>

	<!--bxslider-->
	<link href="<?= jsr(); ?>/jquery.bxslider.css" rel="stylesheet" type="text/css" />
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="<?= jsr(); ?>/jquery.bxslider.min.js"></script>
	<!--local-->
	<?php
		$filename = get_field('filename');
		$bodyclass = get_field('bodyclass');
		if($filename) {
			echo '<link href="'.cssr().'/'.$filename.'.css" rel="stylesheet" type="text/css">';
		}
		if(is_page('cogca')) {
			echo '<script type="text/javascript" src="'.jsr().'/cogca.js"></script>';
		} elseif(is_page('news')) {
			echo '<script type="text/javascript" src="'.jsr().'/news.js"></script>';
		} elseif(is_single()) {
			echo '<link href="'.cssr().'/item.css" rel="stylesheet" type="text/css">';
		}
	?>
	<script type="text/javascript" src="<?= jsr(); ?>/top.js"></script>

	<?php
		wp_head();
		global $post;
		$slug = $post->post_name;
	?>
</head>

<body id="top" class="<?php if($bodyclass) { echo $bodyclass; } elseif(is_single()) { echo 'item'; } ?>">

<!--ヘッダー-->
<header id="header">
	<dl>
		<dt><a href="<?= home(); ?>"><img src="<?= imgr(); ?>/common/h_logo.png" alt=""></a></dt>
		<dd>
			<div id="smp_nav_btn"><span></span></div><!--smp_nav_btn-->
			<nav id="h_menu">
				<ul>
					<li><a href="<?= home(); ?>"><span><img src="<?= imgr(); ?>/common/nav_ico1.png" alt="" class="pc"><img src="<?= imgr(); ?>/common/nav2_ico1.png" alt="" class="smp"></span><strong>TOP</strong></a></li>
					<li><a href="<?= shoplist(); ?>"><span><img src="<?= imgr(); ?>/common/nav_ico2.png" alt="" class="pc"><img src="<?= imgr(); ?>/common/nav2_ico2.png" alt="" class="smp"></span><strong>店舗・チラシ情報</strong></a></li>
					<li><a href="<?= about(); ?>"><span><img src="<?= imgr(); ?>/common/nav_ico3.png" alt="" class="pc"><img src="<?= imgr(); ?>/common/nav2_ico5.png" alt="" class="smp"></span><strong>富士屋のこだわり</strong></a></li>
					<li><a href="<?= recruit(); ?>"><span><img src="<?= imgr(); ?>/common/nav_ico4.png" alt="" class="pc"><img src="<?= imgr(); ?>/common/nav2_ico4.png" alt="" class="smp"></span><strong>採用情報</strong></a></li>
					<li><a href="<?= company(); ?>"><span><img src="<?= imgr(); ?>/common/nav_ico5.png" alt="" class="pc"><img src="<?= imgr(); ?>/common/nav2_ico5.png" alt="" class="smp"></span><strong>会社案内</strong></a></li>
					<!-- <li class="mail"><a href="mailto:xxx@xx.xx"><span><img src="<?= imgr(); ?>/common/nav_ico6.png" alt=""></span><strong>お問い合わせ</strong></a></li> -->
					<li class="tel smp"><a href="tel:054-629-4611"><span><img src="<?= imgr(); ?>/common/nav2_ico7.png" alt=""></span><strong>054-629-4611</strong></a></li>
				</ul>
			</nav>
		</dd>
	</dl>
</header>
<!--ヘッダー-->

<!--コンテンツ-->
<div id="content">