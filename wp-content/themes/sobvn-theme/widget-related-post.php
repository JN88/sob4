<?php
    //for use in the loop, list 5 post titles related to first tag on current post
    $tags = wp_get_post_tags($post->ID);
    if ($tags) {
?>
   

<?php
        $first_tag = $tags[0]->term_id;
        $args=array(
        'tag__in' => array($first_tag),
        'post__not_in' => array($post->ID),
        'posts_per_page'=>3,
        'caller_get_posts'=>1
    );
        $my_query = new WP_Query($args);
        if( $my_query->have_posts() ) {
?>
     <div class="panel panel-transparent related-post">
        <h4 class="panel-heading"><i class="fa fa-align-left mgR10"></i> Bài viết Liên quan</h4>
        <div class="panel-body">
            <!-- List Related Post -->
            <ul class="list-news-ver row">
<?php
            while ($my_query->have_posts()) : $my_query->the_post();
?>
                <li class="col-sm-4">
                    <div class="media">
                        <a class="image pull-left" href="<?php the_permalink() ?>">
                            <?php
                                if ( has_post_thumbnail()) : // Check if thumbnail exists 
                                    echo get_the_post_thumbnail($post_id, 'thumbnail', array( 'class' => 'img-responsive w80' ) );
                                endif;
                             ?>
                        </a>
                        <div class="media-body">
                            <a class="title" href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
                        </div>
                    </div>
                </li>
<?php
            endwhile;
?>
            </ul>
                <!-- /List Related Post -->
            </div>
        </div>
<?php
        }
        else {
            echo "<br>";
        }
        wp_reset_query();
    }
?>