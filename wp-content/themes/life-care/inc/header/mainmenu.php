<?php
  $logo = get_field('logo', 'options');
?>
<section class="mainmenu-area stricky">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <!--Start logo-->
        <div class="logo">
          <a href="<?php bloginfo('url'); ?>">
            <img class="logo-image" src="<?php echo $logo; ?>" alt="">
          </a>
        </div>
        <!--End logo-->
        <!--Start mainmenu-->
        <nav class="main-menu clearfix">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          <div class="navbar-collapse collapse clearfix">
            <!--Start nav container nav left-->
            <?php
              if(has_nav_menu('header-menu-left')){
                wp_nav_menu(array(
                  'theme_location' => 'header-menu-left',
                  'container' => 'div',
                  'container_class' => 'nav-container nav-left',
                  'menu_class' => 'navigation clearfix'
                ));
              }
            ?>
            <!--End nav container nav left-->
            <!--Start nav container nav right-->
            <?php
              if(has_nav_menu('header-menu-right')){
                wp_nav_menu(array(
                  'theme_location' => 'header-menu-right',
                  'container' => 'div',
                  'container_class' => 'nav-container nav-right',
                  'menu_class' => 'navigation clearfix'
                ));
              }
            ?>
            <!--End nav container nav right-->
          </div>
        </nav>
        <!--End mainmenu-->

        <div class="arrow">
          <img src="<?php echo get_template_directory_uri(); ?>/images/resources/arrow.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>