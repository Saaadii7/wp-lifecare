<?php if(have_rows('add_slides')){ ?>
  <section class="rev_slider_wrapper">
    <div id="slider1" class="rev_slider"  data-version="5.0">
      <ul>
        <?php
          while(have_rows('add_slides')){
            the_row();
            
            $slide_image = get_sub_field('slide_image');
            $slide_title = get_sub_field('slide_title');
            $slide_sub_title = get_sub_field('slide_sub_title');
            $slide_text = get_sub_field('slide_text');
            $slide_button_1 = get_sub_field('slide_button_1');
            $slide_button_2 = get_sub_field('slide_button_2');
            ?>
            <li data-transition="random">
              <img src="<?php echo $slide_image; ?>"  alt="" width="1920" height="600" data-bgposition="top center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="1" >
              <div class="tp-caption  tp-resizeme"
                   data-x="left" data-hoffset="0"
                   data-y="top" data-voffset="190"
                   data-transform_idle="o:1;"
                   data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                   data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                   data-splitin="none"
                   data-splitout="none"
                   data-responsive_offset="on"
                   data-start="700">
                <div class="slide-content-box mar-lft">
                  <h2><?php echo $slide_sub_title; ?></h2>
                </div>
              </div>
              <div class="tp-caption  tp-resizeme"
                   data-x="left" data-hoffset="0"
                   data-y="top" data-voffset="240"
                   data-transform_idle="o:1;"
                   data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                   data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                   data-splitin="none"
                   data-splitout="none"
                   data-responsive_offset="on"
                   data-start="1500">
                <div class="slide-content-box mar-lft">
                  <h1><?php echo $slide_title; ?></h1>
                </div>
              </div>
              <div class="tp-caption  tp-resizeme"
                   data-x="left" data-hoffset="0"
                   data-y="top" data-voffset="395"
                   data-transform_idle="o:1;"
                   data-transform_in="x:[-175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0.01;s:3000;e:Power3.easeOut;"
                   data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-mask_in="x:[100%];y:0;s:inherit;e:inherit;"
                   data-splitin="none"
                   data-splitout="none"
                   data-responsive_offset="on"
                   data-start="2000">
                <div class="slide-content-box mar-lft">
                  <p><?php echo $slide_text; ?></p>
                </div>
              </div>
              <div class="tp-caption tp-resizeme"
                   data-x="left" data-hoffset="0"
                   data-y="top" data-voffset="480"
                   data-transform_idle="o:1;"
                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                   data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-splitin="none"
                   data-splitout="none"
                   data-responsive_offset="on"
                   data-start="2900">
                <div class="slide-content-box mar-lft">
                  <div class="button">
                    <a class="thm-btn bgclr-1" href="<?php echo $slide_button_1['url']; ?>"><?php echo $slide_button_1['title']; ?></a>
                  </div>
                </div>
              </div>
              <div class="tp-caption tp-resizeme"
                   data-x="left" data-hoffset="200"
                   data-y="top" data-voffset="480"
                   data-transform_idle="o:1;"
                   data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;"
                   data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;"
                   data-splitin="none"
                   data-splitout="none"
                   data-responsive_offset="on"
                   data-start="2900">
                <div class="slide-content-box mar-lft">
                  <div class="button">
                    <a class="thm-btn bgclr-1 contact" href="<?php echo $slide_button_2['url']; ?>"><?php echo $slide_button_2['title']; ?></a>
                  </div>
                </div>
              </div>
            </li>
          <?php } ?>
      </ul>
    </div>
  </section>
<?php } ?>