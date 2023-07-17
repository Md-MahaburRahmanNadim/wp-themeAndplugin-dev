<!-- when someone click on the single blog post then this file code will be excuted. if this file is not exist then the index.php file code will be excuted. those this file is exsit that's why it overwirte the default behavour -->

<?php
while(have_posts()){
  the_post();?> 
  <h2><?php the_title() ?> </h2>
  <?php the_content()?> 



<?php
}

// let's open a page and see the result. we saw that this page also porwer by the index.php file code. that's why the title has a link. but we don't want that. we want to show the title without the link. how can we do that? for that we have to create a new file called page.php in the root directory of our theme. and copy the code from index.php and paste it in the page.php file. and remove the href from the title. and we are done.