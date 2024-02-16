<section class="section section--testimonials-v2 full-width" style="background-image: url(<? echo the_sub_field('background_image'); ?>);">
    <div class="section-wrapper">
        <?php $preheading = get_sub_field('preheading');
        if( $preheading ): ?>
            <span class="preheading uppercase"><?php echo $preheading; ?></span>
        <?php endif; ?>
        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <div class="two-col">
            <div class="col first">
            <?php $image = get_sub_field('featured_image');
                if (($image)) : ?>
                    <div class="featured-image">
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </div>
            <?php endif; ?>

            </div>
            <div class="col second">
                <? if (have_rows('slider')) : ?>
                    <div class="testimonials-slider-v2">
                        <? while (have_rows('slider')) : the_row(); ?>
                            <div class="slide">
                                <? if (get_sub_field('blurb')) : ?><div class="blurb"><? the_sub_field('blurb'); ?></div><? endif; ?>
                                <div class="bio">
                                    <? if (get_sub_field('name')) : ?><div class="name"><? the_sub_field('name'); ?></div><? endif; ?>
                                    <? if (get_sub_field('title')) : ?><div class="title"><? the_sub_field('title'); ?></div><? endif; ?>
                                </div>
                            </div>
                        <? endwhile; ?>
                    </div>
                <? else : endif; ?>
            </div>
        </div>
    </div>
</section>