<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
?>
<div class="display-table-cell">
	<div class="slider-right-text">

		<<?php echo esc_attr($atts['heading']);?><?php if(isset($atts['header_class'])):?> class="<?php echo $atts['header_class'];?>
		<?php endif;?>">

		<?php echo get_theme_mod('header');?>
	</<?php echo esc_attr($atts['heading']);?>>

		<<?php echo esc_attr($atts['sub_heading']);?>>
	<?php echo get_theme_mod('subheader');?>
</<?php echo esc_attr($atts['sub_heading']);?>>
	</div>
</div>

