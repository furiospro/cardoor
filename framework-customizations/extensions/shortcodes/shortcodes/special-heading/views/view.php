<?php if (!defined('FW')) die( 'Forbidden' );
/**
 * @var $atts
 */
?>
<?php if(!empty($atts['title'])): ?>

	<?php if(isset($atts['parent']) && $atts['parent']==1):?>
		<div <?php if(isset($atts['parent-class'])):?> class="<?php echo $atts['parent-class'];?>"<?php endif; ?>>
		<?php endif; ?>

						<<?php echo $atts['heading']; ?><?php if(!empty($atts['header_class'])):?> class="<?php echo $atts['header_class'];?>"<?php endif;?>><?php if(!empty($atts['title'])): ?><?php echo $atts['title']; ?><?php endif; ?></<?php echo $atts['heading'] ?>>
						<?php if(!empty($atts['subtitle'])):?>
						<p><?php echo $atts['subtitle']; ?><?php endif; ?></p>
						<?php if(!empty($atts['link'] && !empty($atts['link_title']))): ?>
						<a data-scroll href="<?php echo $atts['link']; ?>" class="btn btn-light btn-radius btn-brd"><?php echo $atts['link_title']; ?></a>
						<?php endif; ?>
	<?php if(isset($atts['parent']) && $atts['parent']==1):?>
		</div>
	<?php endif; ?>

<?php endif; ?>