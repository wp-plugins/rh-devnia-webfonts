<?php 
    /*
    Plugin Name: RH Devnia webfont
    Plugin URI: http://www.rh.net.sa
    Description: Plugin for change arabic web fonts without change any thing in theme
    Author: Waheed Ezzat
    Version: 1.0
    Author URI: http://www.devnia.com/wp-plugins
    */
function plugin_name_load_plugin_textdomain() {

	$domain = 'devnia_trdom';
	$locale = apply_filters( 'plugin_locale', get_locale(), $domain );

	if ( $loaded = load_textdomain( $domain, trailingslashit( WP_LANG_DIR ) . $domain . '/' . $domain . '-' . $locale . '.mo' ) ) {
		return $loaded;
	} else {
		load_plugin_textdomain( $domain, FALSE, basename( dirname( __FILE__ ) ) . '/languages/' );
	}

}
add_action( 'init', 'plugin_name_load_plugin_textdomain' );	
function devnia_getproducts() {
	//Connect to the OSCommerce database

	$retval = '';

		
		//Get product image, name and URL
		$font_face = get_option('devnia_body_font');

		//Build the HTML code
		$retval .= '<link href="http://fonts.hosni.netdna-cdn.com/fonts/cdn/file_font/?font='.$font_face.'" rel="stylesheet">';
		$retval .= '<style>';
		$retval .= 'body{';
		$retval .= 'font-family:'.$font_face.' !important';
		$retval .= '}';
		$retval .= '</style>';
	
	return $retval;
}
function font_style() {
	echo '' . devnia_getproducts(). '';
}
add_action('wp_head','font_style');
//*************** design css ***************
function ui_kit() {
wp_enqueue_style('bootstrap-css', plugins_url('bootstrap/css/bootstrap.css', __FILE__));
wp_enqueue_style('flat-ui-kit', plugins_url('css/flat-ui.css', __FILE__));
}
add_action('admin_print_styles', 'ui_kit');
//*************** Admin function ***************
	
function devnia_admin() {
    include('change_font.php');
}	
function devnia_admin_actions() {
    add_options_page("RH Devnia arabic webfonts", "RH Devnia webfonts", 1, "change_font", "devnia_admin");
}
 
add_action('admin_menu', 'devnia_admin_actions');

?>