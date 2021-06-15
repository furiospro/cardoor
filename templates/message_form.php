<?php
?>
<div class="contact-form">
	<form name="message">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="name-input">
					<input name="name" type="text" placeholder="Full Name" data-imp="important">
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="email-input">
					<input name="email" type="email" placeholder="Email Address" data-imp="important">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="website-input">
					<input name="website" type="url" placeholder="Website">
				</div>
			</div>

			<div class="col-lg-6 col-md-6">
				<div class="subject-input">
					<input name="subject" type="text" placeholder="Subject">
				</div>
			</div>
		</div>

		<div class="message-input">
			<textarea name="review" cols="30" rows="10" placeholder="Message" data-imp="important"></textarea>
		</div>

		<div class="input-submit">
			<a onclick="sendFeeds(this)">Submit Message</a><span class='waiting spinner'></span>
		</div>
	</form>
	<div class="warning">
		<p></p>
		<span></span>
	</div>
</div>
