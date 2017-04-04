<?php
/**
 ** Main Visual in sub pages
 */
?>
<?php
  $page_main_visual_sp = get_field('page_main_visual_sp');
  $page_main_visual_tablet = get_field('page_main_visual_tablet');
  $page_main_visual_pc = get_field('page_main_visual_pc');
?>
<style>
	/* pc */
	.com_mainvisual h2 {
		background: url('<?php echo $page_main_visual_pc; ?>') bottom center no-repeat!important;	
	} 
	/* tablet*/
	@media screen and (max-width: 1200px) {
		.com_mainvisual h2 {
			background: url('<?php echo $page_main_visual_tablet; ?>') bottom center no-repeat!important;
		} 
	}
	/* mobile */
	@media screen and (max-width: 768px) {
		.com_mainvisual h2 {
			background: url('<?php echo $page_main_visual_sp; ?>') bottom center no-repeat!important;	
		} 
	}
	
</style>
<div class="com_mainvisual">
  <div class="inner">
    <h2 id="title-background" data-pc="<?php echo $page_main_visual_pc; ?>" data-tb="<?php echo $page_main_visual_tablet; ?>" data-sp="<?php echo $page_main_visual_sp; ?>"><span><?php the_title(); ?></span></h2>
  </div>
</div>
