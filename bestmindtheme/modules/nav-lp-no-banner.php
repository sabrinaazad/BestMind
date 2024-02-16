<nav class="main-nav full-width alt" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <img src="/wp-content/themes/bestmindtheme/assets/bestmind-logo.png" alt="Bestmind Logo" class="logo">
            </div>

            <?php
            if( function_exists( 'geot_target' ) ) {
                // Usage with cities
                if ( geot_target_state( [ 'Alabama','Alaska','Arizona','Arkansas','California','Connecticut','Delaware','Florida','Georgia','Hawaii','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','West Virginia','Wisconsin','Wyoming' ] ) ) {
                    // show content ?>
                   
                        <a class="btn btn-secondary" href="<?php the_field('lp_nav_link' , 'option'); ?>"><?php the_field('lp_nav_link_label' , 'option'); ?></a>
                
                <?php } ?>
    
                <?php // Usage with cities
                if ( geot_target_state( [ 'Oregon', 'Washington', 'Idaho' ] ) ) {
                    // show content ?>
                   
                        <a class="btn btn-secondary" href="<?php the_field('lp_nav_link_OR' , 'option'); ?>"><?php the_field('lp_nav_link_label_OR' , 'option'); ?></a>
                
                   <?php } ?>
    
                <?php // Usage with cities
                if ( geot_target_state( [ 'Colorado' ] ) ) {
                    // show content ?>
                   
                        <a class="btn btn-secondary" href="<?php the_field('lp_nav_link_CO' , 'option'); ?>"><?php the_field('lp_nav_link_label_CO' , 'option'); ?></a>
                
                <?php } 
            } else { ?>
                
                <?php if( get_field('lp_nav_link' , 'option') ) : ?>
                    <a class="btn btn-secondary" href="<?php the_field('lp_nav_link' , 'option'); ?>"><?php the_field('lp_nav_link_label' , 'option'); ?></a>    
                <?php endif; ?> 

            <?php } ?>
        </div>
    </div>
</nav>
