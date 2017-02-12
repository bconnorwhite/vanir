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
				<?php if(is_front_page()){ ?>
					<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/menu.js"></script>
				<?php }
				wp_footer(); ?>
			</footer>
	</body>
</html>
