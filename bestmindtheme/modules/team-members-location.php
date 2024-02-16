<section class="section section--team-members">
    <div class="section-wrapper">

        <?php $preheading = get_sub_field('preheading');
        if ($preheading) : ?>
            <span class="preheading uppercase"><?php echo $preheading; ?></span>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if ($heading) : ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        
        <div class="team_slider_2">
        <?php $teammembers = get_sub_field('team_members');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

        <div class="team_slider">
        <?php $teammembers = get_sub_field('team_members');
            if ($teammembers) : ?>
                <?php foreach ($teammembers as $post) :
                    setup_postdata($post); ?>
                    <div class="slide">
                        <div class="image-wrapper">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="content">
                            <h2 class="heading"><?php the_title(); ?></h2>
                            <h4 class="preheading uppercase"><?php the_field("title"); ?></h4>
                            <?php the_excerpt(); ?>
                            <a class="btn btn-secondary" href="<?php the_permalink() ?>">Read Full Bio</a>
                        </div>
                    </div>
                    <?php endforeach;
                wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </div>
</section>