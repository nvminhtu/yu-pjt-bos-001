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
<div class="com_mainvisual">
  <div class="inner">
    <h2 id="title-background" data-pc="<?php echo $page_main_visual_pc; ?>" data-tb="<?php echo $page_main_visual_tablet; ?>" data-sp="<?php echo $page_main_visual_sp; ?>"><span><?php the_title(); ?></span></h2>
  </div>
</div>
