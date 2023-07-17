<!-- lets say we want to show all the blog post in the index page of our webstie. how can we do that? -->

<?php
while(have_posts()){// 
  the_post(); ?> <!--out the php mode and write html code while we are in the loop -->
  <h2><a href="<?php the_permalink() ?>"><?php the_title() ?> </a></h2>
  <?php the_content()?>
  <hr>
<?php // back to php mode
};

// another task is let's say when we go to the single page of a blog post we want to show the title of the blog post and the content of the blog post. and remove the href from the title. how can we do that? 

// for that problem we need to create a new file called single.php in the root directory of our theme. and copy the code from index.php and paste it in the single.php file. and remove the href from the title. and we are done.