<?php
/*
Template Name: Projetos
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

<script>

$(document).ready(
  function () {
	  $('.options li:first-child a').addClass('current');
  }
);

</script>


<?php get_footer(); ?>

