<?php
	if(isset($_REQUEST['checkemail']) && $_REQUEST['checkemail'] == 'registered'){
		$p = sprintf(
			__( 'Registration complete. Please check your email.' ),
			site_url('/login')
		);
		?>
		<div class="reg-complete"><p><? echo $p;?></p></div>

		<?php
	}

?>



<div class="col-lg-4 col-md-8 m-auto">
	<div class="login-page-content">
		<div class="login-form">

			<?php

			if ( is_user_logged_in() ) {
				$user_name = wp_get_current_user();
				$user_name = $user_name->user_login;
				echo '<h2>Здравствуйте '.$user_name.'</h2>';
				echo "<div class = 'log-btn'><button><a href='".wp_logout_url() ."' class='button button-primary'>Выйти</a></button></div>";
			}
			else{
				echo '<h3>Welcome Back!</h3>';
				$return='';
			if (isset( $_REQUEST['erId'] ) ) {
				$error_codes = explode( ',', $_REQUEST['erId'] );
				foreach ( $error_codes as $error_code ) {
					switch ( $error_code ) {
						case 'wrong_user_data':
							$return .= '<p class="erId">Проверьте имя пользователя или пароль</p>';
							//$return .= '<p class="erId"> Забыли пароль<a href="'. wp_lostpassword_url().'">Забыли</a>?</p>';
							break;
						case 'confirm':
							$return .= '<p class="erId success">Инструкции по сбросу пароля отправлены на ваш email.</p>';
							break;
						case 'changed':
							$return .= '<p class="erId success">Пароль успешно изменён.</p>';
							break;
						case 'expiredkey':
						case 'invalidkey':
							$retun .= '<p class="erId">Недействительный ключ.</p>';
							break;
					}
				}
			}



			$form = wp_login_form([
				'echo'           => false,
				'redirect'       => site_url( $_SERVER['REQUEST_URI'] ),
				'form_id'        => 'loginform',
				'label_username' => '',
				'label_password' => '',
				'label_remember' => '',
				'label_log_in'   => __( 'Log In' ),
				'id_username'    => 'user_login',
				'id_password'    => 'user_pass',
				'id_remember'    => 'rememberme',
				'id_submit'      => 'wp-submit',
				'remember'       => false,
				'value_username' => NULL,
				'value_remember' => false
			]);
			echo $return;
			echo $form;
			?>
			<p class="erId"><a href="<?php echo wp_lostpassword_url();?>"> Забыли пароль</a>?</p>
		</div>

		<div class="login-other">
			<span class="or">or</span>
			<a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Login With Facebook</a>
			<a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Login With Google</a>
		</div>
		<div class="create-ac">
			<p>Don't have an account? <a href="<?php echo site_url('/register/'); ?>">Sign Up</a></p>
		</div>
		<div class="login-menu">
			<a href="about.html">About</a>
			<span>|</span>
			<a href="contact.html">Contact</a>
		</div>
	</div>
</div>
<?php }