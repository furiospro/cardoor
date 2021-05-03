<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'include' => array(
		'type'   => 'checkbox',
		'label'  => __( 'Do you want to include a file', 'fw' ),
		'value' => ''
	),
	'file_name' => array(
		'type'   => 'text',
		'label'  => __( 'File Name', 'fw' ),
		'desc'   => __( 'Enter the name of the include file', 'fw' )
	)
);
