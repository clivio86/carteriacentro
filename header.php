<!-- Inizio Header -->
 
<!doctype html>
 
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html lang="en"> <![endif]-->
<!--[if IE 7]>    <html lang="en"> <![endif]-->
<!--[if IE 8]>    <html lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
 
    <head>
 
        <meta charset="utf-8">
 
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 
        <title></title>
 
        <meta name="description" content="">
 
        <meta name="author" content="Clivio Fenili">
 
        <meta name="viewport" content="width=device-width,initial-scale=1">
 
 <!-- Inserito il programma less per il css-->
	<link rel="stylesheet/less" type="text/css" href="<?php bloginfo( 'template_url'); ?>/less/style.less">
 	<script src="<?php bloginfo( 'template_url'); ?>/js/libs/less.js" type="text/javascript"></script>
    <script src="<?php bloginfo( 'template_url'); ?>/js/libs/modernizr-2.0.6.min.js"></script>
			 
        <script src="js/libs/modernizr.min.js"></script>
 
    </head>
 
    <body>
 
        <div id="container">

<header>
    <img id="logo" src="<?php echo $opzioni['logo']; ?>" alt="<?php bloginfo( 'name' ); ?> Logo" />
 
    <hgroup>
        <h1 id="titolo-sito"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo bloginfo( 'name' ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
        <h2 id="descrizione-sito"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
 
</header>
 
<nav>
    <?php wp_nav_menu( 'principale' ); ?>
</nav>

 <body>
    <?php $opzioni = get_option( 'opt_impostazioni_tema' ); ?>
 
    <div id="container">
 
        <header>
            <img id="logo" src="<?php echo $opzioni['logo']; ?>" title="<?php bloginfo( 'name' ); ?> Logo" />
        </header>
    <!-- Fine Header -->
