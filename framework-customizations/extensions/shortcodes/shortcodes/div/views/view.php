<?php if (!defined('FW')) die('Forbidden');
/**
* @var array $atts
*/?>
<?php if(isset($atts['custom_class'])){
	$class = $atts['custom_class'];
} ?>
<?php if(isset($atts['custom_id'])){
	$id = $atts['custom_id'];
} ?>

<div <?php if(!empty($class)): ?>class="<?php echo $class ?>" <?php endif; if(!empty($id)): ?>id="<?php echo $id?>"<?php endif; ?>></div>

