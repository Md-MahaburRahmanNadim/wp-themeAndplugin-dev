<?php






function university_files(){
  wp_enqueue_script('slider-js-file',get_theme_file_uri('/build/index.js'),['jquery'], 1.0, true);
wp_enqueue_style('custom-font', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
wp_enqueue_style('fontawesome-style', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  wp_enqueue_style('university_sub_style', get_theme_file_uri('/build/index.css'));
  // wp_enqueue_style('nicknameOfOUrsheet', pathOfThatFile)
  wp_enqueue_style('university_main_styles', get_theme_file_uri('/build/style-index.css')); // this function will inject the css file in the header
  // for js file
  // wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true); // this function will inject the js file in the footer
}


add_action('wp_enqueue_scripts', 'university_files'); // this function will inject the css file in the header

// add_action('moment', 'onthatmoment-this-fn-will-run');


function university_features(){
  add_theme_support('title-tag');
  /**
   param string $feature
The feature being added. Likely core values include:

'admin-bar'
'align-wide'
'automatic-feed-links'
'core-block-patterns'
'custom-background'
'custom-header'
'custom-line-height'
'custom-logo'
'customize-selective-refresh-widgets'
'custom-spacing'
'custom-units'
'dark-editor-style'
'disable-custom-colors'
'disable-custom-font-sizes'
'editor-color-palette'
'editor-gradient-presets'
'editor-font-sizes'
'editor-styles'
'featured-content'
'html5'
'menus'
'post-formats'
'post-thumbnails'
'responsive-embeds'
'starter-content'
'title-tag'
'wp-block-styles'
'widgets'
'widgets-block-editor
   */
}

add_action('after_setup_theme','university_features');