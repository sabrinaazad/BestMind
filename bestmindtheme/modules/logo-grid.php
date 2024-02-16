<div class="section section--logo-grid no-padded-top">
    <div class="section-wrapper">
        <div class="grid">
            <?php  if( have_rows('grid') ): while( have_rows('grid') ) : the_row(); ?>
            <div class="grid-item">

                <?php $image = get_sub_field('image'); ?>
                <?php $imageOR = get_sub_field('image_OR'); ?>
                <?php $imageCO = get_sub_field('image_CO'); ?>
                <?php $title = get_sub_field('title'); ?>
                <?php $titleOR = get_sub_field('title_OR'); ?>
                <?php $titleCO = get_sub_field('title_CO'); ?>
                
                <?php if( function_exists( 'geot_target' ) ) { ?>
                    <?php if( $image ): ?>
                        <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"] <img src="'. $image .'" alt="logo" /><div class="title">'. $title .'</div>[/geot_filter_state]');?>
                    <?php endif; ?>
                    <?php if( $imageOR ): ?>
                        <?php echo do_shortcode('[geot_filter_state state="OR"] <img src="'. $imageOR .'" alt="logo" /><div class="title">'. $titleOR .'</div>[/geot_filter_state]');?>
                    <?php endif; ?>    
                    <?php if( $imageCO ): ?>
                        <?php echo do_shortcode('[geot_filter_state state="CO"] <img src="'. $imageCO .'" alt="logo" /><div class="title">'. $titleCO .'</div>[/geot_filter_state]');?>
                    <?php endif; ?>               
                <?php } else { ?>

                    <img src="<?php $image ?>" alt="logo" /><div class="title"><?php $title ?></div>

                <?php } ?>
            </div>
            <?php endwhile;  else :  endif; ?>
        </div>
    </div>
</div>
</div>