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
						<h2 class="page-title no-line"><i class="fa fa-align-left mgR10"></i><?php the_title(); ?></h2>
					</div>
				</div>
			</div>
		</div>
		<section class="page-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<?php if (have_posts()): while (have_posts()) : the_post(); ?>

							<!-- article -->
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

								<?php the_content(); ?>

								<div class="box-tags"><?php the_tags( __( '<i class="fa fa-tags mgR5"></i>Tags: ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?></div>

								<br class="clear">
								<?php get_template_part('widget', 'related-post' );?>
								<div class="fb-comments" data-href="<?php echo get_permalink($post->ID); ?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
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
					<div class="col-md-3">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div><!-- /.ccontainer -->
		</section><!-- /section -->
	</main>


<?php get_footer(); ?>
