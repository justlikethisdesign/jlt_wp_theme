<footer class="entry-meta">

    <meta itemprop="wordCount" content="<?php echo word_count($post->ID);?>">
    <meta itemprop="inLanguage" content="<?php echo get_locale();?>">
	
    <?php
    /* translators: used between list items, there is a space after the comma */
    $tags_list = get_the_tag_list( '', __( ' ', jlt_text_domain() ) );
    if ( $tags_list ) {
    ?>

        <span class="tag-links" itemprop="keywords">
            <?php printf( __( '%1$s', jlt_text_domain() ), $tags_list ); ?>
        </span>

    <?php } // End if $tags_list ?>
	
	<?php edit_post_link( __( 'Edit', jlt_text_domain() ), '<span class="edit-link">', '</span>' ); ?>
	
</footer><!-- #entry-meta -->
