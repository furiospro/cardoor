<?php
$query = new WP_Query([
	'category_name'=>'article',
	'order'=>'ASC'
]);
?>
<?php if($query->have_posts()): $i=1; while($query->have_posts()): $query->the_post();
if(has_post_thumbnail()){
	$img = get_the_post_thumbnail_url();
}else{
	$img = 'https://picsum.photos/447/300';
}?>
<div class="col-lg-12">
                    <article class="single-article">
                        <div class="row <?php if($i % 2 ==0){echo 'art-row-right';} ?>">
                            <!-- Articles Thumbnail Start -->
                            <div class="col-lg-5">
                                <div class="article-thumb">
                                    <img src="<?php echo $img; ?>" alt="JSOFT">
                                </div>
                            </div>
                            <!-- Articles Thumbnail End -->

                            <!-- Articles Content Start -->
                            <div class="col-lg-7">
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <div class="article-body">
                                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            <div class="article-meta">
                                                <a href="#" class="author">By :: <span>Admin</span></a>
                                                <a href="#" class="commnet">Comments :: <span>10</span></a>
                                            </div>

                                            <div class="article-date" <?php if($i % 2 ==0): ?>style="left:unset;right:-48px;"<?php endif; ?>>25 <span class="month">jan</span></div>

                                            <p><?php the_content(''); ?></p>

                                            <a href="<?php the_permalink(); ?>" class="readmore-btn">Read More <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Articles Content End -->
                        </div>
                    </article>
                </div>
<?php $i++; endwhile;?>
	<?php wp_reset_postdata();?>
<?php endif;?>