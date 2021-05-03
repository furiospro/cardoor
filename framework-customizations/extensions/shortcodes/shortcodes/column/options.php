<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'wrap_container'=>array(
		'type' => 'checkbox',
		'desk' => __('Wrap this block','fw'),
		'value'=> ''
	),
	'wrap_class'=>array(
		'type' => 'text',
		'label'=>__('Wrap Class'),
		'desk' => __('Class of wrapper','fw'),
	),
	'make_container'=>array(
		'type' => 'checkbox',
		'desk' => __('Создать блок','fw'),
		'value'=> ''
	),
	'text_block_class' => array(
		'type'  => 'text',
		'label' => __( 'Class of Additional Block', 'fw' ),
		'desc'  => __( 'Write the Class of Additional Block', 'fw' )
	),
	'custom_row_class'=>array(
		'type' => 'text',
		'label'=>__('Custom row class'),
		'desk' => __('Row Class','fw')
	),
	'custom_id'=>array(
		'type'=>'text',
		'label'=>__('Custom id')
	)

//		'left-choice' => array(
//			'value' => 'no',
//			'label' => __('No', 'fw'),
//		),
//		'right-choice' => array(
//			'value' => 'yes',
//			'label' => __('Yes', 'fw'),
//		),
);