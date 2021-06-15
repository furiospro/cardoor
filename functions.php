<?php
require_once __DIR__.'/vendor/autoload.php';
//require_once __DIR__.'/vendor/autoload.php';
//use classes\Main_Admin_Ren;


$themename = "cardoor";
$shortname = "ct";
<<<<<<< HEAD
//require_once __DIR__.'/classes/WP_Comments_List_Table.php';
//require_once $_SERVER['DOCUMENT_ROOT'].'/wp-admin/includes/class-wp-comments-list-table.php';
=======
//require_once __DIR__.'/classes/Main_New_Walker.php';

>>>>>>> 7345f7615261a54ee692a33982c7f96adeee1b77
require_once  __DIR__.'/tgm/tgm.php';
add_action('wp_enqueue_scripts','cardoor_style');
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

	wp_enqueue_script('client-main',get_template_directory_uri().'/assets/js/client_main.js','','no','true');

	wp_enqueue_script('client-ajax',get_template_directory_uri().'/assets/js/client_ajax.js','','no','true');

}

add_action('customize_preview_init','client_customize_js');
function client_customize_js(){
	wp_enqueue_script('client-customize',get_template_directory_uri().'/assets/js/client_customize.js','jquery, customize-preview','no','true');
}

add_action('after_setup_theme','cardoor_setup');
function cardoor_setup(){

	add_theme_support('post-thumbnails');
	add_theme_support('title-tag');
	register_nav_menus([
		'header_menu'=>esc_html__('header_nav','cardoor'),
		'social_links_menu'=> esc_html__('social_links_menu','constructed')
	]);
}

add_action('customize_register','client_customize');
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

add_action('widgets_init','cardoor_widget');
function cardoor_widget(){
	register_sidebar(array(
		'name' => 'sidebar',
		'id' => 'cardoor_sidebar',
		'description' => 'Сайдбар'
	));
}

add_filter( 'manage_edit-post_columns', 'true_add_post_columns', 10, 1 );
function true_add_post_columns($my_columns){
	$my_columns['views'] = 'Просмотры';
	return $my_columns;
}

add_action( 'manage_posts_custom_column', 'true_fill_post_columns', 10, 1 );
function true_fill_post_columns( $column ) {
	global $post;
	switch ( $column ) {
		case 'views':
			echo get_post_meta($post->ID, 'views', true);
			break;
	}
}

add_action('wp_enqueue_scripts','myUrl',99);
function myUrl(){
	wp_localize_script('client-ajax','ajax_data',['url'=>admin_url('admin-ajax.php'),'post_id'=>get_the_ID()]);
}

add_action( 'admin_enqueue_scripts', function(){
	wp_enqueue_style('cardoor-bootstrapcss', get_template_directory_uri().'/assets/css/bootstrap.min.css');
	wp_enqueue_script('cardoor-bootstrap',get_template_directory_uri().'/assets/js/bootstrap.min.js','','no','true');
	wp_enqueue_style('my-admin-css',get_template_directory_uri().'/assets/css/my-admin.css');
	wp_enqueue_script('client-admin-js',get_template_directory_uri().'/assets/js/client_admin.js');
}, 99 );


add_action('init', 'my_custom_init');
function my_custom_init(){

	/*register_taxonomy( 'cars', [ 'post' ], [
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
	] );*/

	register_post_type('employees', array(
		'labels'             => array(
			'name'               => 'Сотрудники', // Основное название типа записи
			'singular_name'      => 'Сотрудник', // отдельное название записи
			'add_new'            => 'Добавить сотрудника',
			'add_new_item'       => 'Добавить нового сотрудника',
			'edit_item'          => 'Редактировать данные сотрудника',
			'new_item'           => 'Новый сотрудник',
			'view_item'          => 'Посмотреть профиль',
			'search_items'       => 'Найти сотрудника',
			'not_found'          =>  'Сотрудники не найдены',
			'parent_item_colon'  => '',
			'menu_name'          => 'Сотрудники'

		),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'menu_icon'		 => 'dashicons-businessman',
		'supports'           => array('title','editor','thumbnail','custom-fields'),
		'rest_base'			 => true
	) );

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
	//register_taxonomy_for_object_type('cars','car');
}

