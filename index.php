<?php get_header(); ?>

<!-- Inizio Content -->
		<div id="main" role="main">
			

		   <?php if (have_posts()) : while (have_posts()) : the_post(); ?> 	
		  
		   	<article>
			  	<header></header>
			 
			  	<section class="contenuto-art">
			    	<?php the_content( "Continua a Leggere" ); ?>
			  	</section>
			 
			  	<footer></footer>
			</article>
			
			<?php endwhile; else: ?>

			  <!-- Aggiungere un messaggio di errore -->
			
			<?php endif; ?>
		</div>
<!-- Fine Content -->

<?php get_footer(); ?>
