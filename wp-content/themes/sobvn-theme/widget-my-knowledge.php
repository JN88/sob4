<div class="section-heading mgB20">
	<h3 class="section-title text-right">Kiến thức website - SEO website</h3>
</div>
<ul class="list-news">
<?php $top_cats = new WP_query(); $top_cats->query('showposts=3&cat=11'); ?>

				        <?php if ( have_posts() ) : ?>

				          <?php while ($top_cats->have_posts()) : $top_cats->the_post(); ?>
		<li>
			<div class="media">
				<div class="pull-right">
					<a href="<?php the_permalink(); ?>">
						<?php
							if ( has_post_thumbnail()) : // Check if thumbnail exists 
								echo get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'img-responsive w80' ) );
						 	endif;
						 ?>
					</a>

				</div>
				<div class="media-body">
					<h4 class="title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
					<div class="desc"><?php html5wp_excerpt(html5wp_index);?></div>
				</div>
			</div>
		</li>

<?php endwhile; ?> 

	<?php wp_reset_query(); ?> 

		<?php endif; ?>
</ul>