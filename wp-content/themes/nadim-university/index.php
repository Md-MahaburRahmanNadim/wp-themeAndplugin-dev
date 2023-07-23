<!-- <h1>this is from index.php file and here we need to build our blog page as we want</h1>
this file is control the blog page content domain.com/blog url content
-->

<?php
get_header();
?>
<div class="page-banner">
  <div class="page-banner__bg-image"
    style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>)"></div>
  <div class="page-banner__content container container--narrow">
    <h1 class="page-banner__title">Welcome To Our Blog!</h1>
    <div class="page-banner__intro">
      <p>Keep up with our latest news</p>
    </div>
  </div>
</div>
<div class="container container--narrow page-section">
  <?php
  while(have_posts()){
    the_post();?>
  <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink() ?>"><?php the_title()?></a>
  </h2>
  <div class="metabox">
    <!-- <p>Posted by AuthorName on date in Catacory</p>
  this is hard coded and we need to dynamic this-->
    <p>Posted by <?php the_author_posts_link()?> on <?php the_time('n.j.y' ) ?> in
      <?php echo get_the_category_list(', ' )?>
    </p>
  </div>
  <div class="generic-content">
    <?php the_excerpt()?>
    <p><a class="btn btn--blue" href="<?php the_permalink()?>"> Continue To Read &raquo;</a></p>
  </div>

  <?php
  }
 ?>
  <p style="background-color: green;color:white;display:inline-block;padding:10px;"> <?php echo paginate_links() ?></p>
  <?php
  ?>

  <?php
get_footer();
?>