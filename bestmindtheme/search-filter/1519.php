<?php
/**
 * Search & Filter Pro 
 *
 * Sample Results Template
 * 
 * @package   Search_Filter
 * @author    Ross Morsali
 * @link      https://searchandfilter.com
 * @copyright 2018 Search & Filter
 * 
 * Note: these templates are not full page templates, rather 
 * just an encaspulation of the your results loop which should
 * be inserted in to other pages by using a shortcode - think 
 * of it as a template part
 * 
 * This template is an absolute base example showing you what
 * you can do, for more customisation see the WordPress docs 
 * and using template tags - 
 * 
 * http://codex.wordpress.org/Template_Tags
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

<?php if ( $query->have_posts() ) { ?>
	
	<?php while ($query->have_posts()) {
		$query->the_post(); ?>
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
                           
	<?php } ?>
<?php } else {
	echo "No Results Found";
} ?>