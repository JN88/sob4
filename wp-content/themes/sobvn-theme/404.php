<?php get_header(); ?>

	<main role="main">
		<div class="container">
			<!-- section -->
			<section class="section-box">

				<!-- article -->
				<article id="post-404">
					<img src="<?php echo get_template_directory_uri();?>/img/404.png" alt="404 Error">
					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<?php get_template_part('searchform'); ?>
						</div>
					</div>
					<h1 class="h3"><?php _e( 'Trang bạn đang tìm kiếm hiện không tồn tại', 'html5blank' ); ?></h1>
					<h2>
						<a href="<?php echo home_url(); ?>"><?php _e( 'Quay về <i class="fa fa-home f30"></i> trang chủ', 'html5blank' ); ?></a>
					</h2>
				</article>
				<!-- /article -->

			</section>
			<!-- /section -->
		</div>
	</main>

<?php get_footer(); ?>
