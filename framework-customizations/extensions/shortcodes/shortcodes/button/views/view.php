<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>
<?php $btn_class = !empty($atts['btn_class']) ? "{$atts['btn_class']}" : ''; ?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="<?php echo esc_attr($btn_class); ?>"><span><?php echo $atts['label']; ?></span><i class="fa fa-bolt" aria-hidden="true" style="font-size: 2em;
    transform: rotate(45deg);
    color: #b60606;"></i>
</a>