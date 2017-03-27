<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ja" xml:lang="ja">
<head>
<title><?php wp_title(' - ', true, 'right'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript" />
<link  href="<?php bloginfo('template_url'); ?>/css/import.css" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>

<?php $id_page = get_custom_page_slug();  ?>
<body id="<?php echo $id_page; ?>">
	<header id="header" class="header">
		<div class="inner clearfix">
			<h1 class="h_logo"><a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="BOSTY 腹筋専門パーソナルジム" /></a><span>腹筋専門パーソナルジム</span></h1>
			<div class="h_navi">
				<a href="studio.html">スタジオ一覧</a>
				<a href="price.html">プログラム・料金</a>
				<a href="feature.html">BOSTYの特徴</a>
				<a href="qa.html">Q&amp;A</a>
			</div>
			<div class="header_right">
				<a href="#" class="menu_icon"><img src="<?php bloginfo('template_url'); ?>/images/menu_icon.png" alt="MENU" /></a>
				<div class="h_search">
					<div class="h_search_inner">
						<img src="<?php bloginfo('template_url'); ?>/images/h_search.png" alt="Search">
						<form action="" method="post">
							<input type="text" name="keyword" class="text">
							<input type="submit" name="submit" value="Search" class="submit">
						</form>
						<a class="close">x</a>
					</div>
				</div>
				<a href="contact.html" class="h_contact">体験レッスン予約 ▶</a>
				<a href="tel:0362058288" class="h_tel" disabled="disabled">03-6205-8288</a>
				<a href="#" class="h_share"><img src="<?php bloginfo('template_url'); ?>/images/h_share.png" alt="Share" /></a>
			</div>
			<div class="share_box">
				<div class="share_box_title">SHARE<span>シェア</span></div>
				<div class="share_box_social"><a href="" class="share_facebook" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/share_box_facebook.png" alt="Facebook" /></a></div>
				<div class="share_box_social"><a href="" class="share_twitter" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/share_box_twitter.png" alt="Twitter" /></a></div>
			</div>
			<div class="search_box">
				<form action="" method="post">
					<input type="text" name="keyword" class="text">
					<input type="submit" name="submit" value="Search" class="submit">
				</form>
			</div>

		</div>
	</header>
