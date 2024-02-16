<section class="section section--featured-blogs full-width" style="background-image: url(<?php the_sub_field('background_image'); ?>">
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

    <div class="featured_blogs">
        <?php 
        $the_query = new WP_Query( array(
            'posts_per_page' => 3,
        )); 
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="blog">
                <div style="background-image: url(<?php the_post_thumbnail_url() ?>)" class="image-wrapper"></div>
                <h4 class="uppercase"><?php the_title(); ?></h4>
                <i class="uppercase">Published: <?php echo get_the_date( 'F d, Y' ); ?></i>
                <?php the_excerpt(); ?>
                <a class="btn btn-secondary" href="<?php the_permalink(); ?>">Read More</a>
            </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>

        <?php else : ?>
            <p><?php __('No Blogs'); ?></p>
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
    </div>
</section>