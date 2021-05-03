<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div<?php if(isset($atts['clear_class']) &&!empty($atts['clear_class'])): ?> class="<?php echo $atts['clear_class']; ?>"<?php endif; ?>
	<?php if(isset($atts['id'])): ?> id="<?php echo $atts['id'];?>"<?php endif; ?>></div>