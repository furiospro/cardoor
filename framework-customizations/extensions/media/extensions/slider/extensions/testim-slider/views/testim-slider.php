<?php if (!defined('FW')) die('Forbidden'); ?>
<?php if(isset($data['slides'])):?>
<div class="testimonial-content">
<?php foreach($data['slides'] as $slide):?>

		<div class="single-testimonial">
			<p><?php echo $slide['desc']; ?></p>
			<h3><?php echo $slide['name']; ?></h3>
			<div class="client-logo">
				<img src="<?php echo $slide['src']; ?>">
			</div>
		</div>

<?php endforeach; ?>
</div>
<?php endif; ?>
