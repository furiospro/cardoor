<?php
$query = new WP_Query([
	'post_type'=>'car',
	'order'=>'ASC'
])
?>
<?php get_sidebar(); ?>
<div class="col">
	<div class="car-list-content">
		<div class="row">
			<?php if($query->have_posts()): while($query->have_posts()): $query->the_post();
				$fuel = get_post_meta(get_the_ID(),'fuel',true);
				$gear = get_post_meta(get_the_ID(),'transmission',true);
				$options= get_post_meta(get_the_ID(),'option',true);
				$options = explode(PHP_EOL,$options);
			?>

				<div class="single-car-wrap">
					<div class="car-list-thumb" style="background-image:url(<?php the_post_thumbnail_url(); ?>);">
					</div>
					<div class="car-list-info without-bar">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<h5><?php echo get_post_meta(get_the_ID(),'price',true) ?>$ Rent /per a day</h5>
						<p>Vivamus eget nibh. Etiam cursus leo vel metus. Nulla facilisi. Aenean inorci luctus et ultrices posuere cubilia.</p>
						<ul class="car-info-list">
							<?php if(in_array('AIR CONDITION',$options)){$opt = 'AC';}else{$opt = $options[0];} ?>
							<li><?php echo $opt; ?></li>
							<li><?php echo ucfirst($fuel); ?></li>
							<li><?php echo ucfirst($gear); ?></li>
						</ul>
						<p class="rating">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star unmark"></i>
						</p>
						<a href="#" class="rent-btn">Book It</a>
					</div>
				</div>

			<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</div>
