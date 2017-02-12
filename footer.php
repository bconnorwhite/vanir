			<footer>
				<div class='wrap'>
					<div class='social'>
						<a href="http://www.linkedin.com/in/bconnorwhite" alt="LinkedIn">
							<i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i>
						</a>
						<a href="mailto:connor@connorwhite.org" alt='Email'>
							<i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
				<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400|Merriweather:300,400,700' rel='stylesheet' type='text/css'>
				<link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.min.css">
				<?php if(is_front_page()){ ?>
					<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/menu.js"></script>
				<?php }
				wp_footer(); ?>
			</footer>
	</body>
</html>
