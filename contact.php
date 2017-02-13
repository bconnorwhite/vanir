<div id="contact">
	<div class="wrap">
		<h2>Let's Work Together!</h2>
		<p>I am currently accepting projects and would love to discuss yours.</p>
		<p id="thanks">Thanks! Your message has been recorded.</p>
		<form id="contact-form" action="" method="POST" onsubmit="return false;">
			<div class="info">
				<div class="field">
					<p>Name:</p>
					<input id="form-name" type="text" name="name" />
				</div>
				<div class="field">
					<p>Email:</p>
					<input id="form-email" type="text" name="email" />
				</div>
			</div>
			<textarea id="form-message" name="message" placeholder="Message:" rows="5"></textarea>
			<div class="send">
				<input id="form-submit" type="submit" name="submit" value="Send" onclick='sendEmail("<?php echo(bloginfo('template_url')) .'/mail.php'; ?>")' />
			</div>
		</form>
	</div>
</div>
<script async type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/contact.js"></script>
