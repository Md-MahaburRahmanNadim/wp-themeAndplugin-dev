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
    $parentId = wp_get_post_parent_id(get_the_ID());// it's return the parent id of child page. if it's in a parent page then it's return 0.
    // echo $parentId;
    
    if($parentId){?> <!-- this if statement prevent sowing the bread cum to the parent pages and also those dont have any child page -->
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
<!-- now we are going to show this side bar only one those pages where they are parent or child pages -->
    <?php 
    // finding a page is a parent or not
        $isParent = get_pages([
          'child_of' => get_the_ID() // if current page has a children then it will return all the children page as a li of current page. if curren page dont have any children page then its going to return null or zero
        ]);
    if($parentId || $isParent ){?> <!-- this if statement prevent showing the side bar to those pages there dont have any child page 
  
  by doing this statement we asking php that if the cumment page has a parent or if it is a parent, all we need to do to check for that 
  -->

      <div class="page-links">
        <h2 class="page-links__title"><a href="<?php echo get_permalink($parentId) ?>"><?php echo get_the_title($parentId)?></a></h2>
        <ul class="min-list">
          <!-- <li class="current_page_item"><a href="#">Our History</a></li>
          <li><a href="#">Our Goals</a></li> 
        we dont want this child page list write in hard code so we use wp_list_pages() function to do this
        
        -->
        <?php
        if($parentId){
          $findChildrenOf = $parentId;
        }else{
          $findChildrenOf = get_the_ID();
        }
        wp_list_pages([
          'title_li' => NULL, // it's remove the title of li
          'child_of' => $findChildrenOf,
          // $parentId ? $parentId : get_the_ID() // it's show the child page of parent page. Here we use ternary operator. if parent id is true then it's return parent id otherwise it's return current page id. In parent page it's return the parent page id but in child page it's return the parent page id.
          'sort_column'=> 'menu_order' // to short the menu it by giving the order number in the page edit page
        ])  
        ?>
        </ul>
      </div>
<?php }?>
      <div class="generic-content">
       <?php the_content() ?>
      </div>
    </div>

  <?php
 }
 get_footer( );