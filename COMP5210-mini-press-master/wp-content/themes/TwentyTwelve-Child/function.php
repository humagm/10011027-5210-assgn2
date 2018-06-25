<?php
function my_theme_enqueue_styles() {
// This theme uses wp_nav_menu() in two locations.  
register_nav_menus( array(  
    'primary' => __( 'Primary Navigation', 'twentytwelve' ),  
    'secondary' => __('Secondary Navigation', 'twentytwelve')  
  ) );
    $parent_style = 'parent-style'; // This is 'twentytwelve-style' for the Twenty Twelve theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<?php if ( function_exists("sfp_page_plugin") ) {
    $args = array(
        'url'           => 'http://www.facebook.com/topdevs.net',
        'width'     => '300',
        'hide_cover'=> true,
        'locale'        => 'en_US'
    );
    sfp_page_plugin( $args );
} ?>