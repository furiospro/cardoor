<?php
//require_once __DIR__.'../classes/Preg.php';
//$preg = new classes\Preg();
use classes\Preg;

$pament = new WP_Query([
	'category_name' => 'faq',
	'tag'=>'payment'
]);
$preparation = new WP_Query([
	'category_name' => 'faq',
	'tag' => 'preparation'
]);
$class = [
	1=>'collapseOne',
	2=>'collapseTwo',
	3=>'collapseThree',
	4 =>'collapse4',
	5=>'collapseFour',
	6=>'collapseFife',
	7 =>'collapseSix'
];
$heading = [
	1=>'headingOne',
	2=>'headingTwo',
	3=>'headingThree',
	4 =>'heading4',
	5=>'headingFour',
	6=>'headingFife',
	7 =>'headingSix'
]
?>
	<div class="col" style="display:flex;">
		<div class="faq-details-content">
			<?php if($pament->have_posts()):?>
			<div class="single-faq-sub">
				<h3>Payment</h3>
	<?php $j =0;
	while($pament->have_posts()): $pament->the_post(); $j++;?>
				<div class="single-faq-sub-content">
					<div id="accordion">
						<!-- Single FAQ Start -->
						<div class="card">
							<div class="card-header" id="<?php echo $heading[$j]; ?>">
								<h5 class="mb-0"><button class="btn btn-link <?php if($j != 1){echo 'collapsed' ;} ?>" data-toggle="collapse" data-target="#<?php echo $class[$j]; ?>" aria-expanded="<?php if($j== 1){echo 'true' ;}else{echo 'false';} ?>" aria-controls="<?php echo $class[$j]; ?>">
										<span><?php the_title(); ?></span>
										<i class="fa fa-angle-down"></i>
										<i class="fa fa-angle-up"></i>
									</button></h5>
							</div>

							<div id="<?php echo $class[$j]; ?>" class="collapse <?php if($j == 1){echo 'show' ;} ?>" aria-labelledby="<?php echo $heading[$j]; ?>" data-parent="#accordion" style="">
								<div class="card-body">
									<?php $str = get_the_content();
									$str = apply_filters( 'the_content', $str );
									echo Preg::Match($str);

									 ?>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php endwhile;
	?></div>
<?php
endif;?>
	<?php if($preparation->have_posts()):?>
		<div class="single-faq-sub">
			<h3>Preparation</h3>
			<?php $i=0; while($preparation->have_posts()): $preparation->the_post();$i++ ?>
					<div class="single-faq-sub-content">
					<div id="accordion">
						<!-- Single FAQ Start -->
						<div class="card">
							<div class="card-header" id="<?php echo $heading[$j+$i]; ?>">
								<h5 class="mb-0"><button class="btn btn-link <?php if(($i +$j) != 4){echo 'collapsed' ;} ?>" data-toggle="collapse" data-target="#<?php echo $class[$i+$j]; ?>" aria-expanded="<?php if($i == 4){echo 'true' ;}else{echo 'false';} ?>" aria-controls="<?php echo $class[$i+$j]; ?>">
										<span><?php the_title(); ?></span>
										<i class="fa fa-angle-down"></i>
										<i class="fa fa-angle-up"></i>
									</button></h5>
							</div>

							<div id="<?php echo $class[$i+$j]; ?>" class="collapse <?php if($i == 4){echo 'show' ;} ?>" aria-labelledby="<?php echo $heading[$j+$i]; ?>" data-parent="#accordion" style="">
								<div class="card-body">
									<?php
									$str = get_the_content();
									$str = apply_filters( 'the_content', $str );
									echo Preg::Match($str);
									?>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile;?>
		</div>
	<?php endif; ?>
	</div>
</div><?php get_sidebar();
