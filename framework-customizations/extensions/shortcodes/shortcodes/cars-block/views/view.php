<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
/*$query = new WP_Query([
		'post_type'=>$atts['label'],
		'meta_query'=>array(array('key'=>'price','value'=>55)),
		'order'=>'ASC'
]);*/

$query = new WP_Query([
	'post_type'=>$atts['label'],
	'order'=>'ASC'
]);
?>

<div class="tab-content" id="myTabContent">

	<div class="tab-pane fade active show" id="popular_cars" role="tabpanel" aria-labelledby="home-tab">
		<
		<div class="popular-cars-wrap">

			<div class="popucar-menu text-center">
				<a href="#" data-filter="*" class="active">all</a>
				<a href="#" data-filter=".conver" class="">Conver</a>
				<a href="#" data-filter=".hatchback" class="">Truck</a>
				<a href="#" data-filter=".mpv" class="">MPV</a>
				<a href="#" data-filter=".sedan" class="">Sedan</a>
				<a href="#" data-filter=".suv" class="">SUV</a>
			</div>
			<?php
			if(isset($atts['make_cont']) && $atts['make_cont']==1):?>
			<div class="<?php echo $atts['container_class']; ?>">
				<?php endif; ?>
				<?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
					<?php
					$type = get_post_meta(get_the_ID(),'type',true);
					$year = get_post_meta(get_the_ID(),'year',true);
					$trans = get_post_meta(get_the_ID(),'transmission',true);
					$opt = get_post_meta(get_the_ID(),'option',true);
					$price = get_post_meta(get_the_ID(),'price',true); ?>
					<div class="<?php echo $atts['post_class']; ?> <?php echo $type; ?>">
						<div class="<?php echo $atts['subpost_class']; ?>">
							<div class="<?php echo $atts['thumb_class']; ?>">
								<a href="<?php the_permalink(); ?>" <?php if(!empty($atts['href_class'])): ?> class="<?php echo $atts['href_class']; ?>"<?php endif; ?>>
									<div class="<?php echo $atts['class']; ?>">
										<?php if(has_post_thumbnail()): ?>

											<img src="<?php the_post_thumbnail_url(); ?>">

										<?php endif; ?>
									</div></a>
							</div>
							<div class="p-car-content">
								<h3>
									<a href="#"><?php the_title(); ?></a>
									<span class="price">
					 <i class="fa fa-tag"><?php echo $price; ?>/DAY</i>
				 </span>
								</h3>
								<h5><?php echo $type;?></h5>
								<div class="p-car-feature">
									<a href="#"><?php echo $year; ?></a>
									<a href="#"><?php echo $trans; ?></a>
									<a href="#"><?php echo $opt; ?></a>
								</div>
							</div>
						</div>
					</div>
				<?php endwhile;?>
					<?php wp_reset_postdata();?>
				<?php endif;?>
				<?php if(isset($atts['make_cont']) && $atts['make_cont']==1): ?>
			</div><?php endif; ?>
		</div>
	</div>
</div>


