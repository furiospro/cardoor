<?php if(file_exists(__DIR__.'/templates/single-'.$post->post_type.'.php')){
	$views = get_post_meta(get_the_ID(),'views',true);
	$views++;
	update_post_meta(get_the_ID(),'views',$views,'');
	require_once __DIR__.'/templates/single-'.$post->post_type.'.php';
}else{

	header("Refresh:0; url=http://cardoor:82/404.php");
}



