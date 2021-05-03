<?php if (!is_active_sidebar('cardoor_sidebar')) return; ?>
<?php $query= new WP_Query([
		'category_name'=>'tips',
		'order'=>'ASC'
]) ?>
<div class="col-md-4 col-lg-4">
		<div class="sidebar-content-wrap">
			<!-- Single Sidebar Start -->
			<div class="single-sidebar">
				<h3>For More Informations</h3>

				<div class="sidebar-body">
					<p><i class="fa fa-mobile"></i> <?php echo get_theme_mod('phone'); ?></p>
					<p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
				</div>
			</div>
			<!-- Single Sidebar End -->

			<!-- Single Sidebar Start -->
			<div class="single-sidebar">
				<h3>Rental Tips</h3>

				<div class="sidebar-body">
					<ul class="recent-tips">
						<?php if($query->have_posts()): while($query->have_posts()):$query->the_post(); ?>
						<li class="single-recent-tips">
							<div class="recent-tip-thum">
								<a href="#"><img src="<?php the_post_thumbnail_url(); ?>" alt="JSOFT"></a>
							</div>
							<div class="recent-tip-body">
								<h4><a href="#"><?php the_title(); ?></a></h4>
								<span class="date">February 5, 2018</span>
							</div>
						</li>
						<?php endwhile; ?>
						<?php endif; ?>

					</ul>
				</div>
			</div>
			<!-- Single Sidebar End -->

			<!-- Single Sidebar Start -->
			<div class="single-sidebar">
				<h3>Connect with Us</h3>

				<div class="sidebar-body">
					<div class="social-icons text-center">
						<a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="#" target="_blank"><i class="fa fa-behance"></i></a>
						<a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
						<a href="#" target="_blank"><i class="fa fa-dribbble"></i></a>
					</div>
				</div>
			</div>
			<!-- Single Sidebar End -->
		</div>

</div>
