<section class="section section--hero location full-width no-padded-sides no-padded-top no-padded-bottom">
    <div class="content-top-background" style="background-image: url(<?php the_sub_field('top_content_background_image'); ?>);">
        <div class="section-wrapper">
            <div class="content-top">
            <?php if( have_rows('top_content') ):

            while( have_rows('top_content') ): the_row(); ?>

                <img src="<?php the_sub_field('image'); ?>" alt="location image" />
                <h1 class="heading"><?php the_title(); ?></h1>
                <?php if( have_rows('address') ):
        
                    while( have_rows('address') ): the_row();
        
                    $address1 = get_sub_field('address_line_1');
                    $address2 = get_sub_field('address_line_2');
        
                    ?>
                        <div class="address">
                            <div><?php echo $address1; ?></div>   
                            <div><?php echo $address2; ?></div>                                  
                        </div>
                    <?php
                    endwhile; 
                    
                endif;
        
                if( have_rows('contact') ):
        
                    while( have_rows('contact') ): the_row();
        
                    $directions = get_sub_field('directions');
                    $phone = get_sub_field('phone');
                    $fax = get_sub_field('fax');
        
                    ?>
                        <div class="contact">
                            <?php if($directions) : ?>
                                <a class="btn btn-secondary" href="<?php echo $directions; ?>">Get Directions</a>  
                            <?php endif; ?>                               
                            <?php if($phone) : ?>
                                <div><span class="title small">Office:</span> <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></div> 
                            <?php endif; ?>
                            <?php if($fax) : ?>
                                <div><span class="title small">Fax:</span> <?php echo $fax; ?></div> 
                            <?php endif; ?>
                        </div>
        
                    <?php
                    endwhile; 
                    
                endif;
                
                if( have_rows('hours') ):
        
                    while( have_rows('hours') ): the_row();
        
                    $monday = get_sub_field('monday');
                    $tuesday = get_sub_field('tuesday');
                    $wednesday = get_sub_field('wednesday');
                    $thursday = get_sub_field('thursday');
                    $friday = get_sub_field('friday');
                    $saturday = get_sub_field('saturday');
                    $sunday = get_sub_field('sunday');
        
                    ?>
                    <div class="title">Hours of Operation:</div>
                        <div class="hours">
                            <div><span class="title small">Monday:</span> <?php echo $monday; ?></div>   
                            <div><span class="title small">Tuesday:</span> <?php echo $tuesday; ?></div>   
                            <div><span class="title small">Wednesday:</span> <?php echo $wednesday; ?></div>   
                            <div><span class="title small">Thursday:</span> <?php echo $thursday; ?></div>   
                            <div><span class="title small">Friday:</span> <?php echo $friday; ?></div>   
                            <div><span class="title small">Saturday:</span> <?php echo $saturday; ?></div>   
                            <div><span class="title small">Sunday:</span> <?php echo $sunday; ?></div>                                      
                        </div>
                    <?php
                    endwhile; 
                    
                endif;
        
                if( have_rows('review_group') ):
        
                    while( have_rows('review_group') ): the_row();
        
                    $review = get_sub_field('review');
                    $reviewURL = get_sub_field('review_url');
        
                    ?>  <?php if($review) : ?>
                            <div class="title">Google Review:</div>
                            <div class="review">
                                <div><?php echo $review; ?></div>  
                                <a class="btn btn-secondary" href="<?php echo $reviewURL; ?>">Leave Us a Review</a>                                 
                            </div>
                        <?php endif; ?> 
                        
                    <?php
                    endwhile; 
                    
                endif; 
                
                ?>

            <?php endwhile; 

            endif; ?>
            </div>
        </div>
    </div>
    <div class="content-middle">
        <?php if( have_rows('middle_content') ):

            while( have_rows('middle_content') ): the_row(); 

                if( have_rows('hero_slide') ): ?>
                    <div class="hero-slider">
                        <?php while( have_rows('hero_slide') ) : the_row(); ?> 
                            
                            <?php $slideOR = get_sub_field('slideOR'); ?>
                            <?php $slideCO = get_sub_field('slideCO'); ?>
                            <?php $slide = get_sub_field('slide'); ?>

                        <?php if( function_exists( 'geot_target' ) ) { ?>
                            
                            <?php echo do_shortcode('[geot_filter_state state="OR"]<div class="slide"><img src="'. $slideOR .'" alt="slide logo" /></div>[/geot_filter_state]');?>
                            <?php echo do_shortcode('[geot_filter_state state="CO"]<div class="slide"><img src="'. $slideCO .'" alt="slide logo" /></div>[/geot_filter_state]');?>
                            <?php echo do_shortcode('[geot_filter_state exclude_state="CO,OR"]<div class="slide"><img src="'. $slide .'" alt="slide logo" /></div>[/geot_filter_state]');?>
                            
                        <?php } else { ?>
                    
                            <div class="slide"><img src="<?php $slide ?>" alt="slide logo" /></div>
                    
                        <?php } ?>  

                        <?php  endwhile; ?>
                    </div>
                <?php else : endif; ?>  
            
            <?php  endwhile; 

        endif; ?>
    </div>

    
    <div class="content-bottom">
        <div class="section-wrapper">
        <?php if( have_rows('bottom_content') ):

        while( have_rows('bottom_content') ): the_row(); ?>
            
            <div class="two-col">
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
                <div class="col">
                </div>
            </div>
        
        <?php endwhile; 

        endif; ?>
        </div>
    </div>
</section>