<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * @var array $atts
 */
if(!empty($atts['url'])){
	$url = $atts['url'];
}else{
	$url = '#';
}


?>
<a href="<?php echo $url; ?>" <?php if(!empty($atts['link_class'])): ?> class="<?php echo $atts['link_class']; ?>"<?php endif; ?>><?php if(!empty($atts['icon'])): ?><i class="<?php echo $atts['icon']; ?>"<?php endif; ?>></i><?php if(!empty($atts['text'])): ?><?php echo $atts['text'];?><?php endif; ?></a>
