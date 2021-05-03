<?php $query = new WP_Query([
	'post_type'=>'services',
	'orderby'=>'priority',
	'order'=>'ASC'
]) ?>
<?php if($query->have_posts()){
	while($query->have_posts()){
		$query->the_post();
		$options = get_post_meta(get_the_ID(),'options',true);
		$options = explode(PHP_EOL,$options);
?>
<div class="col-lg-3 col-md-6">
                    <div class="single-our-facility">
                        <h3><?php strtoupper(the_title()); ?></h3>
                        <ul>
							<?php for($i=0; $i<count($options);$i++): ?>
                            <li><?php echo strtoupper($options[$i]); ?></li>
							<?php endfor; ?>
                        </ul>
                    </div>
                </div><?php } ?>
<?php } ?>