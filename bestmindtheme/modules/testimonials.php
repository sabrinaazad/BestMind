<section class="section section--testimonials">
    <div class="section-wrapper">
        <?php $preheading = get_sub_field('preheading');
        if( $preheading ): ?>
            <span class="preheading uppercase"><?php echo $preheading; ?></span>
        <?php endif; ?>
        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <?php $text = get_sub_field('text');
        if( $text ): ?>
            <?php echo $text; ?>
        <?php endif; ?>
        <?php if( have_rows('testimonials') ): ?>
        <div class="testimonials_slider">
        <?php while( have_rows('testimonials') ): the_row(); ?>
            <div class="testimonial">
                <?php the_sub_field('testimonial'); ?>
            </div>
        <?php endwhile; ?>
        </ul>
    <?php endif; ?>
    </div>
</section>