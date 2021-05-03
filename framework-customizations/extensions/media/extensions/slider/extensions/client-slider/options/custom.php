<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'title' => array(
		'type'  => 'text',
		'label' => __( 'Title', 'fw' ),
		'value' => '',
		'desc'  => __( 'Choose a title for your slide.', 'fw' )
	),
	'textarea' => array(
		'type'  => 'text',
		'label' => __( 'Textarea', 'fw' ),
		'value' => '',
		'desc'  => __( 'Choose a textarea for your slide.', 'fw' )
	),
	'link' => array(
		'type'  => 'text',
		'label' => __( 'Link', 'fw' ),
		'value' => '',
		'desc'  => __( 'Choose a link for your slide.', 'fw' )
	)
);

