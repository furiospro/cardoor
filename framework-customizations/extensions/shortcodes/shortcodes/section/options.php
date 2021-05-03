<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'video' => array(
		'label' => __('Background Video', 'fw'),
		'desc'  => __('Insert Video URL to embed this video', 'fw'),
		'type'  => 'text',
	),
	'custom_id' => array(
		'label' => __('Custom Section ID', 'cardoor'),
		'type'  => 'text',
	),
	'custom_class' => array(
		'label' => __('Custom Section class', 'cardoor'),
		'type'  => 'text',
	),
	'make_wrap_row' => array(
		'label' => __('Make Wrap Block', 'cardoor'),
		'type'  => 'checkbox',
	),
	'wrap_class' => array(
		'label' => __('Custom Wrap class', 'cardoor'),
		'type'  => 'text',
	),
	'custom_cont_class' => array(
		'label' => __('Custom Container class', 'cardoor'),
		'type'  => 'text',
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
	)
);
