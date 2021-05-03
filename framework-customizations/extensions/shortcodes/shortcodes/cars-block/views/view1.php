<?php
$terms = get_terms(array(
	'taxonomy'=>'cars',
	'hide_empty'=>true,
	'hierarchical'  => true,
	'parent' =>'',
	'child_of'      => 0));
echo '<pre>'.print_r($terms,1).'</pre>';