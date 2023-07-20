<!DOCTYPE html>
<!-- <html lang="en"> it's hard coded value for langaue. Now if we change the language in my wp admin dashboard here langauge value will not be change. But if we use a wp fn then it will change the value when we change the value in the admin dashboard -->
<html <?php language_attributes() ?>>
  
<head>
  <meta name="charset" content="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--this tag enable the responsive code to the our web page if we have responsive css code inside the css file. but if we dont have any responsive code this will will dont do anything -->
  <?php wp_head(); ?> <!-- this function pull out the all of the content related to the heaer --> 
</head>
<body <?php body_class() ?>>

<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
          <a href="<?php echo site_url();?>"><strong>Fictional</strong> University</a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
              <li><a href="<?php echo site_url('/about-us') ?>">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav>
          <div class="site-header__util">
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>