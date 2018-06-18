<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #page-wrapper div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JLT
 * @since JLT 1.0.0
 */

?>   
        </div> <!-- Page Wrapper Close -->        
        
    </div> <!-- Footer Pusher Close -->    
    
    <footer id="colophon" role="contentinfo">

        <div id="site-publisher" class="page-inner-wrap" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">

            <meta itemprop="name" content="<?php echo get_bloginfo( 'name', 'display' ); ?>" />
            <meta itemprop="url" content="<?php echo home_url( '/' ); ?>" />
            
            <?php if( get_theme_mod('jlt_footer') ){ ?>
                <p class="custom"><?php echo get_theme_mod('jlt_footer'); ?></p>
            <?php } ?>
            
            <p class="copyright" xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">JLT by 
                
                <a class="external" xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/BenjaminClark" property="cc:attributionName" rel="cc:attributionURL"><a class="external" href="http://www.justlikethis.co.uk">JLT</a> is licensed under <a class="external" rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a></p>
            
        </div>

    </footer>      

    <a class="toTop smooth"><i class="fa fa-angle-up"></i></a>
        
    <?php wp_footer();?>
    
    <?php echo get_theme_mod('jlt_scripts_footer', ''); ?>
 
</body>
</html>
