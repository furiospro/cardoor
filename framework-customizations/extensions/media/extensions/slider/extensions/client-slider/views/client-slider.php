<?php if (!defined('FW')) die('Forbidden'); ?>
<?php if(isset($data['slides'])):?>
<div class="partner-content-wrap">
<?php foreach($data['slides'] as $slide):?>
	<div class="single-partner">
		<div class="display-table">
			<div class="display-table-cell">
				<img src="<?php echo $slide['src'] ?>" alt="JSOFT">
			</div>
		</div>
	</div>
<?php endforeach; ?>
</div>
<?php endif; ?>
