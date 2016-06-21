<?php $page = get_page_by_title( 'Footer' ); ?>
	</div><!-- END MAIN -->
	<footer id="footer" role="footer">
    
    	<div class="wrapper">
   
              <section class="full">
              <?php $footer_query = new WP_Query( array( 'post_type' => 'page', 'post_parent' => $page->ID, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
              
              while ( $footer_query->have_posts() ) : $footer_query->the_post(); ?>
              
                  <div class="footer-box <?php echo $post->post_name; ?>">
                  <h3><?php the_title(); ?></h3>
                  <?php the_content(); ?>
                  </div>
              
              <?php endwhile; wp_reset_postdata(); ?>
              </section>
              <p class="info">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> - Desenvolvido por <a href="http://www.danielscarpim.com.br">Daniel Scarpim</a></p>
            
        </div>
        
	</footer>		
	<?php wp_footer(); ?>

</body>
</html>