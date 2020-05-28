<?php
  $welcome_title = get_field('welcome_title');
  $welcome_text = get_field('welcome_text');
  $welcome_mission_title = get_field('welcome_mission_title');
  $welcome_mission_text = get_field('welcome_mission_text');
  $welcome_vision_title = get_field('welcome_vision_title');
  $welcome_vision_text = get_field('welcome_vision_text');
  $welcome_button = get_field('welcome_button');
  $welcome_contact_text = get_field('welcome_contact_text');
  $welcome_contact_number = get_field('welcome_contact_number');
  $welcome_image = get_field('welcome_image');
?>
<section class="welcome-area">
  <div class="container">
    <div class="sec-title">
      <h1><?php echo $welcome_title; ?></h1>
      <div class="border">
        <span class="flaticon-shape"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
        <div class="text-holder">
          <h4><?php echo $welcome_text; ?></h4>
          <div class="inner-content">
            <!--Start single item-->
            <div class="single-item">
              <h3><?php echo $welcome_mission_title; ?></h3>
              <p><?php echo $welcome_mission_text; ?></p>
            </div>
            <!--End single item-->
            <!--Start single item-->
            <div class="single-item border">
              <h3><?php echo $welcome_vision_title; ?></h3>
              <p><?php echo $welcome_vision_text; ?></p>
            </div>
            <!--End single item-->
          </div>
          <div class="bottom">
            <div class="read-more-button">
              <a class="thm-btn bgclr-1" href="<?php echo $welcome_button['url']; ?>"><?php echo $welcome_button['title']; ?></a>
            </div>
            <div class="title">
              <h2><?php echo $welcome_contact_text; ?> <span><?php echo $welcome_contact_number; ?></span></h2>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
        <div class="img-holder wow slideInRight" data-wow-delay="200ms" data-wow-duration="1500ms">
          <img src="<?php echo $welcome_image; ?>" alt="Awesome Image">
        </div>
      </div>
    </div>
  </div>
</section>