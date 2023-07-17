<!-- when someone click on the single blog post then this file code will be excuted. if this file is not exist then the index.php file code will be excuted. those this file is exsit that's why it overwirte the default behavour -->

<?php
while(have_posts()){
  the_post();?> 
  <h2><?php the_title() ?> </h2>
  <?php the_content()?> 
  


<?php
}