<?php
if (!defined('FW')) die('Forbidden');

/**
 * @var FW_Extension_Shortcodes $shortcodes_extension
 */
$shortcodes_extension = fw_ext('shortcodes');

require $shortcodes_extension->get_shortcode('contact_form')->get_declared_path('/options.php');

$options[] = array(
	'g2' => array(
		'type'    => 'group',
		'options' => array(
			array(
				'placeholder' => array(
					'type'  => 'text',
					'label' => __( 'Placeholde', 'fw' ),
					'desc'  => __( 'This text will be used as field placeholder', 'fw' ),
				)
			),
			array(
				'name' => array(
					'type'  => 'text',
					'label' => __( 'Name', 'fw' ),
					'desc'  => __( 'This text will be used as field name', 'fw' ),
				)
			),
			array(
				'default_value' => array(
					'type'  => 'text',
					'label' => __( 'Default Value', 'fw' ),
					'desc'  => __( 'This text will be used as field default value', 'fw' ),
				)
			)
		)
	)
);