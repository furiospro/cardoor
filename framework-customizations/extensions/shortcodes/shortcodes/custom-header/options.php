<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'heading' => array(
		'type'    => 'select',
		'label'   => __('Heading Size', 'fw'),
		'choices' => array(
			'h1' => 'H1',
			'h2' => 'H2',
			'h3' => 'H3',
			'h4' => 'H4',
			'h5' => 'H5',
			'h6' => 'H6',
		)
	),
	'sub_heading' => array(
		'type'    => 'select',
		'label'   => __('Sub Heading Size', 'fw'),
		'choices' => array(
			'p' => 'p',
			'span' => 'span'
		)
	),
	'header_class' => array(
		'type'   => 'text',
		'label'  => __( 'Class of header', 'fw' ),
		'desc'   => __( 'Enter class for header title', 'fw' )
	),
	'subheader_class' => array(
		'type'   => 'text',
		'label'  => __( 'Class of subheader', 'fw' ),
		'desc'   => __( 'Enter class for header subtitle', 'fw' )
	),
	'label' =>array(
		'type'=> 'text',
		'label'=>__('Title Header','fw'),
		'desc'=> __('Enter a Header Title','fw')
	),
	'sublabel' =>array(
		'type'=> 'text',
		'label'=>__('Subtitle Header','fw'),
		'desc'=> __('Enter a Header Subtitle','fw')
	)
);