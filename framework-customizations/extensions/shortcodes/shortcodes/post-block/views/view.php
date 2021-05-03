<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
$query = new WP_Query([
		'category_name'=>$atts['label'],
		'orderby'=>'views',
		'order'=>'ASC'
]);
if(isset($atts['make_cont']) && $atts['make_cont']==1):?>
<div class="<?php echo $atts['cotainer_class']; ?>">
	<?php endif; ?>
 	<?php if($query->have_posts()): while($query->have_posts()): $query->the_post();?>
 	<div class="col-lg-4 text-center">
		<!--<a href="<?php the_permalink(); ?>">-->
		<div class="<?php echo $atts['class']; ?>">
			<?php if(has_post_thumbnail()): ?>
			<div class="serv-blog">
				<img src="<?php the_post_thumbnail_url(); ?>">
			</div>
			<?php endif; ?>
			<?php the_content(); ?>

		</div><!--</a>-->
 	</div>
	<?php endwhile;?>
	<?php wp_reset_postdata();?>
	<?php endif;?>
	<?php if(isset($atts['make_cont']) && $atts['make_cont']==1): ?>
</div><?php endif; ?>
