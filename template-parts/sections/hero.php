<?php 

$section = get_field( 'hero' );
if( $section ){
                               
?>
   
<section class="hero center-text">
    
    <div class="container">
    
        <?php if( $section['heading'] ){ ?>
           
            <h1><?php echo $section['heading'];?></h1>
            
        <?php } ?>
    
        <?php if( $section['sub_heading'] ){ ?>
           
            <p class="description p-summary e-content" itemprop="description"><?php echo $section['sub_heading'];?></h2>
            
        <?php } ?>
    
    </div>
    
</section>

<?php } ?>