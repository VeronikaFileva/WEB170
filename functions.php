<?php
/*
Theme Name: Healthy
Theme URI: http://wordpress.org/themes/healthy
Author: Veronika Fileva
Author URI: http://veronikafileva.com/
Description: This is a little fun theme I created as my first wordpress upload experiment. I'm a new developer, forgive me the bugs!
Version: 1.0
Tags: green, salad, bugs 
*/

//Register My Sidebar

register_sidebar(array(
'before_widget' => '<div id="%1$s" class="widget %2$s">',
'after_widget' =>'</div>',
'before_title' => '<h2>',
'after_title' => '</h2>',
));

//Register My Menus
register_nav_menus(array('main-menu' => __( 'Main' ),) );

//Create Post Thumbnails
add_theme_support( 'post-thumbnails' );

?>