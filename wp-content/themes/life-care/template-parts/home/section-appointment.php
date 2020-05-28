<?php
  $appointment_section_title = get_field('appointment_section_title');
  $appointment_section_text = get_field('appointment_section_text');
  $appointment_section_button = get_field('appointment_section_button');
?>
<section class="slogan-area" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/resources/slogan-bg.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
          <h1><?php echo $appointment_section_title; ?></h1>
          <p><?php echo $appointment_section_text; ?></p>
          <a class="thm-btn bgclr-1" href="<?php echo $appointment_section_button['url']; ?>"><?php echo $appointment_section_button['title']; ?></a>
        </div>
      </div>
    </div>
  </div>
</section>