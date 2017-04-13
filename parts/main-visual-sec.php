<?php
/**
 ** Main Visual in sub pages
 */
?>
<?php

  $img_visual_pc = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_visual_pc');
  $img_visual_pc_src = $img_visual_pc[0];

  $img_visual_tb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_visual_tb');
  $img_visual_tb_src = $img_visual_tb[0];

  $img_visual_sp = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'img_visual_sp');
  $img_visual_sp_src = $img_visual_sp[0];

?>
<style>
	/* pc */
	.com_mainvisual h2 {
		background: url('<?php echo $img_visual_pc_src; ?>') bottom center no-repeat!important;	
	} 
	/* tablet*/
	@media screen and (max-width: 1200px) {
		.com_mainvisual h2 {
			background: url('<?php echo $img_visual_tb_src; ?>') bottom center no-repeat!important;
		} 
	}
	/* mobile */
	@media screen and (max-width: 768px) {
		.com_mainvisual h2 {
			background: url('<?php echo $img_visual_sp_src; ?>') bottom center no-repeat!important;	
		} 
	}
	
</style>
<div class="com_mainvisual">
  <div class="inner">
    <h2 id="title-background"><span><?php the_title(); ?></span></h2>
  </div>
</div>
