<?php

function wpb_theme_setup(){

    register_nav_menus(array(
            'primary'=> __('Primary Menu')

    ));
}

add_action('after_setup_theme', 'wpb_theme_setup');

?>