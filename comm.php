<?php
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );

$aria_req = ( $req ? " aria-required='true'" : '' );

$fields =  array(

    'author' => '<p class="comment-form-author">'.'<label for="author">'. __( 'Name' ) .'</label> '. ( $req ? '<span class="required">*</span>' : '' ) .

        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .'" size="30"' . $aria_req .' /></p>',

    'email'  => '<p class="comment-form-email"><label for="email">' . __( 'Email' ) .'</label> '. ( $req ? '<span class="required">*</span>' : '' ) .

        '<input id="email" name="email" type="text" value="'. esc_attr(  $commenter['comment_author_email'] ) .'" size="30"'. $aria_req .'/></p>',

);

$comments_args = array(

    'fields' =>  $fields

);

comment_form($comments_args);


?>
<!--<form name="comment">
	<div class="row">
		<div class="col-lg-6 col-md-6">
			<div class="name-input">
				<input name="name" type="text" placeholder="Full Name">
			</div>
		</div>

		<div class="col-lg-6 col-md-6">
			<div class="email-input">
				<input name="email" type="email" placeholder="Email Address">
			</div>
		</div>
	</div>

	<div class="message-input">
		<textarea name="review" cols="30" rows="5" placeholder="Write Your Feedback Here!"></textarea>
	</div>

	<div class="input-submit">
		<a onclick="sendFeeds(this)">Submit</a>
		<button type="reset">Clear</button>
	</div>
</form>-->
