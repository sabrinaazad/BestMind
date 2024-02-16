<?php get_header(); ?>
<main class="single-template provider">
    <section class="section section--single">
        <a class="back-btn" href="/providers/">« Back to All Providers</a>
        <div class="single two-col">

            <?php while (have_posts()) : the_post(); ?>
            <div class="col">
               <div class="image-wrapper"><?php the_post_thumbnail(); ?></div>
            </div>
            <div class="col">
                <h1 class="heading"><?php the_title(); ?></h1>
                <div class="content">
                <h4 class="preheading uppercase"><?php the_field("title"); ?></h4>
                    <?php  if( have_rows('specialty') ): ?>
                        <div class="specialty">
                            <?php while( have_rows('specialty') ) : the_row(); ?> 
                        
                            <span class="preheading"><?php the_sub_field("specialty_title"); ?></span>
                        
                            <?php  endwhile; ?>
                        </div> 
                        <?php else :  endif; ?>
                    
                    <?php the_field("bio");  
                    $button = get_field('button');
                    if( $button ): 
                        $link_url = $button['url'];
                        $link_title = $button['title'];
                        $link_target = $button['target'] ? $button['target'] : '_self';
                    ?>
                    <a class="btn btn-secondary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">
                        <?php echo esc_html( $link_title ); ?>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>