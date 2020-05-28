<?php get_header(); ?>
  <!--Start breadcrumb area-->
  <section class="breadcrumb-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="breadcrumbs">
            <h1><?php print_r(get_queried_object()->post_title); ?></h1>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End breadcrumb area-->
  <!--Start blog Single area-->
  <section id="blog-area" class="blog-large-area blog-single-area">
    <div class="container">
      <div class="row">
        <?php
          while(have_posts()){
            the_post();
            ?>
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
              <div class="blog-post">
                <div class="single-blog-item">
                  <div class="img-holder">
                    <img src="<?php echo get_field('addselect_image', get_the_ID()); ?>" alt="Awesome Image">
                  </div>
                  <div class="text-holder">
                    <?php the_content(); ?>
                  </div>
                </div>

                <div class="sec-title pdb-30">
                  <h2>Documents</h2>
                </div>
                <?php
                  $select_service_documents = get_field('select_service_documents', get_the_ID());
                  foreach($select_service_documents as $single_document){
                    ?>
                    <!--Start document box-->
                    <div class="author-box">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="img-holder">
                            <a href="<?php echo get_field('attach_document', $single_document->ID); ?>" download><i class="fa fa-file" style="font-size: 85px; color: #2acb35;"></i></a>
                          </div>
                          <div class="text-holder">
                            <a href="<?php echo get_field('attach_document', $single_document->ID); ?>" download><h3><?php echo $single_document->post_title; ?></h3></a>
                            <?php echo $single_document->post_content; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--End document box-->
                  <?php } ?>
              </div>
            </div>
          <?php } ?>

        <!--Start sidebar Wrapper-->
        <div class="col-lg-4 col-md-6 col-sm-7 col-xs-12">
          <div class="sidebar-wrapper">
            <!--Start single sidebar-->
            <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
              <form class="search-form" action="<?php bloginfo('url'); ?>">
                <input placeholder="Search..." type="text" name="s">
                <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
              </form>
            </div>
            <!--End single sidebar-->
            <!--Start single sidebar-->
            <div class="single-sidebar wow fadeInUp" data-wow-delay="0s" data-wow-duration="1s" data-wow-offset="0">
              <div class="sec-title">
                <h3>Popular Posts</h3>
              </div>
              <ul class="popular-post">
                <li>
                  <div class="img-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sidebar/popular-post-1.png" alt="Awesome Image">
                    <div class="overlay-style-one">
                      <div class="box">
                        <div class="content">
                          <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="title-holder">
                    <a href="#"><h5 class="post-title">Massage theraphy for <br>managing stress</h5></a>
                    <h6 class="post-date">February 14, 2017</h6>
                  </div>
                </li>
                <li>
                  <div class="img-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sidebar/popular-post-2.png" alt="Awesome Image">
                    <div class="overlay-style-one">
                      <div class="box">
                        <div class="content">
                          <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="title-holder">
                    <a href="#"><h5 class="post-title">When massage may not be <br>a good for you</h5></a>
                    <h6 class="post-date">February 05, 2017</h6>
                  </div>
                </li>
                <li>
                  <div class="img-holder">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/sidebar/popular-post-3.png" alt="Awesome Image">
                    <div class="overlay-style-one">
                      <div class="box">
                        <div class="content">
                          <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="title-holder">
                    <a href="#"><h5 class="post-title">New thereaphy center opened <br>at newyork city</h5></a>
                    <h6 class="post-date">January 22, 2017</h6>
                  </div>
                </li>
              </ul>
            </div>
            <!--End single sidebar-->
          </div>
        </div>
        <!--End Sidebar Wrapper-->
      </div>
    </div>
  </section>
  <!--End blog Single area-->

<?php
  get_footer();