<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<section id="main-content">


<?php $query = new WP_Query( array( 'post_type' => 'page', 'posts_per_page' => '1', 'post_parent' => $post->ID, 'orderbty' => 'menu_order', 'order' => 'ASC' ) );

while ( $query->have_posts() ) : $query->the_post();
?>

<div id="sidebar" class="box-home">

<h1> <?php the_title(); ?> </h1>

<?php the_content(); ?>

</div>
<?php endwhile; wp_reset_postdata(); ?>


<div class="images-home">
<?php $img_query = new WP_Query( array( 'post_type' => 'page', 'posts_per_page' => '1', 'pagename' => 'home/destaques' ) );

while ( $img_query->have_posts() ) : $img_query->the_post();
?>

<?php the_content(); ?>

<?php endwhile; wp_reset_postdata(); ?>
</div>


</section>

<?php get_footer(); ?><br />