<<<<<<< HEAD

add_filter('admin_comment_types_dropdown','commtype');
function commtype(){
	$comment_type =
		array(
			'comment' => __( 'Comments' ),
			'feedback'   => __( 'Отзывы' ),
			'pings'   => __( 'Pings' ),
		);
	return $comment_type;
}

add_action( 'phpmailer_init', 'smtp_enable' );
function smtp_enable( $phpmailer ) {
	$phpmailer->isSMTP();
	$phpmailer->SMTPAuth   = true;
	$phpmailer->Host       = 'smtp.gmail.com';
	$phpmailer->Port       = '587';
	$phpmailer->Username   = 'cardoortest@gmail.com';
	$phpmailer->Password   = '123456cardoor';
	$phpmailer->SMTPSecure = 'tls';
	$phpmailer->FromName   = get_bloginfo( 'name' );

}

/*add_action('admin_menu','add_client_page');
function add_client_page(){

	add_menu_page('Title Отзывы','admin отзывы','read','feedback', 'function_name','',6);
	add_action('current_screen','function_name');

}
function function_name(){

	add_filter('admin_comment_types_dropdown','commtype');
	function commtype(){
		$comment_type =
			array(
				'comment' => __( 'Comments' ),
				'feedback'   => __( 'Отзывы' ),
				'pings'   => __( 'Pings' ),
			);
		return $comment_type;
	}
	//require_once __DIR__.'/classes/edit-feedbacks.php';
}*/
//-------------Авторизазация, регистрация и восстановление доступа
add_filter('login_form_view','custom_form',10,2);
function custom_form($content,$args){
	 $content = '
		<form name="' . $args['form_id'] . '" id="' . $args['form_id'] . '" action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">
			<p class="login-username">
				<label for="' . esc_attr( $args['id_username'] ) . '">' . esc_html( $args['label_username'] ) . '</label>
				<input type="text" name="log" id="' . esc_attr( $args['id_username'] ) . '" class="input" value="' . esc_attr( $args['value_username'] ) . '"  placeholder="Email or Username" size="20" />
			</p>
			<p class="login-password">
				<label for="' . esc_attr( $args['id_password'] ) . '">' . esc_html( $args['label_password'] ) . '</label>
				<input type="password" name="pwd" id="' . esc_attr( $args['id_password'] ) . '" class="input" value="" size="20" placeholder="Password" />
			</p>
			' . ( $args['remember'] ? '<p class="login-remember"><label><input name="rememberme" type="checkbox" id="' . esc_attr( $args['id_remember'] ) . '" value="forever"' . ( $args['value_remember'] ? ' checked="checked"' : '' ) . ' /> ' . esc_html( $args['label_remember'] ) . '</label></p>' : '' ) . '
			<div class="log-btn">
				<button type="submit" name="wp-submit" id="' . esc_attr( $args['id_submit'] ) . '" class="button button-primary" value="' . esc_attr( $args['label_log_in'] ) . '"><i class="fa fa-sign-in"></i> Log In</button>
				<input type="hidden" name="redirect_to" value="' . esc_url( $args['redirect'] ) . '" />
			</div>
		</form>';
	 return $content;
}

add_action( 'wp_login', 'red_to_home', 10 );
function red_to_home(){
	$page = site_url();
	wp_redirect($page);
	exit;
}



add_filter( 'authenticate', 'redirect_at_custom_form', 90, 3 );
function redirect_at_custom_form($user,$username,$password ){
	if ( $_SERVER['REQUEST_METHOD'] === 'POST' ) {
		if ( is_wp_error( $user ) ) {
			foreach($user->get_error_codes() as $error_code){
				switch($error_code){
					case 'invalid_username':
						$error_message = 'wrong_user_data';
						break;
					case 'incorrect_password' :
						$error_message = 'wrong_user_data';
						break;
					case 'empty_username':
						$error_message = 'wrong_user_data';
						break;
					case 'empty_password' :
						$error_message = 'wrong_user_data';
				}
			}

			$error_codes = join( ',', $user->get_error_codes() );
			error_log($error_codes);

			$login_url = home_url( '/log-in/' );
			$login_url = add_query_arg( 'erId', $error_message, $login_url );

			wp_redirect( $login_url );
			exit;
		}
		/*wp_redirect(site_url());
		exit;*/
	}

	return $user;
}

