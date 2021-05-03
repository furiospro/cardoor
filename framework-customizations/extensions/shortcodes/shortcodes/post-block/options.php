<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'make_cont' =>array(
		'type'=> 'checkbox',
		'label'=>'Make a container for posts',
		'value'=>''
	),
	'container_class' =>array(
		'type'=> 'text',
		'label'=>__('Posts container class','fw'),
		'desc'=> __('Enter a class of container','fw')
	),
	'class' => array(
		'type'   => 'text',
		'label'  => __( 'Class of block', 'fw' ),
		'desc'   => __( 'Enter class for this texblock', 'fw' )
	),
	'label' =>array(
		'type'=> 'text',
		'label'=>__('Post category','fw'),
		'desc'=> __('Enter a category of post','fw')
	)
);