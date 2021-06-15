<?php get_header();?>
<?php
	$content = $post->post_content;
	$price = get_post_meta(get_the_ID(),'price',true);
	$fuel = get_post_meta(get_the_ID(),'fuel',true);
	$gear = get_post_meta(get_the_ID(),'transmission',true);
	$doors = get_post_meta(get_the_ID(),'doors',true);
	$type = get_post_meta(get_the_ID(),'type',true);
	$options= get_post_meta(get_the_ID(),'option',true);
	$options = explode(PHP_EOL,$options);
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
						<h2><?php the_title(); ?><span class="price">Rent: <b>$<?php echo $price; ?></b></span></h2>
						<div class="car-preview-crousel">
							<?php for($i=0;$i<count($img);$i++): ?>
								<div class="single-car-preview">
									<?php echo $img[$i]; ?>
								</div>
							<?php endfor; ?>
						</div>
						<div class="car-details-info">
							<h4>Additional Info</h4>
							<p><?php echo $con; ?></p>

							<div class="technical-info">
								<div class="row">
									<div class="col-lg-6">
										<div class="tech-info-table">
											<table class="table table-bordered">
												<tr>
													<th>Class</th>
													<td><?php echo $type; ?></td>
												</tr>
												<tr>
													<th>Fuel</th>
													<td><?php echo $fuel; ?></td>
												</tr>
												<tr>
													<th>Doors</th>
													<td><?php echo $doors;?></td>
												</tr>
												<tr>
													<th>GearBox</th>
													<td><?php echo $gear; ?></td>
												</tr>
											</table>
										</div>
									</div>

									<div class="col-lg-6">
										<div class="tech-info-list">
											<ul>
												<?php for($i =0;$i < count($options);$i++): ?>
													<li><?php echo ucfirst($options[$i]); ?></li>
												<?php endfor; ?>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<h3>Be the first to review “<?php the_title(); ?>”</h3>
							<div class="review-area">

								<div class="review-star">
									<p class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star unmark"></i>
										<i class="fa fa-star unmark"></i>
									</p>
								</div>
								<div class="review-form">
									<form name="send_feeds">
										<div class="row">
											<div class="col-lg-6 col-md-6">
												<div class="name-input">
													<input name="name" type="text" placeholder="Full Name">
												</div>
											</div>

											<div class="col-lg-6 col-md-6">
												<div class="email-input">
													<input name="email" type="email" placeholder="Email Address">
												</div>
											</div>
										</div>

										<div class="message-input">
											<textarea name="review" cols="30" rows="5" placeholder="Write Your Feedback Here!"></textarea>
										</div>

										<div class="input-submit">
											<a onclick="sendFeeds(this)">Submit</a>
											<button type="reset">Clear</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Car List Content End -->
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
	<section id="footer-area" class="">
		<div class="container-fluid footer-widget-area">

						<?php get_template_part('/templates/footer-area'); ?>

		</div>
	</section>
	<section class="footer-bottom-area">
		<div class="container ">



			<div class="row">
				<div class="col-lg-12 text-center">
					<p>Copyright ©<script>document.write(new Date().getFullYear());</script>2021 All rights reserved</p>	</div>
			</div>


		</div>
	</section>
<?php get_footer(); ?>