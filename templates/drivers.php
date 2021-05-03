<?php


$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
$arOrder = [
	'post_type' =>'drivers',
	'order'=>'ASC',
	'posts_per_page'=> 3,
	'paged' => $paged
];
$query = new WP_Query($arOrder);
if($query->have_posts()):?>
<div class="row">
<?php
	while($query->have_posts()):
	$query->the_post();
	$position = get_post_meta(get_the_ID(),'position',true);
?>
			<div class="col-lg-4 col-md-6">
				<div class="single-driver-member">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="Raju Ahammad">
					<div class="driver-mem-info">
						<div class="driver-mem-sicons">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</div>
						<h4><?php the_title(); ?><span><?php echo $position; ?></span></h4>
					</div>
				</div>
			</div>
<?php endwhile;
//wp_reset_postdata();

?>
	<div class="col-lg-12">
		<div class="page-pagi">
			<nav aria-label="Page navigation example">

					<?php

					$l =  get_pagenum_link().'%_%' ;

					$args = [
						'base'    => $l,
						'prev_text'=>'Previous',
						'next_text' => 'Next',
						'format'  => 'page/%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total'   => $query->max_num_pages,
						'type'=> 'list'
					];
					echo  paginate_links($args) ;
					?>

			</nav>
		</div>
	</div>

</div>
<?php endif;


