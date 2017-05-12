<?php
  $text_information = get_field('text_information','option');
  $contact_text     = get_field('contact_text','option');
  $contact_link     = get_field('contact_link','option');
  $contact_description = get_field('contact_description','option');
  $contact_phone = get_field('contact_phone','option');
  $contact_note = get_field('contact_note','option');
?>
<section id="section_07" class="footer_section_02">
  <div class="inner">
    <?php echo $text_information; ?>
    <p class="btn_03"><a href="<?php echo $contact_link; ?>"><span><?php echo $contact_text; ?></span></a></p>
  </div>
</section>
<section id="section_08" class="footer_section_03 info-bottom">
  <div class="inner">
    <img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_18.png" alt="お電話からでも、お気軽にご相談ください。" class="pc" />
    <img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_18_tb.png" alt="お電話からでも、お気軽にご相談ください。" class="tablet" />
    <img src="<?php bloginfo('template_url'); ?>/images/feature/feature_img_18_tb.png" alt="お電話からでも、お気軽にご相談ください。" class="sp" />
    <div class="footer_tel"> <?php echo $contact_description; ?>
      <a class="tel-number" href="tel:<?php echo $contact_phone; ?>"><?php echo $contact_phone; ?></a>
      <?php if($contact_note) {
          echo $contact_note;
      } else { ?>
        <p class="remake">＊大変混みあっている為、折返しのご対応となる場合がございます。</p>
      <?php }?>
    </div>
  </div>
</section>