add_filter( 'wp_mail_from', 'fromemail' );
function fromemail(){
	$from = 'cardoortest@gmail.com';
	return $from;
}

add_action('wp_mail_failed', 'log_mailer_errors', 10, 1);
function log_mailer_errors( $wp_error ){

	// ошибку в .log файл
	error_log( $wp_error->get_error_message() );
}

add_action( 'login_form_lostpassword', 'pass_reset_redir' );
function pass_reset_redir() {

	//Переход для запроса на сброс пароля
	// перенаправляем на кастомную страницу сброса пароля
	if ( 'GET' == $_SERVER['REQUEST_METHOD'] && !is_user_logged_in() ) {
		wp_redirect( site_url( '/pass-reset/' ) );
		exit;
	} else if ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {
		//После отправки запроса на сброс
		$errors = retrieve_password();

		if ( is_wp_error( $errors ) ) {
			$error_codes = join(',',$errors->get_error_codes());
			$page = site_url( '/pass-reset/' );
			$page = add_query_arg('erId',$error_codes,$page);
		} else {

			$page = site_url( '/log-in' );
			$page = add_query_arg('erId','confirm',$page);
			$_SESSION['erId'] = 'confirm';
		}

		wp_redirect( $page );
		exit;
	}
}


add_action('login_form_register','custom_register');
function custom_register(){


	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		if(empty($_POST['user_pass'])){
			$page = site_url( '/register' );
			$message = 'Поле с паролем не может быть пустое';
			$page = add_query_arg( 'errors', $message, $page );

			wp_redirect( $page );
			exit;
		}
		$userdata = array(
			'user_pass'       => $_POST['user_pass'], // обязательно
			'user_login'      => $_POST['user_login'], // обязательно
			'user_nicename'   => '',
			'user_email'      => $_POST['email'],
			'display_name'    => '',
			'nickname'        => '',
			'first_name'      => $_POST['first_name'],
			'last_name'       => $_POST['last_name'],
			'rich_editing'    => 'true', // false - выключить визуальный редактор
			'user_registered' => current_time('mysql'), // дата регистрации (Y-m-d H:i:s) в GMT
			'role'            => '', // (строка) роль пользователя
		);

		$errors = wp_insert_user( $userdata );
		if(is_wp_error($errors)){

			$mes=[];
			$err = $errors->get_error_codes();

			foreach($err as $item){
				$mes[] = $errors->get_error_message($item);
			}

			$message = join(',',$mes);
			$page = site_url('/register/');
			$page = add_query_arg('errors',$message,$page);
			wp_redirect($page);
			exit;
		}
		$page = site_url('/log-in?checkemail=registered');
		wp_safe_redirect($page);
		exit;
	}
	wp_redirect(site_url('/register/'));
}

add_action( 'login_form_resetpass', 'custom_password_reset' );
function custom_password_reset(){

	$key = $_REQUEST['key'];
	$login = $_REQUEST['login'];

	// проверка соответствия ключа и логина
	if ( ( 'GET' == $_SERVER['REQUEST_METHOD'] || 'POST' == $_SERVER['REQUEST_METHOD'] )
		&& isset( $key ) && isset( $login ) ) {

		$user = check_password_reset_key( $key, $login );

		if ( ! $user || is_wp_error( $user ) ) {
			if ( $user && $user->get_error_code() === 'expired_key' ) {

				$page =  site_url( '/log-in' );
				$page = add_query_arg('erId','expired_key',$page);
				wp_redirect($page);
			} else {
				$page =  site_url( '/log-in' );
				$page = add_query_arg('erId','invalidkey',$page);
				wp_redirect( $page );
			}
			exit;
		}

	}

	if ( 'GET' == $_SERVER['REQUEST_METHOD'] ) {

		$page = site_url( '/pass-reset' );
		$page = add_query_arg( 'login', esc_attr( $login ), $page );
		$page = add_query_arg( 'key', esc_attr( $key ), $page );

		wp_redirect( $page );
		exit;

	} elseif ( 'POST' == $_SERVER['REQUEST_METHOD'] ) {

		if ( isset( $_POST['pass1'] ) ) {

			if ( $_POST['pass1'] != $_POST['pass2'] ) {
				// если пароли не совпадают
				$page = site_url('/pass-reset');

				$page = add_query_arg( 'key', esc_attr( $key ), $page );
				$page = add_query_arg( 'login', esc_attr( $login ), $page );
				$page = add_query_arg('erId','password_reset_mismatch',$page);

				wp_redirect( $page );
				exit;
			}

			if ( empty( $_POST['pass1'] ) ) {
				// если поле с паролем пустое
				$page = site_url( '/pass-reset' );

				$page = add_query_arg( 'key', esc_attr( $key ), $page );
				$page = add_query_arg( 'login', esc_attr( $login ), $page );
				$page = add_query_arg('erId','password_reset_empty',$page);

				wp_redirect( $page );
				exit;
			}


			//Сброс пароля
			reset_password( $user, $_POST['pass1'] );
			$page = site_url('/log-in/');
			$page = add_query_arg('erId','changed',$page);
			wp_redirect( $page );

		} else {

			echo "Что-то пошло не так.";
		}

		exit;

	}

}

