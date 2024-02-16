<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php the_field('insert_in_header', 'option'); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php the_field('insert_in_body', 'option'); ?>
<?php 

if ( is_page_template( 'page-landingpage.php' ) ) {
    get_template_part('modules/nav-alt');

} elseif ( is_page_template( 'page-lp-no-banner.php' ) ) {
    get_template_part('modules/nav-lp-no-banner');
} else {
    get_template_part('modules/nav');
}

