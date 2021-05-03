<?php
if(file_exists(__DIR__.'/templates/'.$post->post_name.'.php')){
get_template_part('/templates/'.$post->post_name);
//require_once __DIR__.'/templates/'.$post->post_name.'.php';
}else{

	header("Refresh:0; url=http://cardoor:82/404.php");
}
global $post;
$views = get_post_meta(get_the_ID(),'views',true);
$views++;
update_post_meta(get_the_ID(),'views',$views,'');
echo $views;

