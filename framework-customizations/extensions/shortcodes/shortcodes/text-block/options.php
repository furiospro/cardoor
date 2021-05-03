<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'text' => array(
		'type'   => 'wp-editor',
		'label'  => __( 'Content', 'fw' ),
		'desc'   => __( 'Enter some content for this texblock', 'fw' )
	),
	'include' => array(
		'type'   => 'checkbox',
		'label'  => __( 'Do you want to include a file', 'fw' ),
		'value' => ''
	),
	'file_name' => array(
		'type'   => 'text',
		'label'  => __( 'File Name', 'fw' ),
		'desc'   => __( 'Enter the name of the include file', 'fw' )
	),
	'posts_count' => array(
		'type'   => 'text',
		'label'  => __( 'Count of posts', 'fw' ),
		'desc'   => __( 'Enter amount of the include posts', 'fw' )
	)
);
