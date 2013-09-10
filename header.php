<!-- Inizio Header -->
<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	 
	<title><?php 	bloginfo( 'name' ); ?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet/less" href="<?php bloginfo( 'stylesheet_directory'); ?>/less/style.less">
	<script src="<?php bloginfo( 'template_url' ); ?>/js/libs/less.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/libs/modernizr.js"></script>
	<?php wp_head(); ?>
</head>
 
<body class=standard>
 	<?php $opzioni = get_option( 'opt_impostazioni_tema' ); ?>
	<div id="container">
	 <?php get_sidebar(); ?>

		<header>
		 	<div class="menuneltop" />
		 	
		 		
		 		<!-- Menu -->
		 		
		 		<?php
		 			if (get_bloginfo("language")=="it-IT"){ ?>
		 				<!-- Italiano -->
							<a href="http://testclivio.riminiforfun.it/"><img id="logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.gif" title="<?php bloginfo( 'name' ); ?> Logo" /></a>
							<a href="http://testclivio.riminiforfun.it/it/about-us/"><img src="<?php bloginfo( 'template_url' ); ?>/img/chi-siamo.gif" title="Chi Siamo" class="menuHead" /></a>
		 					<a href="http://testclivio.riminiforfun.it/it/jewellery/"><img src="<?php bloginfo( 'template_url' ); ?>/img/bijoux.gif" title="Bijoux" class="menuHead" /></a>
		 					<a href="http://testclivio.riminiforfun.it/it/favors/"><img src="<?php bloginfo( 'template_url' ); ?>/img/bomboniere.gif" title="Bomboniere" class="menuHead" /></a>
		 					<a href="http://testclivio.riminiforfun.it/it/album-and-objects/"><img src="<?php bloginfo( 'template_url' ); ?>/img/album-e-oggetti.gif" title="Album e Oggetti" class="menuHead" /></a>
		 					
		<?php	 		} elseif (get_bloginfo("language")=="ru-RU"){  ?>
								<!-- Russo -->
								<a href="http://testclivio.riminiforfun.it/"><img id="logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.gif" title="<?php bloginfo( 'name' ); ?> Logo" /></a>
								<a href="http://testclivio.riminiforfun.it/ru/about-us/"><img src="<?php bloginfo( 'template_url' ); ?>/img/chi-siamo.gif" title="Chi Siamo" class="menuHead" /></a>
			 					<a href="http://testclivio.riminiforfun.it/ru/jewellery/"><img src="<?php bloginfo( 'template_url' ); ?>/img/bijoux.gif" title="Bijoux" class="menuHead" /></a>
		 						<a href="http://testclivio.riminiforfun.it/ru/favors/"><img src="<?php bloginfo( 'template_url' ); ?>/img/bomboniere.gif" title="Bomboniere" class="menuHead" /></a>
		 						<a href="http://testclivio.riminiforfun.it/ru/album-and-objects/"><img src="<?php bloginfo( 'template_url' ); ?>/img/album-e-oggetti.gif" title="Album e Oggetti" class="menuHead" /></a>
		 								 			
		<?php				} else { ?>
									<!-- Inglese -->
		 							<a href="http://testclivio.riminiforfun.it/"><img id="logo" src="<?php bloginfo( 'template_url' ); ?>/img/logo.gif" title="<?php bloginfo( 'name' ); ?> Logo" /></a>
									<a href="http://testclivio.riminiforfun.it/about-us/"><img src="<?php bloginfo( 'template_url' ); ?>/img/chi-siamo.gif" title="Chi Siamo" class="menuHead" /></a>
				 					<a href="http://testclivio.riminiforfun.it/jewellery/"><img src="<?php bloginfo( 'template_url' ); ?>/img/bijoux.gif" title="Bijoux" class="menuHead" /></a>
		 							<a href="http://testclivio.riminiforfun.it/favors/"><img src="<?php bloginfo( 'template_url' ); ?>/img/bomboniere.gif" title="Bomboniere" class="menuHead" /></a>
		 							<a href="http://testclivio.riminiforfun.it/album-and-objects/"><img src="<?php bloginfo( 'template_url' ); ?>/img/album-e-oggetti.gif" title="Album e Oggetti" class="menuHead" /></a>
		<?php		}
				?>		 		
	     	</div>
		<div class="clear"> </div>
    	</header>
		
		<!-- Fine Header -->
		



