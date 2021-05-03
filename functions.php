<?php
require_once __DIR__.'/vendor/autoload.php';

$themename = "cardoor";
$shortname = "ct";
//require_once __DIR__.'/classes/Main_New_Walker.php';

require_once  __DIR__.'/tgm/tgm.php';
;
function cardoor_style(){

	wp_enqueue_style('cardoor-bootstrapcss', get_template_directory_uri().'/assets/css/bootstrap.min.css');

	wp_enqueue_style('cardoor-bootstrapcss', get_template_directory_uri().'/assets/css/plugins/slicknav.min.csss');

	wp_enqueue_style('cardoor-magnificcss', get_template_directory_uri().'/assets/css/plugins/magnific-popup.css');

	wp_enqueue_style('cardoor-carouselcss', get_template_directory_uri().'/assets/css/plugins/owl.carousel.min.css');

	wp_enqueue_style('cardoor-gijgocss', get_template_directory_uri().'/assets/css/plugins/gijgo.css');

	wp_enqueue_style('cardoor-fontawesome', get_template_directory_uri().'/assets/css/font-awesome.css');

	wp_enqueue_style('cardoor-resetcss', get_template_directory_uri().'/assets/css/reset.css');

	wp_enqueue_style('cardoor-stylecss', get_template_directory_uri().'/style.css');

	wp_enqueue_style('cardoor-responsivecss', get_template_directory_uri().'/assets/css/responsive.css');

	wp_enqueue_style('cardoor-customcss', get_template_directory_uri().'/assets/css/custom-css.css');

	wp_enqueue_script('cardoor-jquery',get_template_directory_uri().'/assets/js/jquery.min.js','','no','true');

	wp_enqueue_script('cardoor-migrate',get_template_directory_uri().'/assets/js/jquery-migrate.min.js','','no','true');

	wp_enqueue_script('cardoor-popper',get_template_directory_uri().'/assets/js/popper.min.js','','no','true');

	wp_enqueue_script('cardoor-bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js','','no','true');

	wp_enqueue_script('cardoor-gijgo',get_template_directory_uri().'/assets/js/plugins/gijgo.js','','no','true');

	wp_enqueue_script('cardoor-vegas',get_template_directory_uri().'/assets/js/plugins/vegas.min.js','','no','true');

	wp_enqueue_script('cardoor-isotope',get_template_directory_uri().'/assets/js/plugins/isotope.min.js','','no','true');

	wp_enqueue_script('cardoor-carouseljs',get_template_directory_uri().'/assets/js/plugins/owl.carousel.min.js','','no','true');

	wp_enqueue_script('cardoor-waypoints',get_template_directory_uri().'/assets/js/plugins/waypoints.min.js','','no','true');

	wp_enqueue_script('cardoor-counterup',get_template_directory_uri().'/assets/js/plugins/counterup.min.js','','no','true');

	wp_enqueue_script('cardoor-ytplayer',get_template_directory_uri().'/assets/js/plugins/ytplayer.js','','no','true');

	wp_enqueue_script('cardoor-magnific',get_template_directory_uri().'/assets/js/plugins/magnific-popup.min.js','','no','true');

	wp_enqueue_script('cardoor-slicknav',get_template_directory_uri().'/assets/js/plugins/slicknav.min.js','','no','true');

	wp_enqueue_script('cardoor-main',get_template_directory_uri().'/assets/js/main.js','','no','true');

}
function client_customize_js(){
	wp_enqueue_script('client-customize',get_template_directory_uri().'/assets/js/client_customize.js','jquery, customize-preview','no','true');
}
function cardoor_setup(){
	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menus([
		'header_menu'=>esc_html__('header_nav','cardoor'),
		'social_links_menu'=> esc_html__('social_links_menu','constructed')
	]);
}
function client_customize($wp_customize){


	$wp_customize->add_section('header_title',[
		'title'=>'Рекламный текст'
	]);
	$wp_customize->add_setting('header',[
		'default'=>'',
		'transport'=>'postMessage'
	]);
	$wp_customize->add_setting('subheader',[
		'default'=>'',
		'transport'=>'postMessage'
	]);
	$wp_customize->add_control('header',[
		'label'=>'Основной заголовок',
		'section'=>'header_title',
		'type'=>'text'
	]);
	$wp_customize->add_control('subheader',[
		'label'=>'Подзаголовок',
		'section'=>'header_title',
		'type'=>'text'
	]);
	$wp_customize->add_section('contacts',[
		'title'=>'Контактная информация'
	]);
	$wp_customize->add_setting('phone',[
		'default'=>'',
		'transport'=>'postMessage'
	]);
	$wp_customize->add_setting('address',[
		'default'=>'',
		'transport'=>'postMessage'
	]);
	$wp_customize->add_setting('email',[
		'default'=>'',
		'transport'=>'postMessage'
	]);
	$wp_customize->add_control('phone',[
		'label'=>'Телефон',
		'section'=>'contacts',
		'type'=>'text'
	]);
	$wp_customize->add_control('address',[
		'label'=>'Адрес',
		'section'=>'contacts',
		'type'=>'text'
	]);
	$wp_customize->add_control('email',[
		'label'=>'Email',
		'section'=>'contacts',
		'type'=>'text'
	]);

}
function cardoor_widget(){
	register_sidebar(array(
		'name' => 'sidebar',
		'id' => 'cardoor_sidebar',
		'description' => 'Сайдбар'
	));
}


