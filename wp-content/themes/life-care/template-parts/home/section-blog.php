<?php
  $blog_section_title = get_field('blog_section_title');
  $blog_section_button = get_field('blog_section_button');
  $blog_posts = get_field('blog_posts');

  $all_posts = 0;
  if($blog_posts == 'all'){
    $args = array(
      'posts_per_page' => -1
    );

    $all_posts = get_posts($args);
  } else {
    if($blog_posts == 'selective'){
      $all_posts = get_field('select_posts');
    }
  }
?>
<section class="latest-blog-area sec-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12 top">
        <div class="sec-title pull-left">
          <h1><?php echo $blog_section_title; ?></h1>
          <div class="border">
            <span class="flaticon-shape"></span>
          </div>
        </div>
        <div class="readmore-blog pull-right">
          <a class="thm-btn bgclr-1" href="<?php echo $blog_section_button['url']; ?>"><?php echo $blog_section_button['title']; ?></a>
        </div>
      </div>
    </div>
    <?php if(is_array($all_posts) && count($all_posts) > 0){ ?>
      <div class="row">
        <?php foreach($all_posts as $single_post){ ?>
          <!--Start single blog item-->
          <div class="col-md-4">
            <div class="single-blog-item">
              <div class="img-holder">
                <img src="<?php echo get_the_post_thumbnail_url($single_post->ID); ?>" alt="Awesome Image">
                <div class="overlay-style-one"></div>
                <div class="categories">
                  <a href="<?php echo get_the_permalink($single_post->ID); ?>">Massage</a>
                </div>
              </div>
              <div class="text-holder">
                <ul class="meta-info">
                  <li><a href="<?php echo get_the_permalink($single_post->ID); ?>"><?php echo get_the_date('l F j, Y', $single_post->ID); ?></a></li>
                  <li><a href="<?php echo get_the_permalink($single_post->ID); ?>"><?php echo get_comments_number($single_post->ID); ?> Comments</a></li>
                </ul>
                <a href="<?php echo get_the_permalink($single_post->ID); ?>">
                  <h3 class="blog-title"><?php echo $single_post->post_title; ?></h3>
                </a>
                <div class="text">
                  <?php echo $single_post->post_content; ?>
                </div>
              </div>
            </div>
          </div>
          <!--End single blog item-->
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>