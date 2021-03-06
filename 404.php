<?php
/**
 * The template for displaying 404 pages.
 *
 * @package JLT
 * @since JLT 1.0.0
 */

get_header(); ?>

<section id="primary" class="full-width">
    <main id="content" role="main">

        <div class="page-inner-wrap">

            <article id="post-0" class="post error404 not-found">
               
                <div class="thin-inner">
               
                    <header class="entry-header">
                        <h1 class="entry-title p-entry-title"><?php _e( 'It looks like we got you lost. Sorry!', jlt_text_domain() ); ?></h1>
                    </header>

                    <div class="entry-content e-entry-content">

                        <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help. If not, try the menu above.', jlt_text_domain() ); ?></p>

                        <?php main_search_form(); ?>

                    </div>
                
                </div>
                
            </article>
            
            <?php the_widget( 'jlt_Widget_Recent_Posts' ); ?>

        </div>

    </main>
</section>

<?php get_footer(); ?>