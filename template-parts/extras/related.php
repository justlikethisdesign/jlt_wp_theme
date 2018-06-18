<?php

$args = array(
    'post_type'     => get_post_type($post->ID),
    'orderby'       => 'ASC',
    'post__in'      => get_related_posts(),
);

$related_loop = new WP_Query( $args );

// If we have related posts to show
if ( $related_loop->found_posts > 0 ){

?>

    <div class="related-posts">

        <div class="page-inner-wrap group">

            <h2><?php _e( 'Related Articles', jlt_text_domain() ); ?></h2>

            <div class="g-cnt basic">

                <?php

                while ($related_loop->have_posts()) : $related_loop->the_post();

                    get_template_part( 'template-parts/post/card', 'child' );

                endwhile;

                wp_reset_postdata();

                ?>

            </div>

        </div>

    </div>

<?php
}