function true_add_post_columns($my_columns){
	$my_columns['views'] = 'Просмотры';
	return $my_columns;
}

add_filter( 'manage_edit-post_columns', 'true_add_post_columns', 10, 1 );

function true_fill_post_columns( $column ) {
	global $post;
	switch ( $column ) {
		case 'views':
			echo get_post_meta($post->ID, 'views', true);
			break;
	}
}

function my_custom_init(){

	register_taxonomy( 'cars', [ 'post' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'cars',
			'singular_name'     => '',
			'search_items'      => 'Search Cars',
			'all_items'         => 'All Cars',
			'view_item '        => 'View Cars',
			'parent_item'       => 'Parent Cars',
			'parent_item_colon' => 'Parent Cars:',
			'edit_item'         => 'Edit Cars',
			'update_item'       => 'Update Cars',
			'add_new_item'      => 'Add New Car',
			'new_item_name'     => 'New Car Name',
			'menu_name'         => 'Cars',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => true,

		'rewrite'               => true,
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );



	register_post_type('car', array(
		'labels'             => array(
			'name'               => 'Автомобили', // Основное название типа записи
			'singular_name'      => 'Автомобиль', // отдельное название записи
			'add_new'            => 'Добавить новый',
			'add_new_item'       => 'Добавить новый автомобиль',
			'edit_item'          => 'Редактировать данные автомобиля',
			'new_item'           => 'Новый автомобиль',
			'view_item'          => 'Посмотреть автомобиль',
			'search_items'       => 'Найти автомобиль',
			'not_found'          =>  'Автомобили не найдены',
			'parent_item_colon'  => '',
			'menu_name'          => 'Автомобили'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','custom-fields'),
		'rest_base'			 => true
	) );
	register_post_type('tariffs', array(
			'labels'             => array(
				'name'               => 'Название тарифа', // Основное название типа записи
				'singular_name'      => 'Тариф', // отдельное название записи типа Book
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить тариф',
				'edit_item'          => 'Редактировать тариф',
				'new_item'           => 'Новый тариф',
				'view_item'          => 'Посмотреть тариф',
				'search_items'       => 'Найти тариф',
				'not_found'          =>  'Тариф не найден',
				'parent_item_colon'  => '',
				'menu_name'          => 'Тарифы'

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => 'edit.php',
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','thumbnail','custom-fields'),
		)
	);
	register_post_type('services', array(
			'labels'             => array(
				'name'               => 'Название', // Основное название типа записи
				'singular_name'      => 'Сервис', // отдельное название записи типа Book
				'add_new'            => 'Добавить новый',
				'add_new_item'       => 'Добавить сервис',
				'edit_item'          => 'Редактировать',
				'new_item'           => 'Новый сервис',
				'view_item'          => 'Посмотреть сервис',
				'search_items'       => 'Найти сервис',
				'not_found'          =>  'Сервис не найден',
				'parent_item_colon'  => '',
				'menu_name'          => 'Сервис'

			),
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => 'edit.php',
			'query_var'          => true,
			'rewrite'            => true,
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => null,
			'supports'           => array('title','editor','thumbnail','custom-fields'),
		)
	);
	register_post_type('drivers', array(
		'labels'             => array(
			'name'               => 'Водители', // Основное название типа записи
			'singular_name'      => 'Водитель', // отдельное название записи типа Book
			'add_new'            => 'Добавить нового водителя',
			'add_new_item'       => 'Добавить водителя',
			'edit_item'          => 'Редактировать водителя',
			'new_item'           => 'Новый водитель',
			'view_item'          => 'Посмотреть информацию о водителе',
			'search_items'       => 'Найти водителя',
			'not_found'          =>  'Водитель не найден',
			'parent_item_colon'  => '',
			'menu_name'          => 'Водители'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => 'edit.php',
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','custom-fields'),
	)
	);
	add_post_type_support('post',array('title','editor','custom-fields'));
	register_taxonomy_for_object_type('cars','car');
}
add_action('init', 'my_custom_init');

add_action( 'manage_posts_custom_column', 'true_fill_post_columns', 10, 1 );
add_action('customize_preview_init','client_customize_js');
add_action('after_setup_theme','cardoor_setup');
//add_action('admin_menu',function(){remove_menu_page('edit-comments.php');});
add_action('customize_register','client_customize');
add_action('wp_enqueue_scripts','cardoor_style');
add_action('widgets_init','cardoor_widget');
//add_action('before_post_content',[new classes\Preg],'preg');
