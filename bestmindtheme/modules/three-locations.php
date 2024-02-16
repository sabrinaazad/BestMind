<?php 
    if( get_sub_field('white_overlay') ) 
    {
    $white_overlay = "white-overlay";
    } else {
    $white_overlay = "";
    }
    if( get_sub_field('yellow_overlay') ) 
    {
    $yellow_overlay = "yellow-overlay";
    } else {
    $yellow_overlay = "";
    }
?>
<div class="section section--three-locations full-width <?php echo $white_overlay; ?> <?php echo $yellow_overlay; ?>" style="background-image: url(<?php the_sub_field('background_image'); ?>)">
    <div class="section-wrapper">

        <?php $preheading = get_sub_field('preheading');
        if( $preheading ): ?>
            <span class="preheading uppercase"><?php echo $preheading; ?></span>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
       
        <?php if( have_rows('locations') ): ?>
        <div class="locations">
            <?php while( have_rows('locations') ): the_row(); ?>
                
            <?php
            $location = get_sub_field('location');
            if( $location ): ?>
                <div class="location">
                    
                    <h4><?php echo ( $location->post_title ); ?></h4>
                    <div><?php echo ( $location->post_excerpt ); ?></div>
                    <a href="<?php echo ( $location->post_permalink );?> " class="btn btn-secondary">Learn More</a>
                  
                </div>
            <?php endif; ?>

            <?php endwhile; ?>
         </div>    
        <?php endif; ?>
       
    </div>
</div>