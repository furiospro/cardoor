<?php
function page_screen($current_screen){
	set_current_screen('edit-comments');
}

//$screen = get_current_screen();
//$screen->id = 'edit-comments';
?>
	<div class="wrap">
	<h2><?php echo get_admin_page_title() ?></h2>

	<?php
	add_filter( 'comments_list_table_query_args', 'type_comm');
	function type_comm($args){
		$args = array(
			'search'    => '',
			'user_id'   => '',
			'offset'    => '',
			'number'    => '',
			'post_id'   => '',
			'type'      => 'feedback',
		);
		return $args;
	}

	$doaction = $wp_list_table->current_action();


	$wp_list_table->prepare_items();


	//add_filter( 'comment_status_links', 'status_links' );
	function status_links($status_links){

		debug($status_links);
	}

	wp_enqueue_script( 'admin-comments' );
	enqueue_comment_hotkeys_js();


	$pagenum       = $wp_list_table->get_pagenum();

	$doaction = $wp_list_table->current_action();
	$wp_list_table->views();?>
	<form id="comments-form" method="get">
		<?php
		$wp_list_table->search_box( __( 'Search Comments' ), 'comment' );
		$wp_list_table->display();?>
	</form>
	</div><?php
?>
	<div id="ajax-response"></div>

<?php
global $wpdb;
require_once __DIR__.'/classes/Main_Admin_Ren.php';
$wp_list_table = new Main_Admin_Ren();
function adminStyle(){

	wp_enqueue_style('load-style', ABSPATH.'wp-admin/load-styles.php');
	wp_enqueue_script('load-script',ABSPATH.'wp-admin/load-scripts.php','','no',true);
}
//add_action('admin_menu','adminStyle');
//add_action('current_screen','page_screen','10',1);


wp_comment_reply( '-1', true, 'detail' );
wp_comment_trashnotice();
require_once ABSPATH . 'wp-admin/admin-footer.php';