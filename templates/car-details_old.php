<?php
$query = new WP_Query([
	'post_type'=>'car',
	'order'=>'ASC'
]);

?>
<div class="col-lg-8">
	<div class="car-details-content">
		<div class="car-preview-crousel">
		<?php
		if($query->have_posts()): while($query->have_posts()):
			$query->the_post();
			$fuel = get_post_meta(get_the_ID(),'fuel',true);
			$price = get_post_meta(get_the_ID(),'price',true);
			$gear = get_post_meta(get_the_ID(),'transmission',true);
			$doors = get_post_meta(get_the_ID(),'doors',true);
			$type = get_post_meta(get_the_ID(),'type',true);
			$options= get_post_meta(get_the_ID(),'option',true);
			$options = explode(PHP_EOL,$options);

			?>
			<div class="single-car-preview">
				<h2><?php the_title(); ?><span class="price">Rent: <b>$<?php echo $price; ?></b></span></h2>
				<img src="<?php the_post_thumbnail_url(); ?>" alt="JSOFT">

				<div class="car-details-info">
					<h4>Additional Info</h4>
					<p><?php the_content(); ?></p>

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
									<textarea name="review" cols="30" rows="5" placeholder="Write Your Feedback Here!"></textarea>
								</div>

								<div class="input-submit">
									<button type="submit">Submit</button>
									<button type="reset">Clear</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		<?php
		endwhile;
		endif;
		?>
	</div>
	</div>
</div>
<?php get_sidebar(); ?>
