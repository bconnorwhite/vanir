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
				<input id="form-submit" type="submit" name="submit" value="Send" onclick="sendEmail()" />
			</div>
		</form>
	</div>
</div>
<script>
	function sendEmail(){
		var xhttp = new XMLHttpRequest();
		var url = "<?php bloginfo('template_url'); ?>" + "/mail.php";
		var params = "name=" + document.getElementById('form-name').value + "&email=" + document.getElementById('form-email').value + "&message=" + document.getElementById('form-message').value;
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200){
				document.getElementById('contact-form').style.opacity = 0;
				var name = document.getElementById('form-name').value;
				if(/^[A-Za-z\s]+$/.test(name)){
					name = name.split(" ")[0];
					document.getElementById('thanks').innerHTML = "Thanks " + name + "! Your message has been sent.";
				}
				setTimeout(function(){
					document.getElementById('contact-form').style.visibility = "hidden";
					document.getElementById('form-message').style.height = "0";
					document.getElementById('contact-form').style.height = "0";
					document.getElementById('thanks').style.display = "block";
				}, 1000);
			}
		};
		xhttp.open("POST", url, true);
		xhttp.send(params);
	}
</script>
