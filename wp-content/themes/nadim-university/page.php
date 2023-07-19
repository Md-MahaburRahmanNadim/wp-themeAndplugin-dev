 <?php
 get_header();
 while(have_posts()){
  the_post();?>
   <div class="page-banner">
      <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg') ?>)"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title()?></h1>
        <div class="page-banner__intro">
          <p>Dont forget to change it</p>
        </div>
      </div>
    </div>
<!-- this is the parent child relationship div -->
<!-- 
hi github co lab 
please explain get_the_ID() and wp_get_post_parent_id()


 -->

  <div class="container container--narrow page-section">
    <?php 
    $parentId = wp_get_post_parent_id(get_the_ID());
    
    if($parentId){?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p>
          <a class="metabox__blog-home-link" href="<?php echo get_the_permalink($parentId)?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentId)?></a> <span class="metabox__main"><?php the_title()?></span>
        </p>
      </div>

  <?php
  
} ?>
<!-- <?php echo wp_get_post_parent_id();
echo get_the_ID(); // test code
?>  -->

      <div class="page-links">
        <h2 class="page-links__title"><a href="#">About Us</a></h2>
        <ul class="min-list">
          <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li>
        </ul>
      </div>

      <div class="generic-content">
       <?php the_content() ?>
      </div>
    </div>

  <?php
 }
 get_footer( );