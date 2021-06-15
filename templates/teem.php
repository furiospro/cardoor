<?php
use classes\GetImages;
$query = new WP_Query([
	'post_type' =>'employees',
	'order' => 'ASC'
]);
if($query->have_posts()){
	$img =[];
	$arr_post =[];
	while($query->have_posts()){
		$query->the_post();
		//echo '<pre>'.print_r($query,1).'</pre>';
		$con = get_the_content();
		$get_img = new GetImages();
		$img[] = $get_img->get_images($con);
		$content = $get_img->custom_strip_tags($con);

		$arr_post[] = [
			'title' => get_the_title(),
			'permalink' => get_the_permalink(),
			'thumbnail' => get_the_post_thumbnail_url(),
			'content' 	=> $content,
			'position'	=> get_post_meta(get_the_ID(),'position',true)
		];

	}
}

?>
						<div class="col-lg-4">
							<div class="team-tab-menu">
								<ul class="nav nav-tabs" id="myTab" role="tablist">
									<?php foreach($arr_post as $key => $item): ?>

									<li class="nav-item">
										<a href="<?php echo wp_login_url( get_permalink() ); ?>" title="Войти">Войти</a>
										<a class="nav-link <?php if($key ==0){echo 'active';}?>" id="tab_item_<?php echo $key+1;?>" data-toggle="tab" href="#team_member_<?php echo $key+1;?>" role="tab" aria-selected="<?php if($key ==0){echo 'true';}else{echo 'false';} ?>">
											<div class="team-mem-icon">
												<img src="<?php echo $item['thumbnail']; ?>" alt="JSOFT">
											</div>
											<h5><?php echo $item['title']; ?></h5>
										</a>
									</li>
									<?php endforeach; unset($key,$item);?>
								</ul>
							</div>
						</div>

						<div class="col-lg-8">
							<div class="tab-content" id="myTabContent">

								<?php foreach($arr_post as $key => $item): ?>
								<div class="tab-pane fade <?php if($key == 0){echo 'show active';} ?>" id="team_member_<?php echo $key+1;?>" role="tabpanel" aria-labelledby="tab_item_<?php echo $key+1;?>">
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="team-member-pro-pic">
												<?php echo $img[$key][0]; ?>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="team-member-info text-center">
												<h4><?php echo $item['title']; ?></h4>
												<h5><?php echo $item['position']; ?></h5>
												<span class="quote-icon"><i class="fa fa-quote-left"></i></span>
												<p><?php echo $item['content'];?></p>
												<div class="team-social-icon">
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-linkedin"></i></a>
													<a href="#"><i class="fa fa-pinterest"></i></a>
													<a href="#"><i class="fa fa-dribbble"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?endforeach;?>

							</div>
						</div>


