<?php
/*
Template Name: Contato
*/
?>

<?php get_header(); ?>

<section id="main-content">

<aside id="sidebar">
<?php $page = get_page_by_title( 'Footer' ); ?>

  <ul class="detalhes">
	<?php $query = new WP_Query( array( 'post_type' => 'page', 'post_parent' => $page->ID, 'orderby' => 'menu_order', 'order' => 'ASC' ) );
    
    while ( $query->have_posts() ) : $query->the_post(); ?>
    
      <li>
      <h3><?php the_title(); ?> </h3>
      <?php the_content(); ?>
      </li>
    
    <?php endwhile; wp_reset_postdata(); ?>
  
  </ul>

</aside>

<div class="window">

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 
 <h2 class="pagename">Deixe seu recado:</h2>
    
    <?php the_content(); ?>

<?php endwhile; endif; ?>
    

</div>


</section>

<script>

$(document).ready(
  function () {
	// Esconde todas as telas
    $('.window li').hide();
	// Adiciona a classe .current para as os primeiros objetos do container
	$('.options li a:first').addClass('current');
	$('.window li:first').addClass('current');
	
	//Pega o href do objeto atual
	var current = $('.options .current').attr('href')
	
	//Mostra o conteúdo atual
	$('.window '+current+'').show();
	
	
	$('.options li a').click(function(e) {
		// remove a classe de todos os botões
		$('.options li a').removeClass('current');
	  	// adiciona a classe .current no botão clicado
		$(this).addClass('current');
		// esconde todas as telas
	 	$('.window li').hide();
		//Pega o href do objeto atual
	 	var current = $('.options .current').attr('href')
		//mostra a tela selecionada
	 	$('.window '+current+'').fadeIn();
	  	//evita que a janela pule para o conteúdo
		e.preventDefault();
	  
	});
  }
);  

</script>

<?php get_footer(); ?><br />
