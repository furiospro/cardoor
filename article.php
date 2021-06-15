<?php

use classes\GetImages;
/*
 * Template name: article
 * Template post type: post, page
 */
 ?>
<?php get_header();?>
<?php  while(have_posts()): the_post();
	$content = $post->post_content;

	/*function custom_strip_tags( $string, $remove_breaks = false ){

			$string = preg_replace( '/<img.*?>/si', '', $string );

			if ( $remove_breaks ) {
				$string = preg_replace( '/[\r\n\t ]+/', ' ', $string );
			}

			return trim( $string );

	}

	function get_images ($content) {
		$img =[];
		// Подключаем DOM parser
		require_once(__DIR__.'/templates/simple_html_dom.php');

		$html = str_get_html($content); // получаем структуру DOM контента
		// Находим все изображения в контенте
		foreach($html->find('img') as $element) {
			$img[] =  $element->outertext;   // выводим изображения в виде html кода <img src="...">
		}
		return $img;
	}*/
	$get_img = new GetImages();
	$img = $get_img->get_images($content);
	$con = $get_img->custom_strip_tags($content);

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
									<form name="comment">
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
											<a onclick="sendFeeds(this)">Comment</a>
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
<?php endwhile; ?>
<?php get_footer(); ?>