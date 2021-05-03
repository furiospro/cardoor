<?php
$str = get_the_title();
//$str = preg_match('/^(\w*)\s/i',$str,$match);
$str = strtolower($str);
$arOrder = [
	'post_type'=>'tariffs',
	'orderby'=>'priority',
	'order'=>'ASC'
];
if(isset($atts['posts_count'])) $arOrder['posts_per_page'] = $atts['posts_count'];
$query = new WP_Query($arOrder);
?>
<?php ($str == 'pricing') ? $class = 'col-lg-6' : $class = 'col-lg-4';?>
<?php if($str == 'pricing'):?>
<div class="col pricing-details-content" style="display:flex;flex-wrap:wrap">
<?php endif; ?>
<?php
if($query->have_posts()){
	while($query->have_posts()){
		$query->the_post();
		$price = get_post_meta(get_the_ID(),'price',true);
		$period = get_post_meta(get_the_ID(),'period',true);
		$options= get_post_meta(get_the_ID(),'options',true);
		$options = explode(PHP_EOL,$options);?>

			<div class="<?php echo $class; ?> col-md-6 text-center">
				<div class="single-pricing-table">
					<h3><?php strtoupper(the_title()); ?></h3>
					<h2><?php echo  strtoupper($price); ?></h2>
					<h5><?php echo strtoupper($period);?></h5>

					<ul class="package-list <?php if(($str == 'pricing')) echo 'pric';?>">
						<?php for($i=0; $i < count($options);$i++): ?>
							<li><?php echo strtoupper($options[$i]); ?></li>
						<?php endfor; ?>
					</ul>
				</div>
			</div>


	<?php }
} ?>
<?php if($str == 'pricing'):?>
</div><?php get_sidebar(); ?>
<?php endif; ?>

