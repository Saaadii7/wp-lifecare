<?php
  $phone = get_field('phone', 'options');
  $email = get_field('email', 'options');
  $location = get_field('location', 'options');
?>
<section class="top-bar-area">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
        <div class="top-left">
          <ul>
            <li><span class="flaticon-technology"></span>Phone: <?php echo $phone; ?></li>
            <li><span class="flaticon-note"></span>Email: <?php echo $email; ?></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
        <div class="top-right clearfix">
          <ul class="location">
            <li><span class="flaticon-location"></span><?php echo $location; ?></li>
          </ul>
          <?php if(have_rows('social_links', 'options')){ ?>
            <ul class="social-links">
              <?php
                while(have_rows('social_links', 'options')){
                  the_row();

                  $select_social_media_type = get_sub_field('select_social_media_type', 'options');
                  $add_social_media_url = get_sub_field('add_social_media_url', 'options');
                  $show_in = get_sub_field('show_in', 'options');

                  if(in_array('header', $show_in)) {
                    ?>
                    <li>
                      <a href="<?php echo $add_social_media_url; ?>">
                        <i class="fa <?php echo $select_social_media_type; ?>"></i>
                      </a>
                    </li>
                    <?php
                  }
                }
              ?>
            </ul>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>