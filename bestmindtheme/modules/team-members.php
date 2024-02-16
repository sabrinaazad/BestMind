<section class="section section--team-members">
        <div class="section-wrapper">
            
        <?php $preheading = get_sub_field('preheading');
        if( $preheading ): ?>
            <span class="preheading uppercase"><?php echo $preheading; ?></span>
        <?php endif; ?>

        <?php $heading = get_sub_field('heading');
        if( $heading ): ?>
            <h2 class="heading"><?php echo $heading; ?></h2>
        <?php endif; ?>
        <?php
        if( function_exists( 'geot_target' ) ) {
            
            
            if( geot_target_state( [ 'Colorado' ] ) ) { ?>
                <?php
                    $args = array(  
                        'post_type' => 'providers',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'provider-states',
                            'field'    => 'slug',
                            'terms'    => array( 'colorado' ),
                            )
                        ),
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );
    
                    $loop = new WP_Query( $args ); ?>
                    <div class="team_slider_2">    
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
                        <div class="slide">
                            <?php the_post_thumbnail(); ?>
                        </div>
    
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                <?php
                    $args = array(  
                        'post_type' => 'providers',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'provider-states',
                            'field'    => 'slug',
                            'terms'    => array( 'colorado' ),
                            )
                        ),
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );
    
                    $loop = new WP_Query( $args ); ?>
                    <div class="team_slider">       
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
    
                    
                            <div class="slide">       
                                <div class="image-wrapper">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="content">
                                <h2 class="heading"><?php the_title(); ?></h2>
                                <h4 class="preheading uppercase"><?php the_field("title"); ?></h4>
                                <?php  the_excerpt(); ?>
                                <a class="btn btn-secondary" href="<?php the_permalink()?>">Read Full Bio</a>
                                </div>
                            </div>
                    
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
    
            <?php } elseif( geot_target_state( [ 'Oregon', 'Washington', 'Idaho' ] ) ) { ?>
                <?php
                    $args = array(  
                        'post_type' => 'providers',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'provider-states',
                            'field'    => 'slug',
                            'terms'    => array( 'oregon', 'washington', 'idaho' ),
                            )
                        ),
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'name',
                        'order' => 'ASC'

                    );

                    $loop = new WP_Query( $args ); ?>
                    <div class="team_slider_2">    
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                        <div class="slide">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                <?php
                    $args = array(  
                        'post_type' => 'providers',
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'provider-states',
                            'field'    => 'slug',
                            'terms'    => array( 'oregon', 'washington', 'idaho' ),
                            )
                        ),
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'name',
                        'order' => 'ASC'
                    );

                    $loop = new WP_Query( $args ); ?>
                    <div class="team_slider">       
                        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    
                            <div class="slide">       
                                <div class="image-wrapper">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="content">
                                <h2 class="heading"><?php the_title(); ?></h2>
                                <h4 class="preheading uppercase"><?php the_field("title"); ?></h4>
                                <?php  the_excerpt(); ?>
                                <a class="btn btn-secondary" href="<?php the_permalink()?>">Read Full Bio</a>
                                </div>
                            </div>
                    
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>

           
             <?php } else { ?>

            <?php
                $args = array(  
                    'post_type' => 'providers',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'provider-states',
                        'field'    => 'slug',
                        'terms'    => array( 'oregon', 'washington', 'idaho' ),
                        'operator' => 'NOT IN',
                        )
                    ),
                    'posts_per_page' => -1,
                    'orderby' => 'name',
                    'order' => 'ASC'
                );

                $loop = new WP_Query( $args ); ?>
                <div class="team_slider_2">    
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php
                $args = array(  
                    'post_type' => 'providers',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'provider-states',
                        'field'    => 'slug',
                        'terms'    => array( 'oregon', 'washington', 'idaho' ),
                        'operator' => 'NOT IN',
                        )
                    ),
                    'posts_per_page' => -1,
                    'orderby' => 'name',
                    'order' => 'ASC'
                );

                $loop = new WP_Query( $args ); ?>
                <div class="team_slider">       
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                
                        <div class="slide">       
                            <div class="image-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content">
                            <h2 class="heading"><?php the_title(); ?></h2>
                            <h4 class="preheading uppercase"><?php the_field("title"); ?></h4>
                            <?php  the_excerpt(); ?>
                            <a class="btn btn-secondary" href="<?php the_permalink()?>">Read Full Bio</a>
                            </div>
                        </div>
                
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
           <?php } ?>


        <?php } else { ?>


            <?php
                $args = array(  
                    'post_type' => 'providers',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'provider-states',
                        'field'    => 'slug',
                        'terms'    => array( 'oregon', 'washington', 'idaho' ),
                        'operator' => 'NOT IN',
                        )
                    ),
                    'posts_per_page' => -1,
                    'orderby' => 'name',
                    'order' => 'ASC'
                );

                $loop = new WP_Query( $args ); ?>
                <div class="team_slider_2 fallback-option">    
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="slide">
                        <?php the_post_thumbnail(); ?>
                    </div>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php
                $args = array(  
                    'post_type' => 'providers',
                    'post_status' => 'publish',
                    'tax_query' => array(
                        array(
                        'taxonomy' => 'provider-states',
                        'field'    => 'slug',
                        'terms'    => array( 'oregon', 'washington', 'idaho' ),
                        'operator' => 'NOT IN',
                        )
                    ),
                    'posts_per_page' => -1,
                    'orderby' => 'name',
                    'order' => 'ASC'
                );

                $loop = new WP_Query( $args ); ?>
                <div class="team_slider fallback-option">       
                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                
                        <div class="slide">       
                            <div class="image-wrapper">
                                <?php the_post_thumbnail(); ?>
                            </div>
                            <div class="content">
                            <h2 class="heading"><?php the_title(); ?></h2>
                            <h4 class="preheading uppercase"><?php the_field("title"); ?></h4>
                            <?php  the_excerpt(); ?>
                            <a class="btn btn-secondary" href="<?php the_permalink()?>">Read Full Bio</a>
                            </div>
                        </div>
                
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
        
        
        <?php } ?>

        </div>
</section>