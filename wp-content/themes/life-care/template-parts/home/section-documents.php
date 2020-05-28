<?php
  $documents_section_title = get_field('documents_section_title');
  $documents = get_field('documents');

  $all_documents = 0;
  if($documents == 'all'){
    $args = array(
      'post_type' => 'documents',
      'posts_per_page' => -1
    );

    $all_documents = get_posts($args);
  } else {
    if($documents == 'selective'){
      $all_documents = get_field('select_documents');
    }
  }
?>
<section class="procedures-area" >
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
      <h1><?php echo $documents_section_title; ?></h1>
      <div class="border mar0auto">
        <span class="flaticon-shape"></span>
      </div>
    </div>

    <?php if(is_array($all_documents) && count($all_documents) > 0){ ?>
      <div id="owl-demo" class="owl-carousel">
        <?php foreach($all_documents as $single_document){ ?>
          <div class="item">
            <div class="doc-thumb">
              <a href="<?php echo get_field('attach_document', $single_document->ID); ?>" download>
                <div class="custom-icon-holder">
                  <i class="fa fa-file"></i>
                </div>
                <p><?php echo $single_document->post_title; ?></p>
              </a>
            </div>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
  </div>
</section>