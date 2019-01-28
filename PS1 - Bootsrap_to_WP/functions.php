<?php

require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

register_nav_menus(array(
    'primary' => __('Primary Menu')
));

add_theme_support( 'post-thumbnails' );
add_theme_support('menus');

?>
