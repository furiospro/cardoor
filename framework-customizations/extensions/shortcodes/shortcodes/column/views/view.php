<?php if (!defined('FW')) die('Forbidden');
$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');
?>
<?php if(isset($atts['wrap_class'])){
	$class = $atts['wrap_class'];
} ?>
<?php if(!empty($atts['text_block_class'])){
	$class_text_block = $atts['text_block_class'];
}else{
	$class_text_block = '';
}
?>

<?php if(isset($atts['wrap_container']) && $atts['wrap_container']==1): ?>
<div class="<?php echo $class; ?>"><?php endif; ?>


<?php if(isset($atts['make_container'])&& $atts['make_container']==1): ?>
<div class="<?php echo $class_text_block ?>">
	<div <?php if(!empty($atts['custom_row_class'])): ?>class="<?php
	echo $atts['custom_row_class']; ?>"<?php endif; ?>
		 <?php if(!empty($atts['custom_id'])): ?>id="<?php echo $atts['custom_id']; ?>"
	<?php endif; ?>>
		<?php echo do_shortcode($content); ?>
	</div>
</div>
<?php else:?>
	<div <?php if(!empty($atts['custom_row_class'])): ?>class="<?php
		echo $atts['custom_row_class']; ?>"<?php endif; ?>
		 <?php if(!empty($atts['custom_id'])): ?>id="<?php echo $atts['custom_id']; ?>"
	<?php endif; ?>>
		<?php echo do_shortcode($content); ?>
	</div>
<?php endif; ?>
	<?php if(isset($atts['wrap_container']) && $atts['wrap_container']==1): ?>
</div>
<?php endif; ?>

