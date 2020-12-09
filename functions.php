<?php
// add nav menus
function wpb_theme_setup(){

    register_nav_menus(array(
            'primary'=> __('Primary Menu')

    ));
}
// for class nav menus
function wp_custom_list_class($atts, $items, $args){

    $class = 'p-2 text-muted';
    $atts['class'] = $class;
    return $atts;

}

// web hooks
add_action('after_setup_theme', 'wpb_theme_setup'); //call back
add_filter('nav_menu_link_attributes', 'wp_custom_list_class', 10 , 3);

?>