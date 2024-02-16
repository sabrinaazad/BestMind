<?php
    if( get_sub_field('alternate') ) 
    {
        $alternate = "alternate";
    } else {
        $alternate = "";
    }
?>
<div class="section section--banner-cta full-width <?php echo $alternate; ?>" style="background-color: <?php the_sub_field('background_color'); ?>" id="<?php the_sub_field('id'); ?>">
    <div class="section-wrapper">
        <?php $image = get_sub_field('background_image');
            if( $image ): ?>
                <div class="image-wrapper"><img src="<?php echo $image; ?>" alt="featured image"  /></div>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
            if( $heading ): ?>
                <h3 class="heading" style="color: <?php the_sub_field('heading_color'); ?>"><?php echo $heading; ?></h3>
        <?php endif; ?>

        <?php $blurb = get_sub_field('blurb');
            if( $blurb ): ?>
                <?php echo $blurb; ?>
        <?php endif; ?>

       <?php 
        if( get_sub_field('primary') ) 
            {
            $primary = "btn-primary";
        } else {
            $primary = "";
        }
        if( get_sub_field('secondary') ) 
            {
            $secondary = "btn-secondary";
        } else {
            $secondary = "";
        }
        ?>

        <?php if( function_exists( 'geot_target' ) ) { ?> 

            <div class="btn-wrapper">
                <?php $link = get_sub_field('link');
                if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                    <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"]<a class="btn '.$primary .' '.$secondary .'" href="'. $link_url .'" target="'. $link_target .'">'. $link_title .'</a>[/geot_filter_state]');?>
                
                <?php endif; ?>

                <?php $linkOR = get_sub_field('linkOR');
                if( $linkOR ): 
                    $link_urlOR = $linkOR['url'];
                    $link_titleOR = $linkOR['title'];
                    $link_targetOR = $linkOR['target'] ? $linkOR['target'] : '_self';
                ?>
                    <?php echo do_shortcode('[geot_filter_state  state="OR"]<a class="btn '.$primary .' '.$secondary .'" href="'. $link_urlOR .'" target="'. $link_targetOR .'">'. $link_titleOR .'</a>[/geot_filter_state]');?>
            
                <?php endif; ?>

                <?php $linkCO = get_sub_field('linkCO');
                if( $linkCO ): 
                    $link_urlCO = $linkCO['url'];
                    $link_titleCO = $linkCO['title'];
                    $link_targetCO = $linkCO['target'] ? $linkCO['target'] : '_self';
                ?>
                    <?php echo do_shortcode('[geot_filter_state  state="CO"]<a class="btn '.$primary .' '.$secondary .'" href="'. $link_urlCO .'" target="'. $link_targetCO .'">'. $link_titleCO .'</a>[/geot_filter_state]');?>

                <?php endif; ?>

                <?php $link2 = get_sub_field('link2');
                if( $link2 ): 
                $link2_url = $link2['url'];
                $link2_title = $link2['title'];
                $link2_target = $link2['target'] ? $link2['target'] : '_self';
                ?>
                    <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"]<a class="btn '.$primary .' '.$secondary .'" href="'. $link2_url .'" target="'. $link2_target .'">'. $link2_title .'</a>[/geot_filter_state]');?>
                
                <?php endif; ?>

                <?php $linkOR2 = get_sub_field('linkOR2');
                if( $linkOR2 ): 
                    $link2_urlOR = $linkOR2['url'];
                    $link2_titleOR = $linkOR2['title'];
                    $link2_targetOR = $linkOR2['target'] ? $linkOR2['target'] : '_self';
                ?>
                    <?php echo do_shortcode('[geot_filter_state  state="OR"]<a class="btn '.$primary .' '.$secondary .'" href="'. $link2_urlOR .'" target="'. $link2_targetOR .'">'. $link2_titleOR .'</a>[/geot_filter_state]');?>
            
                <?php endif; ?>

                <?php $linkCO2 = get_sub_field('linkCO2');
                if( $linkCO2 ): 
                    $link2_urlCO = $linkCO2['url'];
                    $link2_titleCO = $linkCO2['title'];
                    $link2_targetCO = $linkCO2['target'] ? $linkCO2['target'] : '_self';
                ?>
                    <?php echo do_shortcode('[geot_filter_state  state="CO"]<a class="btn '.$primary .' '.$secondary .'" href="'. $link2_urlCO .'" target="'. $link2_targetCO .'">'. $link2_titleCO .'</a>[/geot_filter_state]');?>

                <?php endif; ?>
            </div>       

        <?php } else { ?>
            <?php $link = get_sub_field('link');
            if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
            ?>

            <a class="btn <?php $primary ?> <?php $secondary ?>" href="<?php $link_url ?>" target="<?php $link_target ?>"><?php $link_title ?></a>
            
            <?php endif; ?> 

            <?php $link2 = get_sub_field('link2');
            if( $link2 ): 
            $link2_url = $link2['url'];
            $link2_title = $link2['title'];
            $link2_target = $link2['target'] ? $link2['target'] : '_self';
            ?>
               
            <a class="btn <?php $primary ?> <?php $secondary ?>" href="<?php $link2_url ?>" target="<?php $link2_target ?>"><?php $link2_title ?></a>     
            
            <?php endif; ?>  

        <?php } ?>

    </div>
</div>