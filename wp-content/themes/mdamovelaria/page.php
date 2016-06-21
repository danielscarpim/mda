<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?>

<section id="main-content">

<?php get_sidebar(); ?>

<div class="window-slideshow">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    
    <?php the_content(); ?>

<?php endwhile; endif; ?>
    
</div>


</section>


<?php get_footer(); ?><br />
