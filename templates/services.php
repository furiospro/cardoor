<?php
$query = new WP_Query([
	'category_name'=>'services',
	'order'=>'ASC'
]);
if($query->have_posts()):
	$i =1;
?><div class="col-lg-12">
	<?php while($query->have_posts()):
		$query->the_post();
		if(has_post_thumbnail()){
			$img = get_the_post_thumbnail_url();
		}else{
			$img = 'https://picsum.photos/447/300';
		}
?>
	<div class="single-service-item">
		<div class="service-item-thumb <?php if($i%2 ==0){echo 'd-lg-none d-md-block';}; ?>" style="background-image:url(<?php echo $img; ?>)"></div>
		<div class="service-item-content">
			<h3><?php the_title(); ?></h3>
			<p><?php the_content(''); ?></p>
		</div>
		<?php if($i%2 ==0):?>
			<div class="service-item-thumb d-none d-lg-block d-md-none" style="background-image:url(<?php echo $img;?>)"></div>
		<?php endif; ?>
	</div>
<?php $i++; endwhile; ?>
<?php wp_reset_postdata(); ?>
</div>
<?php endif; ?>

