<ul class="row list-my-products">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<li class="col-sm-6 col-xs-6 item">
			<div class="inner">
				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php
							if ( has_post_thumbnail()) : // Check if thumbnail exists 
								echo get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'img-responsive' ) );
						 	endif;
						 ?>
					</a>
				<?php endif; ?>
				<!-- /post thumbnail -->
				<div class="action-hover">
					<a class="view-demo" data-toggle="modal"  href="#modal-prod-<?php the_id();?>">Xem DEMO<br><i class="fa fa-search-plus"></i></a>
					<a class="btn btn-info" data-toggle="modal"  href="<?php the_permalink(); ?>">Khám phá ngay</a>
				</div>
			</div>

			<div class="modal fade" id="modal-prod-<?php the_id();?>">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title"><?php the_title(); ?></h4>
						</div>
						<div class="modal-body">
							<?php the_content(); ?>
						</div>
						<div class="modal-footer text-center-ipt">
							<button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG LẠI</button>
							<a type="button" class="btn btn-primary" href="<?php the_permalink(); ?>">XEM CHI TIẾT</a>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

		</li>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<li class="no-product">
		<h2 class="text-center"><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</li>
	<!-- /article -->

<?php endif; ?>
</ul>