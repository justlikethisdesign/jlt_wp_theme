<?php
/**
 * Template part for displaying posts in card blocks - video block - In recent widget
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @link https://codex.wordpress.org/Function_Reference/get_post_gallery_images
 * @link https://codex.wordpress.org/Function_Reference/get_post_gallery
 *
 * @package JLT
 * @since JLT 1.0.0
 */

$card_class = get_post_format();
if ( $card_class ) {
    $card_class = ' card-' . $card_class;
}

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-4 card' . $card_class); ?><?php schema_semantics_tags( 'post' );?> itemref="site-publisher">

    <a href="<?php the_permalink(); ?>" class="u-url url" title="<?php printf( esc_attr__( 'Permalink to %s', jlt_text_domain() ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark" itemprop="url">

        <?php jlt_the_card_video_image();?>

        <?php if( get_the_excerpt() ){ ?>

            <div class="entry-text sneak-in">
                <h2 class="entry-title p-name" itemprop="name headline"><?php the_title(); ?></h2>
                <?php jlt_posted_on(); ?>

                <?php if( get_the_excerpt() ){ ?>
                    <p><?php echo get_the_excerpt(); ?></p>
                <?php } ?>
            </div>

        <?php
        }
        ?>

	</a>

</article>
