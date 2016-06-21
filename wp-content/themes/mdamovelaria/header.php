<!doctype html>
<html lang="pt-br">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<!--[if IE]><![endif]-->
<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo('name'); ?></title>
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
<?php if ( file_exists(TEMPLATEPATH .'/favicon.ico') ) : ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">
<?php endif; ?><?php if ( file_exists(TEMPLATEPATH .'/apple-touch-icon.png') ) : ?>
<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/apple-touch-icon.png">
<?php endif; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<?php wp_head(); ?>




</head><?php $body_classes = join( ' ', get_body_class() ); ?>
<!--[if lt IE 7 ]><body class="ie6 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 7 ]><body class="ie7 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 8 ]><body class="ie8 <?php echo $body_classes; ?>"><![endif]-->
<!--[if IE 9 ]><body class="ie9 <?php echo $body_classes; ?>"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><body class="<?php echo $body_classes; ?>"><!--<![endif]-->

<header id="header" role="banner">

		
    <section class="full">
		
        <h1 id="logo"><a href="<?php bloginfo('url'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/MDA_Movelaria.png" alt="<?php bloginfo('title'); ?>"></a></h1>
        
        <div class="fone">(11) 4071-8107</div>
		
        <nav id="main-nav" role="navigation"><?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary', 'menu' => 'name', 'container' => 'false' ) ); ?></nav>
	<div class="bg-fold"></div>
    </section>
    
</header>

	
<div id="main" role="main" class="full">