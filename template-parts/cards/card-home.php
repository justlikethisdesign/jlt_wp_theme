<?php
/**
 * Template part for displaying posts in card blocks - fallback block
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package JLT
 * @since JLT 1.0.0
 */

$card_class = get_post_format();
if ( $card_class ) {
    $card_class = ' card-' . $card_class;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-4 card masonry-brick' . $card_class); ?><?php schema_semantics_tags( 'post' );?> itemref="site-publisher">

    <a href="<?php the_permalink(); ?>" class="u-url url" title="<?php printf( esc_attr__( 'Permalink to %s', jlt_text_domain() ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" itemprop="url">

        <h2 class="entry-title p-name screen-reader-text" itemprop="name headline"><?php the_title(); ?></h2>

        <?php

        jlt_the_card_image();

        jlt_interaction_bar(true);

        ?>

	</a>

</article>
