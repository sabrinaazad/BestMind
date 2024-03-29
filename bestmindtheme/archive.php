<?php get_header(); ?>
<section class="section section--hero_banner full-width" style="background-color: #76B7CD">
    <div class="section-wrapper">
        <h1 class="heading align--center">Archives: <?php echo get_the_archive_title() ?></h1>
    </div>
</section>

<main class="archive-template">
    <section class="section section--blog-archive">
        <div class="post-grid">

            <?php
            // Check if there are any posts to display
            if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>

                    <div class="post">
                        <a href="<?php the_permalink(); ?>">
                            <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>
                            <div class="image-wrapper" style="background-image: url( <?php echo $url ?> );"></div>
                        </a>
                        <div class="content">
                            <a href="<?php the_permalink(); ?>">
                                <h3><?php the_title(); ?></h3>
                            </a>
                            <?php echo get_the_date(); ?>
                            <?php the_excerpt(); ?>
                            <a class="btn btn-primary" href="<?php the_permalink(); ?>">Read More</a>
                        </div>

                    </div>
                <?php endwhile;

            else : ?>
                <p>Sorry, no posts matched your criteria.</p>


            <?php endif; ?>
            
        </div>        
            <?php if ($paged > 1) { ?>

                <nav id="nav-posts">
                    <div class="next"><?php previous_posts_link('« Newer Posts'); ?></div>
                    <div class="prev"><?php next_posts_link('Older Posts »'); ?></div>
                </nav>

            <?php } else { ?>

                <nav id="nav-posts">
                    <div class="prev"><?php next_posts_link('Older Posts »'); ?></div>
                </nav>

            <?php } ?>


            <?php wp_reset_postdata(); ?>
       
    </section>
    <section class="section section--aside">
        <?php if (is_active_sidebar('blog-sidebar')) : ?>
            <?php dynamic_sidebar('blog-sidebar'); ?>
        <?php else : ?>
            <!-- Time to add some widgets! -->
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>