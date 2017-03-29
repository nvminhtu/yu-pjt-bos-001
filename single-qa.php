<?php
/**
 * Single QA
 */ ?>
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
<link href="<?php bloginfo('template_url'); ?>/css/import.css" rel="stylesheet" type="text/css" />
<link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet" type="text/css" />
<?php wp_head(); ?>
</head>

<?php $id_page = 'qa';  ?>
<body id="<?php echo $id_page; ?>">
    <header id="header" class="header">
        <div class="inner clearfix">
            <h1 class="h_logo">
                <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="BOSTY 腹筋専門パーソナルジム" /></a>
                <span>腹筋専門パーソナルジム</span>
            </h1>
            <div class="h_navi">
                <?php
                        $defaults = array(
                            'theme_location'  => 'top-menu'
                        );
                        wp_nav_menu( $defaults );
                ?>
            </div>
            <div class="header_right">
                <a href="#" class="menu_icon"><img src="<?php bloginfo('template_url'); ?>/images/menu_icon.png" alt="MENU" /></a>
                <div class="h_search">
                    <div class="h_search_inner">
                        <img src="<?php bloginfo('template_url'); ?>/images/h_search.png" alt="Search">
                        <form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                            <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="text" data-ic-class="search-input" placeholder="Search"/>
                            <span class="fa fa-times-circle" data-ic-class="search-clear"></span>
                        </form>
                        <a class="close">x</a>
                    </div>
                </div>
                <a href="contact.html" class="h_contact">体験レッスン予約</a>
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
<div class="com_mainvisual">
  <div class="inner">
    <h2><span>よくあるご質問</span></h2>
  </div>
</div>

<div class="main">
<div class="inner clearfix">
<!-- left_content -->
<div class="left_content">
<h3 class="h3_ttl">タイトルが入ります。タイトルが入ります。</h3>

<div class="qa_sec">
<?php /* Start the Loop */
while ( have_posts() ) : the_post(); ?>
<dl>
<dt><?php the_title(); ?></dt>
<dd><?php the_content(); ?></dd>
</dl>

<?php endwhile; // End of the loop. ?>
</div>
</div><!-- end left_content -->

<!-- Get Sidebar -->
<?php get_sidebar('qa'); ?>

</div>
</div>

<?php
    // common area for all sub pages and posts
    //get_template_part('parts/list-pages');
    //get_template_part('parts/contact-information');
?>
<?php get_footer(); ?>
