<?php
/**
 ** Main Visual in sub pages
 */
?>
<div class="com_mainvisual">
 <div class="inner">
   <div class="main_pic">
     <?php
        $page_main_visual_sp = get_field('page_main_visual_sp');
        $page_main_visual_tablet = get_field('page_main_visual_tablet');
        $page_main_visual_pc = get_field('page_main_visual_pc');
     ?>
     <img class="sp" src="<?php echo $page_main_visual_sp; ?>" />
     <img class="tablet" src="<?php echo $page_main_visual_tablet; ?>" />
     <img class="pc" src="<?php echo $page_main_visual_pc; ?>" />
   </div>
   <h2><span><?php the_title(); ?></span></h2>
 </div>
</div>
