<?php get_header(); ?>
<!-- Inizio Content -->
		<div id="main" role="main">
		  
		   	<article>
			  	<header>
				  	</header>
			 
			  	<section class="contenuto-art">
	   	 		<?php
		 			if (get_bloginfo("language")=="it-IT"){ ?>
		 					<!-- italiano -->
		 					<h1>Pagina Non Trovata</h1>
        					<p>Siamo spiacenti ma non riusciamo a trovare la pagina che stavi cercando.</p> 					
		<?php	 		} elseif (get_bloginfo("language")=="ru-RU"){  ?>
								<!-- RUSSO -->
		 						<h1>Страница не найдена</h1>
        						<p>Мы сожалеем, но мы не можем найти страницу, которую вы искали.</p>	 			
		<?php				} else { ?>
									<!-- Inglese -->
		 							<h1>Page not found</h1>
	       							<p>We are sorry but we cann't find the page you were looking for.</p>		
	       					
		<?php		}
				?>		
				 
			  	<footer>
			    	</footer>
			</article>
			
		</div>
<!-- Fine Content -->

<?php get_footer(); ?>




