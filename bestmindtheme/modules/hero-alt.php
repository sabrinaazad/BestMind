<section class="section section--hero alt full-width no-padded-sides no-padded-top no-padded-bottom">
    <div class="content-top-background" style="background-image: url(<?php the_sub_field('top_content_background_image'); ?>);">
        <div class="section-wrapper">
            <div class="content-top">
            <?php if( have_rows('top_content') ):

                while( have_rows('top_content') ): the_row();

                    $hero_preheading = get_sub_field('hero_preheading');
                    if( $hero_preheading ): ?>
                        <span class="preheading uppercase desktop-only"><?php echo $hero_preheading; ?></span>
                    <?php endif; ?>
                    <?php $hero_heading = get_sub_field('hero_heading');
                    if( $hero_heading ): ?>
                        <h1 class="heading"><?php echo $hero_heading; ?></h1>
                    <?php endif; ?>
                    <?php $hero_text = get_sub_field('hero_text');
                        if( $hero_text ): ?>
                            <?php echo $hero_text; ?>
                    <?php endif; ?>

                    <?php if( function_exists( 'geot_target' ) ) { ?>
                        
                        <?php $hero_button = get_sub_field('hero_button');
                            if( $hero_button ): 
                                $link_url = $hero_button['url'];
                                $link_title = $hero_button['title'];
                                $link_target = $hero_button['target'] ? $hero_button['target'] : '_self';
                            ?>
                            
                                <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"]<a class="btn btn-primary" href="'. $link_url .'" target="'. $link_target .'">'. $link_title .'</a>[/geot_filter_state]');?>

                            <?php endif; ?>
                        
                        <?php $hero_button_OR = get_sub_field('hero_button_OR');
                            if( $hero_button_OR ): 
                                $link_url_OR = $hero_button_OR['url'];
                                $link_title_OR = $hero_button_OR['title'];
                                $link_target_OR = $hero_button_OR['target'] ? $hero_button_OR['target'] : '_self';
                            ?>
                                
                                <?php echo do_shortcode('[geot_filter_state  state="OR"]<a class="btn btn-primary" href="'. $link_url_OR .'" target="'. $link_target_OR .'">'. $link_title_OR .'</a>[/geot_filter_state]');?>

                            <?php endif; ?>

                        <?php $hero_button_CO = get_sub_field('hero_button_CO');
                            if( $hero_button_CO ): 
                                $link_url_CO = $hero_button_CO['url'];
                                $link_title_CO = $hero_button_CO['title'];
                                $link_target_CO = $hero_button_CO['target'] ? $hero_button_CO['target'] : '_self';
                            ?>
                                
                                <?php echo do_shortcode('[geot_filter_state  state="CO"]<a class="btn btn-primary" href="'. $link_url_CO .'" target="'. $link_target_CO .'">'. $link_title_CO .'</a>[/geot_filter_state]');?>

                            <?php endif; ?>
																  
						<?php $hero_button_alt = get_sub_field('hero_button_alt');
                        	if( $hero_button_alt ): 
                            	$link_url_alt = $hero_button_alt['url'];
                            	$link_title_alt = $hero_button_alt['title'];
                            	$link_target_alt = $hero_button_alt['target'] ? $hero_button_alt['target'] : '_self';
                        	?>
                        
                        		<?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"]<a class="btn btn-primary" href="'. $link_url_alt .'" target="'. $link_target_alt .'">'. $link_title_alt .'</a>[/geot_filter_state]');?>

                        <?php endif; ?>

                        <?php $hero_button_alt_OR = get_sub_field('hero_button_alt_OR');
                        if( $hero_button_alt_OR ): 
                            $link_url_alt_OR = $hero_button_alt_OR['url'];
                            $link_title_alt_OR = $hero_button_alt_OR['title'];
                            $link_target_alt_OR = $hero_button_alt_OR['target'] ? $hero_button_alt_OR['target'] : '_self';
                        ?>

                            <?php echo do_shortcode('[geot_filter_state state="OR"]<a class="btn btn-primary" href="'. $link_url_alt_OR .'" target="'. $link_target_alt_OR .'">'. $link_title_alt_OR .'</a>[/geot_filter_state]');?>

                        <?php endif; ?> 

                        <?php $hero_button_alt_CO = get_sub_field('hero_button_alt_CO');
                        if( $hero_button_alt_CO ): 
                            $link_url_alt_CO = $hero_button_alt_CO['url'];
                            $link_title_alt_CO = $hero_button_alt_CO['title'];
                            $link_target_alt_CO = $hero_button_alt_CO['target'] ? $hero_button_alt_CO['target'] : '_self';
                        ?>

                            <?php echo do_shortcode('[geot_filter_state state="CO"]<a class="btn btn-primary" href="'. $link_url_alt_CO .'" target="'. $link_target_alt_CO .'">'. $link_title_alt_CO .'</a>[/geot_filter_state]');?>

                        <?php endif; 
				
                    } else { ?>
                        
                        <?php $hero_button = get_sub_field('hero_button');
                        if( $hero_button ): 
                            $link_url = $hero_button['url'];
                            $link_title = $hero_button['title'];
                            $link_target = $hero_button['target'] ? $hero_button['target'] : '_self';
                        ?>
                        
                        <a class="btn btn-primary" href="<?php $link_url ?>" target="<?php $link_target ?>"><?php $link_title ?></a>

                        <?php endif; ?>

                        <?php $hero_button_alt = get_sub_field('hero_button_alt');
                        	if( $hero_button_alt ): 
                            	$link_url_alt = $hero_button_alt['url'];
                            	$link_title_alt = $hero_button_alt['title'];
                            	$link_target_alt = $hero_button_alt['target'] ? $hero_button_alt['target'] : '_self';
                        	?>
                        
                        <a class="btn btn-primary" href="<?php $link_url_alt ?>" target="<?php $link_target_alt ?>"><?php $link_title_alt ?></a>


                        <?php endif; 
                    }
                    
                endwhile; 

            endif; ?>
            </div>
        </div>
    </div>
    
    <div class="content-bottom">
        <div class="section-wrapper">
        <?php if( have_rows('bottom_content') ):

        while( have_rows('bottom_content') ): the_row(); ?>
            
            <div class="two-col">
                <div class="col">
                    <?php $bottom_image = get_sub_field('bottom_image');
                    if( $bottom_image ): ?>
                         <div class="image-wrapper"><img src="<?php echo $bottom_image; ?>" alt="featured image" /></div> 
                    <?php endif; ?>
                    
                    <?php $bottom_embed = get_sub_field('bottom_oembed');
                    if( $bottom_embed ): ?>
                    <div class="video-wrapper">
                        <?php echo $bottom_embed; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col">
                <?php $bottom_preheading = get_sub_field('bottom_preheading');
                if( $bottom_preheading ): ?>
                    <span class="preheading uppercase"><?php echo $bottom_preheading; ?></span>
                <?php endif; 
                $bottom_heading = get_sub_field('bottom_heading');
                if( $bottom_heading ): ?>
                    <h2 class="heading"><?php echo $bottom_heading; ?></h2>
                <?php endif; ?>
                <?php 
                $bottom_text = get_sub_field('bottom_text');
                if( $bottom_text ): ?>
                    <?php echo $bottom_text; ?>
                <?php endif; ?>
                <?php 
                $bottom_button = get_sub_field('bottom_button');
                if( $bottom_button ): 
                    $link_url = $bottom_button['url'];
                    $link_title = $bottom_button['title'];
                    $link_target = $bottom_button['target'] ? $bottom_button['target'] : '_self';
                ?>
                    <a class="btn btn-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
                </div>
            </div>
        
        <?php endwhile; 

        endif; ?>
        </div>
    </div>
</section>