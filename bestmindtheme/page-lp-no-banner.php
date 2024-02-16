<?php
 /* Template Name: LP: No Topbar Template */
get_header();

// Check value exists.
if (have_rows('modules')) :
    // Loop through rows.
    while (have_rows('modules')) : the_row();
        // Case: banner-cta layout.
        if (get_row_layout() == 'banner_cta') :
            get_template_part('modules/banner-cta');
        endif;
        // Case: contact-info layout.
        if (get_row_layout() == 'contact_info') :
            get_template_part('modules/contact-info');
        endif;
        // Case: contact-form layout.
        if (get_row_layout() == 'contact_form') :
            get_template_part('modules/contact-form');
        endif;
        // Case: hero layout.
        if (get_row_layout() == 'hero') :
            get_template_part('modules/hero');
        endif;
        // Case: hero-alt layout.
         if (get_row_layout() == 'hero_alt') :
            get_template_part('modules/hero-alt');
        endif;
        // Case: hero-banner layout.
        if (get_row_layout() == 'hero_banner') :
            get_template_part('modules/hero-banner');
        endif;
        // Case: hero-location layout.
        if (get_row_layout() == 'hero_location') :
            get_template_part('modules/hero-location');
        endif;
         // Case: faq layout.
         if (get_row_layout() == 'faq') :
            get_template_part('modules/faq');
        endif;
        // Case: featured-blogs layout.
        if (get_row_layout() == 'featured_blogs') :
            get_template_part('modules/featured-blogs');
        endif;
        // Case: featured-panels layout.
        if (get_row_layout() == 'featured_panels') :
            get_template_part('modules/featured-services');
        endif;
        // Case: featured-slider layout.
        if (get_row_layout() == 'featured_slider') :
            get_template_part('modules/featured-conditions');
        endif;
        // Case: logo-grid layout.
        if (get_row_layout() == 'logo_grid') :
            get_template_part('modules/logo-grid');
        endif;
        // Case: side-by-side layout.
         if (get_row_layout() == 'sbs') :
            get_template_part('modules/side-by-side');
        endif;
        // Case: team-members layout.
        if (get_row_layout() == 'team_members') :
            get_template_part('modules/team-members');
        endif;
        // Case: team-members-locations layout.
        if (get_row_layout() == 'team_members_location') :
            get_template_part('modules/team-members-location');
        endif;
       // Case: testimonials layout.
       if (get_row_layout() == 'testimonials') :
        get_template_part('modules/testimonials');
        endif;
        // Case: testimonials-v2 layout.
       if (get_row_layout() == 'testimonials_v2') :
        get_template_part('modules/testimonials-v2');
        endif;
        // Case: text-editor layout.
        if (get_row_layout() == 'text_editor') :
            get_template_part('modules/text-editor');
        endif;
        // Case: three-locations layout.
        if (get_row_layout() == 'three_locations') :
            get_template_part('modules/three-locations');
        endif;
        // Case: three-panels layout.
         if (get_row_layout() == 'three_panels') :
            get_template_part('modules/three-panels');
        endif;
    // End loop.
    endwhile;
// No value.
else :
// Do something...
endif;

get_footer();
