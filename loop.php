<?php

/**
 * This file creates the most basic loop required for the theme
 **/

if ( have_posts() ) { ?>

    <div id="ajax-post-wrap" class="g-cnt mas basic">
        <div class="mas-col-sizer"></div>
        <div class="mas-gut-sizer"></div>

        <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/cards/card', get_post_format() );

        endwhile; // end of the loop.
        ?>

    </div>

    <?php

    jlt_content_nav( 'nav-below', __( 'Load More', jlt_text_domain() ) );

}
