<!-- lets say we want to show all the blog post in the index page of our webstie. how can we do that? -->

<?php
while(have_posts()){// 
  the_post(); ?> <!--out the php mode and write html code while we are in the loop -->
  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></h2>
  <?php the_content()?>
  <hr>
<?php // back to php mode
};