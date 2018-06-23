<?php

Function child_enqueue_scripts() {
	wp_register_style( 'childtheme_style', get_stylesheet_directory_uri() . '/style.css'  );
	wp_enqueue_style( 'childtheme_style' );

	if ( is_front_page() ) {
    // CSS
    wp_register_style( 'bxSliderCss', get_stylesheet_directory_uri() . '/assets/css/bxSlider.css'  );
    wp_enqueue_style( 'bxSliderCss' );

    //JS
  wp_register_script('bxSlider', get_stylesheet_directory_uri() . '/assets/js/bxSlider.js', array('jquery'),'',true );
	wp_register_script('bxSettings', get_stylesheet_directory_uri() . '/assets/js/bxSettings.js', array('bxSlider'),'',true );
  wp_enqueue_script('bxSlider');
  wp_enqueue_script('bxSettings');
	}

	wp_register_script('illdychild-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js', '','',true );
	wp_enqueue_script('illdychild-scripts');

}


add_action( 'wp_enqueue_scripts', 'child_enqueue_scripts');

function remove_css_js_ver( $src ) {
if( strpos( $src, '?ver=' ) )
$src = remove_query_arg( 'ver', $src );
return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_css_js_ver', 10, 2 );




//Careers 4 cols
function careers_func( $atts ){
	$a = shortcode_atts( array(
			 'title' => null,
			 'subtitle' => null,
			 'form_name' => null
	 ), $atts );
	return "foo and bar";
}
add_shortcode( 'careers', 'careers_func' );


//Post type Careers
function careers_post_type() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Careers' ),
        'singular_name' => __( 'Career' )
      ),
      'public' => true,
      'has_archive' => true,
			'supports' => array( 'thumbnail','title', 'excerpt' ),
    )
  );
}
add_action( 'init', 'careers_post_type' );

//Post type Careers
function client_post_type() {
  register_post_type( 'client_post_type',
    array(
      'labels' => array(
        'name' => __( 'Clients' ),
        'singular_name' => __( 'Client' )
      ),
      'public' => true,
      'has_archive' => true,
			'supports' => array( 'thumbnail','title'),
    )
  );
}
add_action( 'init', 'client_post_type' );


//Footer sidebar

$args_footer_sidebar_menu = array(
	'name'          => __( 'Copyright Menu', 'illdy-child' ),
	'id'            => 'footer-sidebar-menu',
	'before_widget' => '<div class="copy-menu">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>' );
register_sidebar( $args_footer_sidebar_menu );
?>
