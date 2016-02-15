			<!-- footer -->
			<footer id="footer" class="footer" role="contentinfo">
				<nav class="nav-footer">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<?php footer_menu() ?>
							</div>
							<div class="col-md-4 text-right">
							<div class="newsletter">
								<h5>Nhận tin từ <span>SOB.vn</span></h5>
								<input class="form-control" type="text" placeholder="Nhập Email của bạn...">
							</div>
								<div class="like-me">
									<a href="#"><i class="fa fa-facebook-square"></i></a>
									<a href="#"><i class="fa fa-google-plus-square"></i></a>
									<a href="#"><i class="fa fa-youtube-square"></i></a>
									<a href="#"><i class="fa fa-twitter-square"></i></a>
									<a href="#"><i class="fa fa-linkedin-square"></i></a>
									<a href="#"><i class="fa fa-pinterest-square"></i></a>
								</div>
							</div>
						</div>
					</div>
				</nav>
				<!-- /.container -->
				<div class="copyright">
					<div class="container">
						<div class="row text-left">
							<div class="col-md-8">
								<?php footer_link() ?>
							</div>
							<div class="col-md-4 text-right">
								&copy; Copyright <?php echo date('Y'); ?> <a href="http://www.sob.vn"><?php bloginfo('name'); ?>™</a>. All rights reserved
							</div>
						</div>
        			</div>
				</div>
				<div class="hotline-on-mobile">
					<a href="tel:+84936453188"><span>Liên hệ SOB.vn</span> 093 6453 188</a>
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

	</body>
</html>
