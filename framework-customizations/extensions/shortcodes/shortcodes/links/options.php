<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'text',
		'label'  => __( 'Link header', 'fw' ),
		'desc'   => __( 'Enter a header of link', 'fw' )
	),
	'link_class' => array(
		'type'   => 'text',
		'label'  => __( 'Link class', 'fw' ),
		'desc'   => __( 'Enter a class of link', 'fw' )
	),
	'url' => array(
		'type'   => 'text',
		'label'  => __( 'URL', 'fw' ),
		'desc'   => __( 'Enter URL of link', 'fw' )
	),
	'icon' => array(
		'type'   => 'text',
		'label'  => __( 'Icon', 'fw' ),
		'desc'   => __( 'Enter the class of icon', 'fw' )
	),
);
