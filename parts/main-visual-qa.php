<?php
/**
 ** Main Visual in qa pages
 */
?>
<?php
  $args = [
      'post_type' => 'page',
      'fields' => 'ids',
      'nopaging' => true,
      'meta_key' => '_wp_page_template',
      'meta_value' => 'page-qa.php'
  ];
  $pages = get_posts( $args );

  foreach ( $pages as $page )
    $page_qa_id = $page;

  $img_visual_pc = wp_get_attachment_image_src(get_post_thumbnail_id($page_qa_id),'img_visual_pc');
  $img_visual_pc_src = $img_visual_pc[0];

  $img_visual_tb = wp_get_attachment_image_src(get_post_thumbnail_id($page_qa_id),'img_visual_tb');
  $img_visual_tb_src = $img_visual_tb[0];

  $img_visual_sp = wp_get_attachment_image_src(get_post_thumbnail_id($page_qa_id),'img_visual_sp');
  $img_visual_sp_src = $img_visual_sp[0];

?>
<style>
  /* pc */
  .com_mainvisual {
    background: url('<?php echo $img_visual_pc_src; ?>') bottom center #000000 no-repeat!important;
    background-size: contain!important;
  }
  /* tablet*/
  @media screen and (max-width: 1200px) {
    .com_mainvisual {
      background: url('<?php echo $img_visual_tb_src; ?>') bottom center #000000 no-repeat!important;
      background-size: cover!important;
    }
  }
  /* mobile */
  @media screen and (max-width: 768px) {
    .com_mainvisual {
      background: url('<?php echo $img_visual_sp_src; ?>') bottom center #000000 no-repeat!important;
      background-size: cover!important;
    }
  }
</style>
<div class="com_mainvisual">
  <div class="inner">
    <h2 id="title-background" data-pc="<?php echo $page_main_visual_pc; ?>" data-tb="<?php echo $page_main_visual_tablet; ?>" data-sp="<?php echo $page_main_visual_sp; ?>"><span>   <?php
          if(is_single()||is_page()) {
            the_title();
          }
          elseif(is_archive()) {
            if(is_post_type_archive('qa')) {
              echo "QA";
            }
            elseif(is_tax('qacat')) {
              single_term_title();
            }

          }
        ?></span></h2>
  </div>
</div>
