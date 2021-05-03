<?php if (!defined('FW')) die('Forbidden');
$row_class = ($row_class  = fw_ext('builder')->get_config('grid.row.class')) ? $row_class : 'fw-row';
echo do_shortcode($content);

