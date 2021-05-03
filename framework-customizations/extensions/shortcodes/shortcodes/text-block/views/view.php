<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
if(isset($atts['include']) && $atts['include'] ==1){

	include get_template_directory().'/templates/'.$atts['file_name'].'.php';
}else {
	echo do_shortcode($atts['text']);
}