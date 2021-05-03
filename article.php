<?php
/*
 * Template name: article
 * Template post type: post, page
 */
 ?>
<?php get_header();?>
<?php while(have_posts()): the_post();
	$content = $post->post_content;

	function custom_strip_tags( $string, $remove_breaks = false ){

			$string = preg_replace( '/<img.*?>/si', '', $string );

			if ( $remove_breaks ) {
				$string = preg_replace( '/[\r\n\t ]+/', ' ', $string );
			}

			return trim( $string );

	}

	function get_images ($content) {
		$img =[];
		// Подключаем DOM parser
		include_once('simple_html_dom.php');

		$html = str_get_html($content); // получаем структуру DOM контента
		// Находим все изображения в контенте
		foreach($html->find('img') as $element) {
			$img[] =  $element->outertext;   // выводим изображения в виде html кода <img src="...">
		}
		return $img;
	}
	$img = get_images($content);
	$con = custom_strip_tags($content);
?>
<section id="page-title-area" class="section-padding overlay">
		<div class="container">
			<div class="row">
				<!-- Page Title Start -->
				<div class="col-lg-12">
					<div class="section-title  text-center">
						<h2><?php the_title(); ?></h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
					</div>
				</div>
				<!-- Page Title End -->
			</div>
		</div>
	</section>
<section id="car-list-area" class="section-padding">
		<div class="container">
			<div class="row">
				<!-- Car List Content Start -->
				<div class="col-lg-8">
					<div class="car-details-content">
						<h2><?php the_title(); ?></h2>
						<div class="car-preview-crousel">
							<?php for($i=0;$i<count($img);$i++): ?>
								<div class="single-car-preview">
									<?php echo $img[$i]; ?>
								</div>
							<?php endfor; ?>
						</div>
						<div class="car-details-info blog-content">
							<?php $cont = get_extended($con);
							echo apply_filters('the_content', $cont['extended']);;
							?>

							<div class="review-area">
								<h3>Write Your Comment</h3>
								<div class="review-form">
									<form action="index.html">
										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="name-input">
													<input type="text" placeholder="Full Name">
												</div>
											</div>

											<div class="col-lg-6 col-md-6">
												<div class="email-input">
													<input type="email" placeholder="Email Address">
												</div>
											</div>
										</div>

										<div class="message-input">
											<textarea name="review" cols="30" rows="5" placeholder="Message"></textarea>
										</div>

										<div class="input-submit">
											<button type="submit">Comment</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Car List Content End -->

				<!-- Sidebar Area Start -->
				<div class="col-lg-4">
					<div class="sidebar-content-wrap m-t-50">
						<!-- Single Sidebar Start -->
						<div class="single-sidebar">
							<h3>For More Informations</h3>

							<div class="sidebar-body">
								<p><i class="fa fa-mobile"></i> +8801816 277 243</p>
								<p><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</p>
							</div>
						</div>
						<!-- Single Sidebar End -->

						<!-- Single Sidebar Start -->
						<div class="single-sidebar">
							<h3>Rental Tips</h3>

							<div class="sidebar-body">
								<ul class="recent-tips">
									<li class="single-recent-tips">
										<div class="recent-tip-thum">
											<a href="#"><img src="assets/img/we-do/service1-img.png" alt="JSOFT"></a>
										</div>
										<div class="recent-tip-body">
											<h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
											<span class="date">February 5, 2018</span>
										</div>
									</li>

									<li class="single-recent-tips">
										<div class="recent-tip-thum">
											<a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
										</div>
										<div class="recent-tip-body">
											<h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
											<span class="date">February 5, 2018</span>
										</div>
									</li>

									<li class="single-recent-tips">
										<div class="recent-tip-thum">
											<a href="#"><img src="assets/img/we-do/service2-img.png" alt="JSOFT"></a>
										</div>
										<div class="recent-tip-body">
											<h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
											<span class="date">February 5, 2018</span>
										</div>
									</li>

									<li class="single-recent-tips">
										<div class="recent-tip-thum">
											<a href="#"><img src="assets/img/we-do/service3-img.png" alt="JSOFT"></a>
										</div>
										<div class="recent-tip-body">
											<h4><a href="#">How to Enjoy Losses Angeles Car Rentals</a></h4>
											<span class="date">February 5, 2018</span>
										</div>
									</li>
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
				<!-- Sidebar Area End -->
			</div>
		</div>
	</section>
<?php endwhile; ?>
<?php get_footer(); ?>