<?php
  $why_us_section_title = get_field('why_us_section_title');
?>
<div class="choosing-area">
  <div class="container">
    <div class="sec-title text-center">
      <h1><?php echo $why_us_section_title; ?></h1>
      <div class="border mar0auto">
        <span class="flaticon-shape"></span>
      </div>
    </div>
    <?php if(have_rows('skills')){ ?>
      <div class="row">
        <div class="col-md-12">
          <?php
            while(have_rows('skills')){
              the_row();

              $skill_icon = get_sub_field('skill_icon');
              $skill_title = get_sub_field('skill_title');
              $skill_text = get_sub_field('skill_text');

              if(get_row_index() % 3 == 1){
                ?>
                <ul>
              <?php } ?>
              <li class="single-item bdr-btm">
                <div class="iocn-holder">
                  <div class="inner-border">
                    <span class="<?php echo $skill_icon; ?>"></span>
                  </div>
                </div>
                <div class="text-holder">
                  <h3><?php echo $skill_title; ?></h3>
                  <p><?php echo $skill_text; ?></p>
                </div>
              </li>
              <?php if(get_row_index() % 3 == 0) { ?>
                </ul>
                <?php
              }
            }
          ?>
        </div>
      </div>
    <?php } ?>
  </div>
</div>