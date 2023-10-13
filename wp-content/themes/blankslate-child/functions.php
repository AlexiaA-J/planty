<?php

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

/* Rajout d'un second emplacement Menu */

register_nav_menus(array('Bottom' => 'Footer'));

/* Rajout de l'option Logo dans le customizer */

function your_theme_new_customizer_settings($wp_customize) {
    $wp_customize->add_setting('your_theme_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
    array(
    'label' => 'Upload Logo',
    'section' => 'title_tagline',
    'settings' => 'your_theme_logo',
    ) ) );
    }
    add_action('customize_register', 'your_theme_new_customizer_settings');


    function add_admin_button($items, $args){
        if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        $admin_link = '<li class="menu-item"><a href="http://localhost/Planty/wp-admin/">Admin</a></li>';
        $menu_items = explode('</li>', $items);
        $insert_index = 1;
        array_splice($menu_items, $insert_index, 0, $admin_link);
        $items = implode('</li>', $menu_items);
        }
    return $items;
}

add_filter('wp_nav_menu_items', 'add_admin_button', 10, 2);

add_filter('wpcf7_autop_or_not', '__return_false');
