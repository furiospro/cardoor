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
	'post_class' =>array(
		'type'=> 'text',
		'label'=>__('Post class','fw'),
		'desc'=> __('Enter a class for post','fw')
	),
	'subpost_class' =>array(
		'type'=> 'text',
		'label'=>__('Subcontainer class of post','fw'),
		'desc'=> __('Enter a class of subcontainer','fw')
	),
	'thumb_class' => array(
		'type'   => 'text',
		'label'  => __( 'Class of thumbnails block', 'fw' ),
		'desc'   => __( 'Enter class for thumbnails block', 'fw' )
	),
	'content_class' =>array(
		'type'=> 'text',
		'label'=>__('Container class of post content','fw'),
		'desc'=> __('Enter a class of container','fw')
	),
	'label' =>array(
		'type'=> 'text',
		'label'=>__('Post type','fw'),
		'desc'=> __('Enter a post type','fw')
	),
	'href_class' =>array(
		'type'=> 'text',
		'label'=>__('Class link','fw'),
		'desc'=> __('Enter a class of link','fw')
	)
);