add_action( 'wp_logout', 'logout_redirect');
function logout_redirect(){
	wp_safe_redirect( home_url() );
	exit;
}
//-----------------Конец----------


add_filter( 'set_screen_option_'.'message_page_options', function( $status, $option, $value ){
	return (int) $value;
}, 10, 3 );

add_action( 'admin_menu', 'message_page' );
function message_page(){
	global $menu;

	$hook = add_menu_page( 'Сообщения', 'Сообщения', 'edit_others_posts', 'message', 'my_page_function', 'dashicons-email-alt', 6 );

//Добавление счетчика непрочитанных сообщений
	$count = get_comments([
		'status' => 'hold',
		'count' => true,
		'type' => 'message'
	]);

	foreach($menu as $key => $value){
		if($menu[$key][2] == 'edit-comments.php'){
			$menu[$key][0] = 'Комментарии и отзывы';
		}
	}
	unset($key,$value);
	if( $count ){
		foreach( $menu as $key => $value ){
			if( $menu[$key][2] == 'message' ){
				$menu[$key][0] .= ' <span class="awaiting-mod"><span class="pending-count">' . $count . '</span></span>';
				break;
			}
		}
	}

	add_action( "load-$hook", 'message_page_load' );



}

function message_page_load(){

	global $wpdb;
	require_once __DIR__ .'/classes/Main_Admin_Ren.php';

	add_screen_option('per_page',[
		'label' => 'Показывать на странице',
		'default' => 10,
		'option' => 'message_page_options',
	]);

	// создаем экземпляр и сохраним его, дальше выведем
	$GLOBALS['Main_Admin_Ren'] = new Main_Admin_Ren(['type'=>'feedback']);
	$doaction = $GLOBALS['Main_Admin_Ren']->current_action();
	$pagenum       = $GLOBALS['Main_Admin_Ren']->get_pagenum();
	$screen = get_current_screen()->id;

	add_filter( "bulk_actions-{$screen}", 'custom_bulk_actions');
	function custom_bulk_actions(){
		$untrash = '';
		if($_REQUEST['comment_status'] === 'trash'){
			$_actions['untrash'] = 'Восстановить';
		}
		$_actions = [
			'approve' => 'Пометить как прочитанные',
			'spam' => 'Пометить как спам',
			'trash' => 'Удалить',
		];
		return $_actions;
	}


	add_filter( "manage_toplevel_page_message_columns", 'custom_columns' );
	function custom_columns(){

		return $column_headers[ $screen ]=[
			'cb'     => '<input type="checkbox" />',
			'author' => 'Автор',
			'comment' => 'Сообщение',
			'date' => 'Отправлено',
		];
	}

	if ( $doaction ) {

		check_admin_referer( 'bulk-comments' );

		if ( 'delete_all' === $doaction && ! empty( $_REQUEST['pagegen_timestamp'] ) ) {
			$comment_status = wp_unslash( $_REQUEST['comment_status'] );
			$delete_time    = wp_unslash( $_REQUEST['pagegen_timestamp'] );
			$comment_ids    = $wpdb->get_col( $wpdb->prepare( "SELECT comment_ID FROM $wpdb->comments WHERE comment_approved = %s AND %s > comment_date_gmt", $comment_status, $delete_time ) );
			$doaction       = 'delete';
		} elseif ( isset( $_REQUEST['delete_comments'] ) ) {
			$comment_ids = $_REQUEST['delete_comments'];
			$doaction    = $_REQUEST['action'];
		} elseif ( isset( $_REQUEST['ids'] ) ) {
			$comment_ids = array_map( 'absint', explode( ',', $_REQUEST['ids'] ) );
		} elseif ( wp_get_referer() ) {
			wp_safe_redirect( wp_get_referer() );
			exit;
		}

		$approved   = 0;
		$unapproved = 0;
		$spammed    = 0;
		$unspammed  = 0;
		$trashed    = 0;
		$untrashed  = 0;
		$deleted    = 0;

		$redirect_to = remove_query_arg( array( 'trashed', 'untrashed', 'deleted', 'spammed', 'unspammed', 'approved', 'unapproved', 'ids' ), wp_get_referer() );
		$redirect_to = add_query_arg( 'paged', $pagenum, $redirect_to );

		wp_defer_comment_counting( true );

		foreach ( $comment_ids as $comment_id ) { // Check the permissions on each.
			if ( ! current_user_can( 'edit_comment', $comment_id ) ) {
				continue;
			}

			switch ( $doaction ) {
				case 'approve':
					wp_set_comment_status( $comment_id, 'approve' );
					$approved++;
					break;
				case 'unapprove':
					wp_set_comment_status( $comment_id, 'hold' );
					$unapproved++;
					break;
				case 'spam':
					wp_spam_comment( $comment_id );
					$spammed++;
					break;
				case 'unspam':
					wp_unspam_comment( $comment_id );
					$unspammed++;
					break;
				case 'trash':

					wp_trash_comment( $comment_id );
					$trashed++;
					break;
				case 'untrash':
					wp_untrash_comment( $comment_id );
					$untrashed++;
					break;
				case 'delete':
					wp_delete_comment( $comment_id );
					$deleted++;
					break;
			}
		}

		if ( ! in_array( $doaction, array( 'approve', 'unapprove', 'spam', 'unspam', 'trash', 'delete' ), true ) ) {


			/** This action is documented in wp-admin/edit.php */
			$redirect_to = apply_filters( "handle_bulk_actions-{$screen}", $redirect_to, $doaction, $comment_ids ); // phpcs:ignore WordPress.NamingConventions.ValidHookName.UseUnderscoreshandle_bulk_actions-{$screen}
		}

		wp_defer_comment_counting( false );

		if ( $approved ) {
			$redirect_to = add_query_arg( 'approved', $approved, $redirect_to );
		}
		if ( $unapproved ) {
			$redirect_to = add_query_arg( 'unapproved', $unapproved, $redirect_to );
		}
		if ( $spammed ) {
			$redirect_to = add_query_arg( 'spammed', $spammed, $redirect_to );
		}
		if ( $unspammed ) {
			$redirect_to = add_query_arg( 'unspammed', $unspammed, $redirect_to );
		}
		if ( $trashed ) {

			$redirect_to = add_query_arg( 'trashed', $trashed, $redirect_to );
		}
		if ( $untrashed ) {
			$redirect_to = add_query_arg( 'untrashed', $untrashed, $redirect_to );
		}
		if ( $deleted ) {
			$redirect_to = add_query_arg( 'deleted', $deleted, $redirect_to );
		}
		if ( $trashed || $spammed ) {
			$redirect_to = add_query_arg( 'ids', implode( ',', $comment_ids ), $redirect_to );
		}
		wp_safe_redirect( $redirect_to );
		exit;
	} elseif ( ! empty( $_GET['_wp_http_referer'] ) ) {
		wp_redirect( remove_query_arg( array( '_wp_http_referer', '_wpnonce' ), wp_unslash( $_SERVER['REQUEST_URI'] ) ) );
		exit;
	}
}

