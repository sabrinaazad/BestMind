<section class="section section--featured-slider full-width no-padded-sides 
    <?php if( have_rows('hero_group') ): 
        while( have_rows('hero_group') ): the_row(); 
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
            }?><?php echo $white_overlay; ?> <?php echo $yellow_overlay; ?>" style="background-image: url(<?php the_sub_field('featured_slider_background_image'); 
        endwhile; 
    endif; ?> );">
    <?php if( have_rows('heading_group') ): 
        while( have_rows('heading_group') ): the_row(); ?>
        
            <?php $featured_preheading = get_sub_field('featured_preheading');
            if( $featured_preheading ): ?>
                <span class="preheading uppercase" style="color: <?php the_sub_field('preheading_color'); ?>"><?php echo $featured_preheading; ?></span>
            <?php endif; 

            $featured_heading = get_sub_field('featured_heading');
            if( $featured_heading ): ?>
                <h2 class="heading" style="color: <?php the_sub_field('heading_color'); ?>"><?php echo $featured_heading; ?></h2>
            <?php endif; ?>
        
        <?php endwhile; 
    endif; ?>
    <div class="featured_slider">
        <?php $conditions = get_sub_field('conditions');
            if( $conditions ): ?>
            <?php foreach( $conditions as $post ): 
                setup_postdata($post); ?>
                <div class="slide">   
                    <div class="icon"><img src="<?php the_post_thumbnail_url() ?>" /></div>
                    <h4 class="uppercase"><?php the_title(); ?></h4>
                    <?php the_excerpt(); ?>
                    <a class="btn btn-primary" href="<?php the_permalink(); ?>">Learn More</a>
                </div>   
                <?php endforeach;
                wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>

    <?php  $link = get_sub_field('link');
        if( $link ): 
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
    <a class="btn btn-primary view-all" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>

</section>