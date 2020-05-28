<?php
  $services_section_title = get_field('services_section_title');
  $services = get_field('services');

  $all_services = 0;
  if($services == 'all'){
    $args = array(
      'post_type' => 'services',
      'posts_per_page' => -1
    );

    $all_services = get_posts($args);
  } else {
    if($services == 'selective'){
      $all_services = get_field('select_services');
    }
  }
?>
<section class="procedures-area">
  <div class="arrow">
    <img src="<?php echo get_template_directory_uri(); ?>/images/resources/arrow.png" alt="">
  </div>
  <div class="iconbox-left-top">
    <span class="flaticon-light"></span>
  </div>
  <div class="iconbox-left-bottom">
    <span class="flaticon-flower"></span>
  </div>
  <div class="iconbox-right-top">
    <span class="flaticon-nature"></span>
  </div>
  <div class="iconbox-right-bottom">
    <span class="flaticon-left"></span>
  </div>
  <div class="container">
    <div class="sec-title text-center">
      <h1><?php echo $services_section_title; ?></h1>
      <div class="border mar0auto">
        <span class="flaticon-shape"></span>
      </div>
    </div>

    <?php if(is_array($all_services) && count($all_services) > 0){ ?>
      <div class="row">
        <?php foreach($all_services as $single_service){ ?>
          <!--Start single item-->
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="single-item">
              <div class="img-holder">
                <img src="<?php echo get_template_directory_uri(); ?>/images/procedures/1.png" alt="Awesome Image">
                <div class="overlay-style-one">
                  <div class="box">
                    <div class="content">
                      <div class="icon-holder">
                        <span class="flaticon-hands"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-holder text-center">
                <div class="show-content">
                  <div class="iocn-holder">
                    <span class="<?php echo get_field('select_icon', $single_service->ID); ?>"></span>
                  </div>
                  <h3><?php echo $single_service->post_title; ?></h3>
                </div>
                <div class="hover-content">
                  <a href="<?php echo get_the_permalink($single_service->ID); ?>">
                    <h3><?php echo $single_service->post_title; ?></h3>
                  </a>
                  <span class="border"></span>
                  <?php echo $single_service->post_content; ?>
                </div>
              </div>
            </div>
          </div>
          <!--End single item-->
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>