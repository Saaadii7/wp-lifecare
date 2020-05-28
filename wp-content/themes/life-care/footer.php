<?php
  /**
   * The template for displaying the footer
   *
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package life-care
   */

?>

    <!--Start footer area-->
    <footer class="footer-area">
      <div class="arrow">
        <img src="<?php echo get_template_directory_uri(); ?>/images/resources/arrow.png" alt="">
      </div>
      <div class="footer-image-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-image.png" alt="">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="footer-logo text-center">
              <a href="index.html">
                <img src="<?php echo get_template_directory_uri(); ?>/images/footer/footer-logo.png" alt="Awesome Footer Logo">
              </a>
            </div>
          </div>
        </div>
        <div class="row">
          <!--Start single footer widget-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-widget pd-bottom50">
              <div class="title">
                <h3>Quick Contact</h3>
                <span class="border"></span>
              </div>
              <div class="our-info">
                <p>Daily Spanz brings 41 years of interior designs experience right to your home or office. Our design professionals.</p>
              </div>
              <ul class="footer-contact-info">
                <li>
                  <div class="icon-holder">
                    <span class="flaticon-location"></span>
                  </div>
                  <div class="text-holder">
                    <h5>Address: <?php echo get_field('location', 'options'); ?></h5>
                  </div>
                </li>
                <li>
                  <div class="icon-holder">
                    <span class="flaticon-technology"></span>
                  </div>
                  <div class="text-holder">
                    <h5>Phone: <?php echo get_field('phone', 'options'); ?></h5>
                  </div>
                </li>
                <li>
                  <div class="icon-holder">
                    <span class="flaticon-note"></span>
                  </div>
                  <div class="text-holder">
                    <h5>Email: <?php echo get_field('email', 'options'); ?></h5>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <!--End single footer widget-->
          <!--Start single footer widget-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-widget pd-bottom50">
              <div class="title">
                <h3>Usefull Links</h3>
                <span class="border"></span>
              </div>
              <ul class="usefull-links">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Procedures</a></li>
                <li><a href="#">News & Tips</a></li>
                <li><a href="#">Threrapists</a></li>
                <li><a href="#">Our Shop</a></li>
                <li><a href="#">Stories</a></li>
                <li><a href="#">FAQ’s</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <!--End single footer widget-->
          <!--Start single footer widget-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-widget mar-bottom">
              <div class="title">
                <h3>Popular Post</h3>
              </div>
              <ul class="latest-post">
                <li class="single-post">
                  <div class="img-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer/latest-news-1.png" alt="Awesome Image">
                  </div>
                  <div class="text-holder">
                    <a class="post-title" href="#">Spas & the psychology of<br>well-being...</a>
                    <div class="post-info">
                      <span>August 24, 2017</span>
                    </div>
                  </div>
                </li>
                <li class="single-post">
                  <div class="img-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/footer/latest-news-2.png" alt="Awesome Image">
                  </div>
                  <div class="text-holder">
                    <a class="post-title" href="#">Two massages are better<br>than one...</a>
                    <div class="post-info">
                      <span>February 05, 2017</span>
                    </div>
                  </div>
                </li>
              </ul>
              <div class="more-news">
                <a href="blog-default.html">More News <i class="fa fa-caret-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <!--Start single footer widget-->
          <!--Start single footer widget-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-footer-widget clearfix">
              <div class="title">
                <h3>Subscribe Us</h3>
              </div>
              <div class="newsletter-box">
                <p>Subscribe to our newsletter!</p>
                <form class="newsletter-form" action="#">
                  <input placeholder="Email Address" type="text">
                  <button type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                  <div class="envelope">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                  </div>
                </form>
              </div>
            </div>
            <div class="single-footer-widget clearfix">
              <div class="title">
                <h3>Opening Hours</h3>
              </div>
              <ul class="working-hours">
                <li>Mon-FriDay: <span>9.00 to 18.00</span></li>
                <li>Saturday: <span>9.00 to 18.00</span></li>
                <li>Sunday: <span class="closed">Closed</span></li>
              </ul>
            </div>
          </div>
          <!--End single footer widget-->
        </div>
      </div>
    </footer>
    <!--End footer area-->
    
    <!--Start footer bottom area-->
    <section class="footer-bottom-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="copyright-text">
              <p><?php echo get_field('copyright_text', 'options'); ?></p>
            </div>
          </div>
          <div class="col-md-4">
            <ul class="footer-social-links">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!--End footer bottom area-->

  </div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html">
  <span class="fa fa-angle-up"></span>
</div>

<!-- main jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery-latest.js"></script>
<!-- Wow Script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>
<!-- bootstrap -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="<?php echo get_template_directory_uri(); ?>/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?php echo get_template_directory_uri(); ?>/js/validation.js"></script>
<!-- mixit up -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="<?php echo get_template_directory_uri(); ?>/js/gmaps.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/map-helper.js"></script>
<!-- fancy box -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="<?php echo get_template_directory_uri(); ?>/js/isotope.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.bootstrap-touchspin.js"></script>
<!-- jQuery timepicker js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>
<!-- Bootstrap bootstrap touchspin js -->
<!-- jQuery ui js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- Html 5 light box script-->
<script src="<?php echo get_template_directory_uri(); ?>/assets/html5lightbox/html5lightbox.js"></script>
<!-- revolution slider js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- thm custom script -->
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
