<?php
# here is all functionsgi
// add nav menus
function wpb_theme_setup(){
    add_theme_support('post-thumbnails'); // added featured image here
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

//add a function to call a widget

function wpb_init_widgets($id) {
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="sidebar-module">',
        'after_widget' =>  '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}



//add a function for post length

function set_the_length() {
    return 45;
}



// web hooks
add_action('after_setup_theme', 'wpb_theme_setup'); //call back , for a theme set-up
add_action('widgets_init', 'wpb_init_widgets'); //call everytime initialize widget
add_filter('nav_menu_link_attributes', 'wp_custom_list_class', 10 , 3);
add_filter('excerpt_length','set_the_length' ); // web hooks for excerpt length

?>