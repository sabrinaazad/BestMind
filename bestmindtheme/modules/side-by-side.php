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
<div class="section section--side-by-side full-width <?php echo $white_overlay; ?> <?php echo $yellow_overlay; ?>" style="background-image: url(<?php the_sub_field('background_image'); ?>)">
    <div class="section-wrapper">
        <div class="two-col">
            <div class="col">

                <?php $preheading = get_sub_field('preheading');
                if( $preheading ): ?>
                    <span class="preheading uppercase"><?php echo $preheading; ?></span>
                <?php endif; ?>

                <?php $heading = get_sub_field('heading');
                if( $heading ): ?>
                    <h2 class="heading"><?php echo $heading; ?></h2>
                <?php endif; ?>

                <?php $blurb = get_sub_field('blurb');
                if( $blurb ): ?>
                    <?php echo $blurb; ?>
                <?php endif; ?>

            </div>
            <div class="col">
                <div class="panels">
                <?php $image = get_sub_field('image');
                if( $image ): ?>
                    <img src="<?php echo $image; ?>" alt="featured image" />
                <?php endif; ?>
                <?php $embed = get_sub_field('oembed');
                    if( $embed ): ?>
                    <div class="video-wrapper">
                        <?php echo $embed; ?>
                    </div>
                    <?php endif; ?>
                </div>    
            </div>
        </div>
    </div>
</div>