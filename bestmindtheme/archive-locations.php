<?php get_header(); ?>
<main class="cpt-archive-template location">
    <?php if( function_exists( 'geot_target' ) ) {
            if( geot_target_state( [ 'Oregon' ] ) ) { ?>

                <section class="section section--hero_banner full-width" style="background-color: #76B7CD;">
                    <div class="section-wrapper">
                        <h1 class="heading align--center">Locations in Oregon</h1>
                    </div>
                </section>
            
            <?php } elseif( geot_target_state( [ 'Washington' ] ) ) { ?>

                <section class="section section--hero_banner full-width" style="background-color: #76B7CD;">
                    <div class="section-wrapper">
                        <h1 class="heading align--center">Locations in Washington</h1>
                    </div>
                </section>

            <?php } elseif( geot_target_state( [ 'Idaho' ] ) ) { ?> 
                
                <section class="section section--hero_banner full-width" style="background-color: #76B7CD;">
                    <div class="section-wrapper">
                        <h1 class="heading align--center">Locations in Idaho</h1>
                    </div>
                </section>

                <?php } elseif( geot_target_state( [ 'Colorado' ] ) ) { ?> 
                
                <section class="section section--hero_banner full-width" style="background-color: #76B7CD;">
                    <div class="section-wrapper">
                        <h1 class="heading align--center">Locations in Colorado</h1>
                    </div>
                </section>

                <?php } else { ?> 
                
                <section class="section section--hero_banner full-width" style="background-color: #76B7CD;">
                    <div class="section-wrapper">
                        <h1 class="heading align--center">Select a Location</h1>
                    </div>
                </section>
                <?php echo do_shortcode('[searchandfilter id="1519"]'); ?>

            <?php } ?>
    <?php } else { ?>
        <section class="section section--hero_banner full-width" style="background-color: #76B7CD;">
            <div class="section-wrapper">
                <h1 class="heading align--center">Select a Location</h1>
            </div>
        </section>
        <?php echo do_shortcode('[searchandfilter id="1519"]'); ?>
    <?php }  ?>
    <section class="section section--blog-archive">
        
        <?php if( function_exists( 'geot_target' ) ) {
            if( geot_target_state( [ 'Oregon' ] ) ) { ?>
                <?php
                    $args = array(  
                        'post_type' => 'locations',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'location-states',
                            'field'    => 'slug',
                            'terms'    => array( 'oregon' )
                            )
                        ),
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                        'orderby' => 'name'
                    );

                    $loop = new WP_Query( $args ); ?>
                <?php
                if ($loop->have_posts()) : ?>
                    <div class="post-grid">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        
                            <div class="post">
                                <div class="content">
                                    <h4 class="uppercase"><?php the_title(); ?></h4>   
                                    <?php 
                                    if( have_rows('modules') ):

                                        while( have_rows('modules') ): the_row();
                                            
                                            if( have_rows('top_content') ):

                                                while( have_rows('top_content') ): the_row();
                                                    
                                                    if( have_rows('address') ):

                                                        while( have_rows('address') ): the_row();
                                                            $address1 = get_sub_field('address_line_1');
                                                            $address2 = get_sub_field('address_line_2');
                                                        ?>
                                                            <div class="address">
                                                                <div class="add1"><?php echo $address1; ?></div>   
                                                                <div class="add2"><?php echo $address2; ?></div>                    
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;
                                                
                                            
                                                    if( have_rows('contact') ):

                                                        while( have_rows('contact') ): the_row();
                                                            $phone = get_sub_field('phone');
                                                        ?>
                                                            <div class="phone">
                                                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>                                 
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;

                                                endwhile; 
                                                            
                                            endif;

                                            if( have_rows('bottom_content') ):

                                                while( have_rows('bottom_content') ): the_row(); ?>
                                                    
                                                    <?php 
                                                    $bottom_button = get_sub_field('bottom_button');
                                                    if( $bottom_button ): 
                                                        $link_url = $bottom_button['url'];
                                                        $link_title = $bottom_button['title'];
                                                        $link_target = $bottom_button['target'] ? $bottom_button['target'] : '_self';
                                                    ?>
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                                                    <a class="btn btn-secondary" target="_blank" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Schedule Appointment</a>
                                                    <?php endif; ?>
                    
                                                <?php endwhile; 
                                                            
                                            endif;

                                        endwhile; 
                                        
                                    endif;
                                    ?>
                                    
                                </div>
                            </div>
                        
                    <?php endwhile;

                else : ?>
                
                    <p>Sorry, no posts matched your criteria.</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            <?php } elseif( geot_target_state( [ 'Washington' ] ) ) { ?>
                <?php
                    $args = array(  
                        'post_type' => 'locations',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'location-states',
                            'field'    => 'slug',
                            'terms'    => array( 'washington' )
                            )
                        ),
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                        'orderby' => 'name' 
                    );

                    $loop = new WP_Query( $args ); ?>
                <?php
                if ($loop->have_posts()) : ?>
                    <div class="post-grid">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        
                            <div class="post">
                                <div class="content">
                                    <h4 class="uppercase"><?php the_title(); ?></h4>   
                                    <?php 
                                    if( have_rows('modules') ):

                                        while( have_rows('modules') ): the_row();
                                            
                                            if( have_rows('top_content') ):

                                                while( have_rows('top_content') ): the_row();
                                                    
                                                    if( have_rows('address') ):

                                                        while( have_rows('address') ): the_row();
                                                            $address1 = get_sub_field('address_line_1');
                                                            $address2 = get_sub_field('address_line_2');
                                                        ?>
                                                            <div class="address">
                                                                <div class="add1"><?php echo $address1; ?></div>   
                                                                <div class="add2"><?php echo $address2; ?></div>                    
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;
                                                
                                            
                                                    if( have_rows('contact') ):

                                                        while( have_rows('contact') ): the_row();
                                                            $phone = get_sub_field('phone');
                                                        ?>
                                                            <div class="phone">
                                                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>                                 
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;

                                                endwhile; 
                                                            
                                            endif;

                                            if( have_rows('bottom_content') ):

                                                while( have_rows('bottom_content') ): the_row(); ?>
                                                    
                                                    <?php 
                                                    $bottom_button = get_sub_field('bottom_button');
                                                    if( $bottom_button ): 
                                                        $link_url = $bottom_button['url'];
                                                        $link_title = $bottom_button['title'];
                                                        $link_target = $bottom_button['target'] ? $bottom_button['target'] : '_self';
                                                    ?>
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                                                    <a class="btn btn-secondary" target="_blank" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Schedule Appointment</a>
                                                    <?php endif; ?>
                                    
                                                <?php endwhile; 
                                                            
                                            endif;

                                        endwhile; 
                                        
                                    endif;
                                    ?>
                                    
                                </div>
                            </div>
                        
                    <?php endwhile;

                else : ?>
                
                    <p>Sorry, no posts matched your criteria.</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            <?php } elseif( geot_target_state( [ 'Idaho' ] ) ) { ?>
                <?php
                    $args = array(  
                        'post_type' => 'locations',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'location-states',
                            'field'    => 'slug',
                            'terms'    => array( 'idaho' )
                            )
                        ),
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                        'orderby' => 'name' 
                    );

                    $loop = new WP_Query( $args ); ?>
                <?php
                if ($loop->have_posts()) : ?>
                    <div class="post-grid">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        
                            <div class="post">
                                <div class="content">
                                    <h4 class="uppercase"><?php the_title(); ?></h4>   
                                    <?php 
                                    if( have_rows('modules') ):

                                        while( have_rows('modules') ): the_row();
                                            
                                            if( have_rows('top_content') ):

                                                while( have_rows('top_content') ): the_row();
                                                    
                                                    if( have_rows('address') ):

                                                        while( have_rows('address') ): the_row();
                                                            $address1 = get_sub_field('address_line_1');
                                                            $address2 = get_sub_field('address_line_2');
                                                        ?>
                                                            <div class="address">
                                                                <div class="add1"><?php echo $address1; ?></div>   
                                                                <div class="add2"><?php echo $address2; ?></div>                    
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;
                                                
                                            
                                                    if( have_rows('contact') ):

                                                        while( have_rows('contact') ): the_row();
                                                            $phone = get_sub_field('phone');
                                                        ?>
                                                            <div class="phone">
                                                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>                                 
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;

                                                endwhile; 
                                                            
                                            endif;

                                            if( have_rows('bottom_content') ):

                                                while( have_rows('bottom_content') ): the_row(); ?>
                                                    
                                                    <?php 
                                                    $bottom_button = get_sub_field('bottom_button');
                                                    if( $bottom_button ): 
                                                        $link_url = $bottom_button['url'];
                                                        $link_title = $bottom_button['title'];
                                                        $link_target = $bottom_button['target'] ? $bottom_button['target'] : '_self';
                                                    ?>
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                                                    <a class="btn btn-secondary" target="_blank" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Schedule Appointment</a>
                                                    <?php endif; ?>
                    
                                    
                                                <?php endwhile; 
                                                            
                                            endif;

                                        endwhile; 
                                        
                                    endif;
                                    ?>
                                    
                                </div>
                            </div>
                        
                    <?php endwhile;

                else : ?>
                
                    <p>Sorry, no posts matched your criteria.</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            <?php } elseif( geot_target_state( [ 'Colorado' ] ) ) { ?>
                <?php
                    $args = array(  
                        'post_type' => 'locations',
                        'post_status' => 'publish',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'location-states',
                            'field'    => 'slug',
                            'terms'    => array( 'colorado' )
                            )
                        ),
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                        'orderby' => 'name' 
                    );

                    $loop = new WP_Query( $args ); ?>
                <?php
                if ($loop->have_posts()) : ?>
                    <div class="post-grid">
                    <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                        
                            <div class="post">
                                <div class="content">
                                    <h4 class="uppercase"><?php the_title(); ?></h4>   
                                    <?php 
                                    if( have_rows('modules') ):

                                        while( have_rows('modules') ): the_row();
                                            
                                            if( have_rows('top_content') ):

                                                while( have_rows('top_content') ): the_row();
                                                    
                                                    if( have_rows('address') ):

                                                        while( have_rows('address') ): the_row();
                                                            $address1 = get_sub_field('address_line_1');
                                                            $address2 = get_sub_field('address_line_2');
                                                        ?>
                                                            <div class="address">
                                                                <div class="add1"><?php echo $address1; ?></div>   
                                                                <div class="add2"><?php echo $address2; ?></div>                    
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;
                                                
                                            
                                                    if( have_rows('contact') ):

                                                        while( have_rows('contact') ): the_row();
                                                            $phone = get_sub_field('phone');
                                                        ?>
                                                            <div class="phone">
                                                                <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>                                 
                                                            </div>
                                                        <?php
                                                        endwhile; 
                                                    
                                                    endif;

                                                endwhile; 
                                                            
                                            endif;

                                            if( have_rows('bottom_content') ):

                                                while( have_rows('bottom_content') ): the_row(); ?>
                                                    
                                                    <?php 
                                                    $bottom_button = get_sub_field('bottom_button');
                                                    if( $bottom_button ): 
                                                        $link_url = $bottom_button['url'];
                                                        $link_title = $bottom_button['title'];
                                                        $link_target = $bottom_button['target'] ? $bottom_button['target'] : '_self';
                                                    ?>
                                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Learn More</a>
                                                    <a class="btn btn-secondary" target="_blank" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>">Schedule Appointment</a>
                                                    <?php endif; ?>
                    
                                    
                                                <?php endwhile; 
                                                            
                                            endif;

                                        endwhile; 
                                        
                                    endif;
                                    ?>
                                    
                                </div>
                            </div>
                        
                    <?php endwhile;

                else : ?>
                
                    <p>Sorry, no posts matched your criteria.</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>

            <?php } else { ?>

                <?php echo do_shortcode('[searchandfilter id="1519" show="results"]') ?>
                
            <?php } ?>
        <?php } else { ?>
            
            <?php echo do_shortcode('[searchandfilter id="1519" show="results"]') ?>

        <?php } ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>