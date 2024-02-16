<div class="topbar desktop-only alt">
    <div class="announcement">
        <div class="uppercase align--center"><?php the_field('announcement', 'option'); ?></div>
    </div>
</div>
<nav class="main-nav full-width alt" id="mainNav">
    <div class="sticky-wrapper">
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <a href="/">
                    <img src="/wp-content/themes/bestmindtheme/assets/bestmind-logo.png" alt="Bestmind Logo" class="logo">
                </a>
            </div>
            <?php
            if( function_exists( 'geot_target' ) ) {
                // Usage with cities
                if ( geot_target_state( [ 'Alabama','Alaska','Arizona','Arkansas','California','Connecticut','Delaware','Florida','Georgia','Hawaii','Illinois','Indiana','Iowa','Kansas','Kentucky','Louisiana','Maine','Maryland','Massachusetts','Michigan','Minnesota','Mississippi','Missouri','Montana','Nebraska','Nevada','New Hampshire','New Jersey','New Mexico','New York','North Carolina','North Dakota','Ohio','Oklahoma','Pennsylvania','Rhode Island','South Carolina','South Dakota','Tennessee','Texas','Utah','Vermont','Virginia','West Virginia','Wisconsin','Wyoming' ] ) ) {
                    // show content ?>
                    <div class="main-nav__phone">
                        <a class="btn btn-secondary" href="<?php the_field('link2', 'option'); ?>"><?php the_field('link2_label', 'option'); ?></a>
                    </div>
                <?php } ?>
    
                <?php // Usage with cities
                if ( geot_target_state( [ 'Oregon', 'Washington', 'Idaho' ] ) ) {
                    // show content ?>
                    <div class="main-nav__phone">
                        <a class="btn btn-secondary" href="<?php the_field('link2_OR', 'option'); ?>"><?php the_field('link2OR_label', 'option'); ?></a>
                    </div>
                   <?php } ?>
    
                <?php // Usage with cities
                if ( geot_target_state( [ 'Colorado' ] ) ) {
                    // show content ?>
                    <div class="main-nav__phone">
                        <a class="btn btn-secondary" href="<?php the_field('link2_CO', 'option'); ?>"><?php the_field('link2CO_label', 'option'); ?></a>
                    </div>
                <?php } 
            } else { ?>
                 <div class="main-nav__phone">
                    <a class="btn btn-secondary" href="<?php the_field('link2', 'option'); ?>"><?php the_field('link2_label', 'option'); ?></a>
                </div>
            <?php } ?>
        </div>
    </div>
</nav>
