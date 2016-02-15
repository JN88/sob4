<?php get_header(); ?>

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
						<h2 class="page-title no-line"><i class="fa fa-tags mgR10"></i><?php echo single_tag_title('', false); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<section class="page-section category">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<?php get_template_part('loop'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
					<div class="col-md-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
