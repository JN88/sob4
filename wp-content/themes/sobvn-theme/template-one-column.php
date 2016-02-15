<?php /* Template Name: One Column Template */  get_header(); ?>

	<main role="main">
		<div class="section-box section-mini box-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-push-8 text-right">
						<?php get_template_part('searchform'); ?>
					</div>
					<div class="col-md-8 col-md-pull-4">
						<div class="breadcrumb-box">
							<?php if(function_exists('bcn_display')) { bcn_display(); }?>
						</div>
						<h2 class="page-title no-line"><i class="fa fa-align-left mgR10"></i><?php the_title(); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<section class="page-section hide">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_content(); ?>

								<?php //comments_template( '', true ); // Remove if you don't want comments ?>

								<br class="clear">

								<?php //edit_post_link(); ?>

							</article>
							<!-- /article -->

						<?php endwhile; ?>

						<?php else: ?>

							<!-- article -->
							<article>

								<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

							</article>
							<!-- /article -->

						<?php endif; ?>
					</div>
				</div>
			</div><!-- /.ccontainer -->
		</section><!-- /section -->
		<div <?php post_class("one-column-template"); ?>>
			<section class="page-section">
				<div class="section-box">
					<div class="container">
						<div class="section-heading">
							<h2 class="section-title">Thiết kế website</h2>
							<div class="section-desc">Với nền tảng vững chắc trong lĩnh vực thiết kế website cho ngành du lịch.<br>Chúng tôi cam kết thiết kế lên những website tốt nhất cho doanh nghiệp du lịch của bạn</div>
						</div>
						<div class="divider-star"></div>
						<div class="section-body">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
				<div class="section-box my-featured box-info" id="my-featured">
					<div class="container">
						<div class="section-heading">
							<h2 class="section-title">Sự khác biệt của SOB.vn</h2>
						</div>
						<div class="section-body">
							<div class="row">
								<div class="col-md-3 item">
									<h4 class="title">Công nghệ đột phá</h4>
									<center class="image"><img alt="icon" src="http://localhost/sobvn/wp-content/themes/sobvn-theme/img/website.png"> </center>
									<div>Chúng tôi đem đến những sản phẩm cao cấp. Áp dụng nền tảng công nghệ và các giải pháp chuyên nghiệp trong thiết kế Web.</div>
								</div>
								<div class="col-md-3 item">
									<h4 class="title">Giao diện Responsive</h4>
									<center class="image"><img alt="icon" src="http://localhost/sobvn/wp-content/themes/sobvn-theme/img/responsive-web.png"> </center>
									<div>Theo xu hướng "Mobile First", ứng dụng công nghệ "Responsive Design" giúp các website hiển thị chuẩn trên mọi thiết bị.</div>
								</div>
								<div class="col-md-3 item">
									<h4 class="title">Chuẩn SEO Google</h4>
									<center class="image"><img alt="icon" src="http://localhost/sobvn/wp-content/themes/sobvn-theme/img/startup.png"> </center>
									<div>Tương thích mọi trình duyệt, tối ưu hóa Onpage website một cách chuyện nghiệp chuẩn SEO dễ dàng nâng cấp và chỉnh sửa.</div>
								</div>
								<div class="col-md-3 item">
									<h4 class="title">Dễ dàng sử dụng</h4>
									<center class="image"><img alt="icon" src="http://localhost/sobvn/wp-content/themes/sobvn-theme/img/analytics.png"> </center>
									<div>Dễ dàng quản lý nội dung, chỉnh sửa theo yêu cầu, thân thiện với người dùng. Mang lại giá trị cao cho Doanh nghiệp.</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="section-box">
					<div class="container">
						<div class="section-heading">
							<h2 class="section-title">Các gói website</h2>
						</div>
						<div class="divider-star"></div>
						<div class="section-body">
							<div class="row list-service-mac">
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac1.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac2.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac3.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac4.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac4.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac3.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac2.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
								<div class="col-md-3 col-sm-6">
									<h4>Thiết kế website</h4>
									<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/imac1.jpg" alt=""></a>
									<a class="btn btn-warning" href="#">Xem thêm</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</main>


<?php get_footer(); ?>
