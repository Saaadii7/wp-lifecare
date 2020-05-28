<?php
  $contact_section_title = get_field('contact_section_title');
  $experience_box_text = get_field('experience_box_text');
  $contact_form = get_field('contact_form');
?>
<section class="appointment-area">
  <div class="icon-holder leap">
    <img src="<?php echo get_template_directory_uri(); ?>/images/icon/appointment-bg.png" alt="Icon">
  </div>
  <div class="container">
    <div class="sec-title text-center">
      <h1><?php echo $contact_section_title; ?></h1>
      <div class="border mar0auto">
        <span class="flaticon-shape"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-9">
        <div class="appointment-box">

          <?php
            echo $experience_box_text;
            
            echo do_shortcode('[contact-form-7 id="'.$contact_form->ID.'" title="'.$contact_form->post_title.'"]');
          ?>

        </div>
      </div>

      <div class="col-md-3">
        <div class="quick-contact">
          <div class="title">
            <h2>Contact Details</h2>
          </div>
          <ul class="contact-info">
            <li>
              <div class="icon-holder">
                <span class="flaticon-location"></span>
              </div>
              <div class="text-holder">
                <h5><span>Address:</span> <?php echo get_field('location', 'options'); ?></h5>
              </div>
            </li>
            <li>
              <div class="icon-holder">
                <span class="flaticon-technology"></span>
              </div>
              <div class="text-holder">
                <h5><span>Phone:</span> <?php echo get_field('phone', 'options'); ?></h5>
              </div>
            </li>
            <li>
              <div class="icon-holder">
                <span class="flaticon-note"></span>
              </div>
              <div class="text-holder">
                <h5><span>Email:</span> <?php echo get_field('email', 'options'); ?></h5>
              </div>
            </li>
            <li>
              <div class="icon-holder">
                <span class="flaticon-clock"></span>
              </div>
              <div class="text-holder">
                <h5><span>Weekdays:</span> <?php echo get_field('weekdays', 'options'); ?></h5>
              </div>
            </li>

          </ul>
        </div>
      </div>


    </div>
  </div>
</section>