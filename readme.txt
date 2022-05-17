<?php 
/*
Template Name: Test Page
*/
get_header();


// Просто додаэм контент та заголовок
    // the_title();
    // the_content();



// <!-- Огортаэм контент елементами php -->
    // echo '<h1>' . the_title() . '</h1>';
    // echo '<section> ' . the_content() . '</section>';
    // 
?>


<!-- Огортаэм контент елементами html -->
    <h1><?php the_title(); ?></h1>
    <section><?php the_content(); ?></section>


    <!-- Основні елементи -->
    <?php get_header(); ?>
    <?php get_footer(); ?>
    <?php get_sidebar(); ?>
    <?php get_search_form(); ?>


    <?php wp_head(); ?>
    <?php wp_nav_menu() ;?>

    <?php 
        wp_nav_menu( [
        'theme_location' => 'top',
        'container' => '',
        'menu_class' => '',
        'menu_id' => ''
        ]) ;
    ?>

    <?php wp_footer(); ?>


<?php get_footer();?>