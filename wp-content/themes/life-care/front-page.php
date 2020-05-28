<?php get_header(); ?>

  <!--Start rev slider wrapper-->
  <?php get_template_part('template-parts/home/section', 'slider'); ?>
  <!--End rev slider wrapper-->

  <!--Start welcome area-->
  <?php get_template_part('template-parts/home/section', 'welcome'); ?>
  <!--End welcome area-->

  <!--Start Procedures area-->
  <?php get_template_part('template-parts/home/section', 'services'); ?>
  <!--End Procedures area-->

  <!--Start Docs area-->
  <?php get_template_part('template-parts/home/section', 'documents'); ?>
  <!--End Docs area-->

  <!--Start slogan area-->
  <?php get_template_part('template-parts/home/section', 'appointment'); ?>
  <!--End slogan area-->

  <!--Start choosing area-->
  <?php get_template_part('template-parts/home/section', 'whyus'); ?>
  <!--End choosing area-->

  <!--Start latest blog area-->
  <?php get_template_part('template-parts/home/section', 'blog'); ?>
  <!--End latest blog area-->

  <!--Start appointment area-->
  <?php get_template_part('template-parts/home/section', 'contact'); ?>
  <!--End appointment area-->

<?php get_footer(); ?>