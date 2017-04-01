<?php
/**
 ** Main Visual in qa pages
 */
?>
<div class="com_mainvisual">
 <div class="inner">
   <div class="main_pic">
     <?php
        $qa_main_visual_sp = get_field('qa_main_visual_sp','option');
        $qa_main_visual_tablet = get_field('qa_main_visual_tablet','option');
        $qa_main_visual_pc = get_field('qa_main_visual_pc','option');
     ?>
     <img class="sp" src="<?php echo $qa_main_visual_sp; ?>" />
     <img class="tablet" src="<?php echo $qa_main_visual_tablet; ?>" />
     <img class="pc" src="<?php echo $qa_main_visual_pc; ?>" />
   </div>
   <h2><span><?php
    if(is_single())
    {
      the_title();
    } 
    elseif(is_archive())
    {
      if(is_post_type_archive('qa'))
      {
        echo "QA";
      }
      elseif(is_tax('qacat'))
      {
        single_term_title();
      }

    }
    ?></span></h2>
   }
 </div>
</div>