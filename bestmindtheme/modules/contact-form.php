<section class="section section--contact-form">
    <div class="section-wrapper">
        <h2 class="heading"><?php the_sub_field("form_heading"); ?></h2>
        <p><?php the_sub_field("form_blurb"); ?></p>
        <?php
        if( function_exists( 'geot_target' ) ) {
            
            
            if( geot_target_state( [ 'Colorado' ] ) ) { ?>

                <?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="49"]'); ?>
           
            <?php } elseif( geot_target_state( [ 'Oregon', 'Washington', 'Idaho' ] ) ) { ?>
                
                <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true" tabindex="49"]'); ?>
        
            <?php } else { ?>

                <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]'); ?>

            <?php } ?>
        <?php } else { ?>

            <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="49"]'); ?>

        <?php } ?>
    </div>
</section>