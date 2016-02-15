<?php get_header(); ?>

	<main role="main">
		<div class="section-box section-mini box-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="breadcrumb-box">
							<?php if(function_exists('bcn_display')) { bcn_display(); }?>
						</div>
						<h2 class="page-title no-line"><i class="fa fa-align-left mgR10"></i><?php single_cat_title(); ?></h2>
					</div>
					<div class="col-md-4 text-right">
						<?php get_template_part('searchform'); ?>
					</div>
				</div>
			</div>
		</div>
		<section class="page-section category">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php get_template_part('loop', 'products'); ?>
						<?php get_template_part('pagination'); ?>
					</div>
				</div>
			</div>
		</section>
	</main>

<?php get_footer(); ?>