function my_page_function() {


	if($_REQUEST['view'] !== 'email') {
		add_action('admin_print_footer_scripts', 'message_admin_javascript', 99);
		function message_admin_javascript() {

			?>
			<script>

				jQuery('#the-comment-list')
					.css('cursor','pointer')
					.on('click', 'td', function () {
					var id = jQuery(this).parent().attr('id');

					document.location.href = 'http://cardoor:82/wp-admin/admin.php?page=message&view=email&comment_id=' + id;

				});
				jQuery('.view-email-form-header > button').css({'display': 'none'});
			</script>
			<?php
		}
	}

	add_filter('comments_list_table_query_args', 'type_comm');
	function type_comm($args) {
		$args['type'] = 'message';

		return $args;
	}

	if($_REQUEST['view'] && $_REQUEST['view'] === 'email') {

		add_action('admin_footer','modal_form');//Модальное форма html bootstrap
		function modal_form(){
			?>
			<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="staticBackdropLabel">Вставить/изменить ссылку</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div id="link-options">
								<p class="howto" id="wplink-enter-url">Введите адрес назначения (URL)</p>
								<div class="link-options my-2">
									<span>URL</span>
									<input id="wp-link-url" type="text" aria-describedby="wplink-enter-url">
								</div>
								<div class="wp-link-text-field link-options my-2">
									<span>Текст ссылки</span>
									<input id="wp-link-text" type="text">
								</div>
								<div class="link-target">
									<label>
										<span></span>
										<input type="checkbox" id="wp-link-target"> Открывать в новой вкладке</label>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
							<button type="button" id="save-edit" class="btn btn-primary">Добавить ссылку</button>
						</div>
					</div>
				</div>
			</div>

			<?php
		}

		add_action('admin_print_footer_scripts', 'message_reply_admin_javascript', 99);
		function message_reply_admin_javascript() {

			?>
			<script>
				jQuery(document).ready(function () {

					jQuery('.message-reply').on('click',function () {
						console.log('click');
						sendMessageForm(this);
						jQuery('.cancel').on('click',function () {
							var form = jQuery('.cancel').closest('tr');
							form.remove();
						});

						jQuery('ul').on('click','li',function () {
							var el = jQuery(this).attr('id');

							switch (el){
								case 'img':
									var url = prompt('Введите URL картинки');
									var desc = prompt('Введите описание');
									render_form_link(url,desc);
									break;
								default:
									break;
							}
						});

						jQuery('#save-edit').on('click',function () {

							var url = jQuery('#wp-link-url').val();
							var url_text = jQuery('#wp-link-text').val();
							var t_blank = jQuery('#wp-link-target').prop('checked');

							var $link = jQuery('<a />',{
								'href' : url,
								'text' : url_text
							});
							if(t_blank == true) {$link.attr('target','_blank');}
							var text_val = jQuery('form textarea').val();
							var start = jQuery('form textarea').prop('selectionStart');
							jQuery('form textarea').val(text_val.substring(0,start) + $link[0].outerHTML + text_val.substring(start, text_val.length));

							jQuery('.close').trigger('click');

						});

						jQuery('#reply').on('click',function () {
							replyMessage(this);

						})
					});
				})
			</script>
			<?php
		}

		add_filter('comment_row_actions', 'edit_row_actions', 10, 1);//Удаление actions
		function edit_row_actions($actions) {
			unset($actions['approve'],$actions['spam'],$actions['trash'], $actions['unapprove'], $actions['edit'], $actions['delete'], $actions['quickedit']);

			return $actions;
		}

		$id = explode('-', $_REQUEST['comment_id']);
		$GLOBALS['Main_Admin_Ren']->get_comm_detail($id[1]);
		wp_enqueue_script('admin-comments');
		enqueue_comment_hotkeys_js();
		?>
		<div class="wrap">
			<h2><?php echo get_admin_page_title() ?></h2>
			<?php

			//$GLOBALS['Main_Admin_Ren']->views();
			// выводим таблицу на экран где нужно
			?>

			<form id="comments-form" method="get" class="view">

				<input type="hidden" name="page" value="message"/>
				<?php

				$GLOBALS['Main_Admin_Ren']->view_email_form();
				echo '</form>';
				?>
			</form>
		</div>
		<div id="ajax-response"></div>
		<?php

	}
	else {
		$GLOBALS['Main_Admin_Ren']->prepare_items();
	wp_enqueue_script('admin-comments');
	enqueue_comment_hotkeys_js();
	?>
	<div class="wrap">
		<h2><?php echo get_admin_page_title() ?></h2>
		<?php
		//$comment_type = 'feedback';
		$GLOBALS['Main_Admin_Ren']->views();
		// выводим таблицу на экран где нужно
		?>

		<form id="comments-form" method="get" class="not view">

			<?php
			//$GLOBALS['Main_Admin_Ren']->search_box( __( 'Search Comments' ), 'comment' );
			?>
			<input type="hidden" name="page" value="message"/>
			<?php

			$GLOBALS['Main_Admin_Ren']->do_extra_tablenav(false);
			$GLOBALS['Main_Admin_Ren']->display();
			echo '</form>';
			?>
		</form>
	</div>
	<div id="ajax-response"></div>

	<?php
}


	wp_comment_reply( '-1', true, 'detail' );
	wp_comment_trashnotice();
	require_once ABSPATH . 'wp-admin/admin-footer.php';

}

