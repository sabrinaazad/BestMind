<section class="section section--featured-panels full-width">
    <div class="section-wrapper">
    <?php if( have_rows('heading_group') ): 
        while( have_rows('heading_group') ): the_row(); ?>
        
            <?php $featured_preheading = get_sub_field('featured_preheading');
            if( $featured_preheading ): ?>
                <span class="preheading uppercase"><?php echo $featured_preheading; ?></span>
            <?php endif; 

            $featured_heading = get_sub_field('featured_heading');
            if( $featured_heading ): ?>
                <h2 class="heading"><?php echo $featured_heading; ?></h2>
            <?php endif; ?>
        
        <?php endwhile; 
    endif; ?>

    <div class="featured_panels">
        <?php $services = get_sub_field('services');
            if( $services ): ?>
            <?php foreach( $services as $post ): 
                setup_postdata($post); ?>
                <a  class="panel" href="<?php the_permalink(); ?>">
                    <div class="icon"><img src="<?php the_post_thumbnail_url() ?>" /></div>
                    <h4 class="uppercase"><?php the_title(); ?></h4>
                    <span class="desktop-only"><?php the_excerpt(); ?></span>
                </a>  
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
    <a class="btn btn-primary view-all" href="<?php echo esc_url( $link_url ); ?>"
        target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
    <?php endif; ?>
    </div>
</section>