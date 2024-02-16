<?php get_header(); ?>
<?php 
        $args = array(
            'p' =>317,
            'post_type' => 'any'
        );
        $page_fields = new WP_Query($args);
        if  ($page_fields->have_posts() ) : while ( $page_fields->have_posts() ) : $page_fields->the_post(); 

        ?>
        <?php // Check value exists.
            if (have_rows('modules')) :

                // Loop through rows.
                while (have_rows('modules')) : the_row();
                    // Case: hero-banner layout.
                    if (get_row_layout() == 'hero_banner') :
                        get_template_part('modules/hero-banner');
                    endif;
                    // Case: text-editor layout.
                    if (get_row_layout() == 'text_editor') :
                        get_template_part('modules/text-editor');
                    endif;
                // End loop.
                endwhile;

            // No value.
            else :
            // Do something...
            endif; endwhile; 
        
        endif; ?>

    <?php wp_reset_postdata(); ?>
<main class="cpt-archive-template">
    <section class="section section--blog-archive no-padded-top">
        <div class="post-grid">

            <?php
            // Check if there are any posts to display
            if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                    <a class="post" href="<?php the_permalink(); ?>">
                        <div>
                            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                            <div class="image-wrapper icon"><img src="<?php echo $url ?>" alt="icon" /></div>
                            <div class="content">
                                <h4 class="uppercase"><?php the_title(); ?></h4>
                                <?php the_excerpt(); ?>
                                <button class="btn btn-secondary">Learn More</button>
                            </div>
                        </div>
                    </a>
                <?php endwhile;

            else : ?>
            
                <p>Sorry, no posts matched your criteria.</p>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>
            
        </div>
    </section>
</main>
<?php get_footer(); ?>