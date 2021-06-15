<div class="row">
	<div class="col-lg-5 col-md-8 m-auto">
		<div class="login-page-content">
			<div class="login-form">
				<h3>Sign Up</h3>

<?php
$page = site_url('wp-login.php?action=register');

if(isset($_REQUEST['errors'])){
	$p='';
	$errors = explode(',',$_REQUEST['errors']);
	foreach($errors as $error){
		$p .= "<p class='erId'>$error</p>";
	}
	echo $p;

}

$form = '
		<form name="registerform" id="registerform" action="' . esc_url( $page ) . '" method="post">
			<div class="name">
				<div class="row">
					<div class="col-md-6">
						<input name="first_name" type="text" placeholder="First Name">
					</div>
					<div class="col-md-6">
						<input name="last_name" type="text" placeholder="Last Name">
					</div>
				</div>
			</div>
			<div class="username">
				<input name="email" type="email" placeholder="Email">
			</div>
			<div class="username">
				<input name="user_login" type="text" placeholder="Username">
			</div>
			<div class="password">
				<input name="user_pass" type="password" placeholder="Password">
			</div>
			<div class="log-btn">
				<button name="wp-submit" type="submit"><i class="fa fa-check-square"></i> Sign Up</button>
			</div>
		</form>';
echo $form;
?>			</div>
					<div class="login-other">
						<span class="or">or</span>
						<a href="#" class="login-with-btn facebook"><i class="fa fa-facebook"></i> Signup With Facebook</a>
						<a href="#" class="login-with-btn google"><i class="fa fa-google"></i> Signup With Google</a>
					</div>
					<div class="create-ac">
						<p>Have an account? <a href="login.html">Sign In</a></p>
					</div>
					<div class="login-menu">
						<a href="about.html">About</a>
						<span>|</span>
						<a href="contact.html">Contact</a>
					</div>
					</div>
				</div>
			</div>