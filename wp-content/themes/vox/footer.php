			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<div class="container d-lg-flex flex-lg-wrap">
					<div class="logo-container d-flex align-items-center justify-content-center justify-content-lg-start w-lg-fit">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo-bookmark_v2.svg" alt="Bookmark">
						</a>
						<h2>BOOKMARK</h2>
					</div>

					<div class="d-flex justify-content-center align-items-center w-lg-fit">
						<?php wp_nav_menu(array('theme_location' => 'footer-menu', 'fallback_cb' => 'false')); ?>
					</div>

					<div class="social-container d-flex justify-content-center w-lg-fit">
						<ul class="social">
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/icon-facebook.svg" alt="Facebook">
								</a>
							</li>
							<li>
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
									<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/icon-twitter.svg" alt="Twitter">
								</a>
							</li>
						</ul>
					</div>
				</div>

			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<!-- jQuery first, then Popper.js, then Bootstrap JS. -->
		<script src="node_modules/jquery/dist/jquery.slim.min.js"></script>
		<script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	</body>
</html>
