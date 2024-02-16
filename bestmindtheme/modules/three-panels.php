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
<div class="section section--three-panels full-width <?php echo $white_overlay; ?> <?php echo $yellow_overlay; ?>" style="background-image: url(<?php the_sub_field('background_image'); ?>)">
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
                <?php  if( have_rows('panels') ): while( have_rows('panels') ) : the_row(); ?>
                    <div class="panel">
                        <img src="<?php the_sub_field('icon'); ?>" alt="icon" />
                        <h4><?php the_sub_field('title'); ?></h4>
                        <p><?php the_sub_field('blurb'); ?></p>
                    </div>
                <?php endwhile;  else :  endif; ?>
                </div>    
            </div>
        </div>
    </div>
</div>