if(wp_doing_ajax()){

	add_action('wp_ajax_reply','replyMessage');
	add_action( 'wp_ajax_send_feeds', 'sendComm' );
	add_action( 'wp_ajax_nopriv_send_feeds', 'sendComm' );
	add_action( 'wp_ajax_nopriv_book_car', 'red_to_login' );


	function replyMessage(){

		$to = get_comment_author_email($_POST['commentId']);
		$subject = get_comment_meta($_POST['commentId'],'subject',true);
		$message = $_POST['message'];
		$message = str_replace('\\','',$message);
		add_filter( 'wp_mail_content_type','message_content_type' );
		function message_content_type(){
			return "text/html";
		}
		$result = wp_mail($to,$subject,$message);
		echo json_encode($result);
		exit();
	}

	add_filter('preprocess_comment','addType');
	function addType($data_comm){

		switch($_POST['type']){
			case 'send_feeds':
				$data_comm['comment_type'] = 'feedback';
				break;
			case 'comment':
				$data_comm['comment_type'] = 'comment';
				break;
			case 'message':
				$data_comm['comment_type'] = 'message';
				break;
			default :
				$data_comm['comment_type'] = 'comment';
		}
		return $data_comm;
	}


	function sendComm(){

		add_action('comment_post','after_com_insert_action','10','3');
		function after_com_insert_action($comment_ID, $comment_approved, $commentdata){


			if($commentdata['comment_type'] == 'message'){
				if(isset($_POST['subject']) && !empty($_POST['subject'])){
					update_comment_meta($commentdata['comment_post_ID'],'subject',$_POST['subject']);
				}
				if(isset($_POST['website']) && !empty($_POST['website'])){
					update_comment_meta($commentdata['comment_post_ID'],'website',$_POST['website']);
				}

				wp_mail($commentdata['comment_author_email'],'Подтверждение приема сообщения','Ваше сообщение доставлено');
				echo json_encode(['inserted' => true,'text'=>'Сообщение получено. C вами свяжутся по email: '.$commentdata['comment_author_email']]);
				exit();
			}
		}

		$data_comm =[
			'comment_post_ID'=>$_POST['post_id'],
			'comment_author' => $_POST['name'],
			'comment_author_email' => $_POST['email'],
			'comment_date' => current_time('mysql'),
			'comment_content' => $_POST['text'],
		];
		$error = wp_new_comment($data_comm,true);
		if($error == false){
			echo json_encode(['error' => $error]);
			exit();
		}
	}
	function red_to_login(){
		echo json_encode(['url' => home_url('/log-in')]);
		exit();
	}


}


//add_action('before_post_content',[new classes\Preg],'preg');
=======
add_action( 'manage_posts_custom_column', 'true_fill_post_columns', 10, 1 );
add_action('customize_preview_init','client_customize_js');
add_action('after_setup_theme','cardoor_setup');
//add_action('admin_menu',function(){remove_menu_page('edit-comments.php');});
add_action('customize_register','client_customize');
add_action('wp_enqueue_scripts','cardoor_style');
add_action('widgets_init','cardoor_widget');
//add_action('before_post_content',[new classes\Preg],'preg');
>>>>>>> 7345f7615261a54ee692a33982c7f96adeee1b77
