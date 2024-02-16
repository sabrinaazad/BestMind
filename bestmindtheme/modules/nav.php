<div class="topbar desktop-only">
    <div class="announcement">
        <div class="uppercase align--center"><?php the_field('announcement', 'option'); ?></div>
    </div>
</div>
<nav class="main-nav full-width test" id="mainNav">
    <div class="sticky-wrapper">
        <div class="topbar desktop-only">
            
            <div class="content">

                <?php $phoneOR = get_field('phone_number_OR', 'options' ); ?>
                <?php $phone = get_field('phone_number', 'options'); ?>
                
                <?php if( function_exists( 'geot_target' ) ) { ?>

                    <?php echo do_shortcode('[geot_filter_state state="OR,ID,WA"]<div class="phone"><a class="link" href="tel:'. $phoneOR .'">'. $phoneOR .'</a></div>[/geot_filter_state]');?>
                    <?php echo do_shortcode('[geot_filter_state exclude_state="OR,ID,WA"]<div class="phone"><a class="link" href="tel:'. $phone .'">'. $phone .'</a></div>[/geot_filter_state]');?>
                
                <?php } else { ?>
                        <div class="phone"><a class="link" href="tel:<?php $phone ?>"><?php $phone ?></a></div>
                <?php } ?>


                <div class="links">
                    <?php $linkORlabel = get_field('linkOR_label', 'options' ); ?>
                    <?php $linkORurl = get_field('linkOR_url', 'options'); ?>
                    <?php $linkCOlabel = get_field('linkCO_label', 'options' ); ?>
                    <?php $linkCOurl = get_field('linkCO_url', 'options'); ?>
                    <?php $linklabel = get_field('link_label', 'options' ); ?>
                    <?php $linkurl = get_field('link_url', 'options'); ?>

                    <?php $buttonORlabel = get_field('buttonOR_label', 'options' ); ?>
                    <?php $buttonORurl = get_field('buttonOR_url', 'options'); ?>
                    <?php $buttonCOlabel = get_field('buttonCO_label', 'options' ); ?>
                    <?php $buttonCOurl = get_field('buttonCO_url', 'options'); ?>
                    <?php $buttonlabel = get_field('button_label', 'options' ); ?>
                    <?php $buttonurl = get_field('button_url', 'options'); ?>

                    <?php if( function_exists( 'geot_target' ) ) { ?>

                        <?php echo do_shortcode('[geot_filter_state state="OR,ID,WA"]<a class="link" target="_blank" href="'. $linkORurl .'">'. $linkORlabel .'</a>[/geot_filter_state]');?>
                        <?php echo do_shortcode('[geot_filter_state state="CO"]<a class="link" target="_blank" href="'. $linkCOurl .'">'. $linkCOlabel .'</a>[/geot_filter_state]');?>
                        <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR,ID,WA"]<a class="link" target="_blank" href="'. $linkurl .'">'. $linklabel .'</a>[/geot_filter_state]');?>

                        <?php echo do_shortcode('[geot_filter_state state="OR,ID,WA"]<a class="btn btn-secondary" target="_blank" href="'. $buttonORurl .'">'. $buttonORlabel .'</a>[/geot_filter_state]');?>
                        <?php echo do_shortcode('[geot_filter_state state="CO"]<a class="btn btn-secondary" target="_blank" href="'. $buttonCOurl .'">'. $buttonCOlabel .'</a>[/geot_filter_state]');?>
                        <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"]<a class="btn btn-secondary" target="_blank" href="'. $buttonurl .'">'. $buttonlabel .'</a>[/geot_filter_state]');?>
                        
                    <?php } else { ?>
                            
                        <a class="link" href="<?php $linkurl ?>"><?php $linklabel ?></a>  
                        <a class="btn btn-secondary" target="_blank" href="<?php $buttonurl ?>"><?php $buttonurl ?></a>
                    
                    <?php } ?>

                </div>

            </div>
        </div>
        <div class="main-nav__wrapper">

            <div class="main-nav__logo">
                <a href="/">
                    <img src="/wp-content/themes/bestmindtheme/assets/bestmind-logo.png" alt="Bestmind Logo" class="logo">
                </a>
            </div>

            <div class="main-nav__phone mobile-only">
            
            <?php if( function_exists( 'geot_target' ) ) { ?>
                
                <?php echo do_shortcode('[geot_filter_state state="OR"]<a class="link" target="_blank" href="tel:'. $phoneOR .'"><img src="/wp-content/themes/bestmindtheme/assets/icon-phone.png" alt="Phone Icon" class="icon"></a>[/geot_filter_state]');?>
                <?php echo do_shortcode('[geot_filter_state state="CO"]<a class="link" target="_blank" href="tel:'. $phoneCO .'"><img src="/wp-content/themes/bestmindtheme/assets/icon-phone.png" alt="Phone Icon" class="icon"></a>[/geot_filter_state]');?>
                <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"]<a class="link" target="_blank" href="tel:'. $phone .'"><img src="/wp-content/themes/bestmindtheme/assets/icon-phone.png" alt="Phone Icon" class="icon"></a>[/geot_filter_state]');?>
            
            <?php } else { ?>
                    
                <a class="link" href="tel:<?php $phone ?>"><img src="/wp-content/themes/bestmindtheme/assets/icon-phone.png" alt="Phone Icon" class="icon"></a>
                    
            <?php } ?>

            </div>

            <div class="main-nav__bar mobile-only">
                <button class="hamburger-button" id="hamburgerButton" aria-label="mobile-nav">
                    <div class="hamburger-button__bar--top"></div>
                    <div class="hamburger-button__bar--middle"></div>
                    <div class="hamburger-button__bar--bottom"></div>
                </button>
            </div>

            <div class="main-nav__drawer">

                <?php wp_nav_menu(array(
                    'theme_location' => 'primary-nav',
                    'container' => '',
                    'items_wrap' => '
                        <div class="primary-nav__container">
                        <ul class="primary-nav">
                            %3$s
                        </ul></div>',
                    'menu_id' => 'primaryNav'
                ));
                ?>

            </div>

        </div>
    </div>
</nav>

<?php 
get_template_part('modules/floating-cta');
?>