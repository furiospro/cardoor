
<div class="col-lg-4 col-md-8 m-auto">
	<div class="login-page-content">
		<div class="login-form">
			<h3>Сброс пароля</h3>
<?php


if ( isset( $_SESSION['erId'] ) ) {
	//$error_codes = explode( ',', $_REQUEST['erId'] );

	foreach ( $_SESSION['erId'] as $error_code ) {
		switch ( $error_code ) {
			case 'password_reset_mismatch':
				$return .= '<p class="erId">Пароли не совпадают!</p>';
				break;
			case 'invalid_email':
				$return .= '<p class="erId">На сайте не найдено пользователя с указанным email.</p>';
				break;
		}
	}
}


if ( isset( $_REQUEST['login'] ) && isset( $_REQUEST['key'] ) ) {

	$form .= '<h3>Укажите новый пароль</h3>
			<form name="resetpassform" id="resetpassform" action="' . site_url( 'wp-login.php?action=resetpass' ) . '" method="post" autocomplete="off">
				<input type="hidden" id="user_login" name="login" value="' . esc_attr( $_REQUEST['login'] ) . '" autocomplete="off" />
				<input type="hidden" name="key" value="' . esc_attr( $_REQUEST['key'] ) . '" />
         			<p>
					<label for="pass1">Новый пароль</label>
					<input type="password" name="pass1" id="pass1" class="input" size="20" value="" autocomplete="off" />
				</p>
				<p>
					<label for="pass2">Повторите пароль</label>
					<input type="password" name="pass2" id="pass2" class="input" size="20" value="" autocomplete="off" />
				</p>
 
				<p class="description">' . wp_get_password_hint() . '</p>
 
				<p class="resetpass-submit">
					<input type="submit" name="submit" id="resetpass-button" class="button" value="Сбросить" />
				</p>
			</form>';

	// возвращаем форму и выходим из функции
	echo $form;
}else{
	?>

	<form id="lostpasswordform" action="<?php echo wp_lostpassword_url();?>" method="post">
		<div class="username">
			<input name="user_login" type="email" placeholder="Email">
		</div>
		<div class="log-btn">
			<button type="submit"><i class="fa fa-sign-in"></i> Отправить</button>
		</div>
	</form>
	<?php
}
?>
		</div></div></div>
