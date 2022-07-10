<?php get_header(); ?>

<?php

	if ( is_page('home') ) {
		include('templates/pages/home.php');
	}


	if ( is_page('artists') ) {
		include('templates/pages/artists.php');
	}

	if ( is_singular('artists') ) {
		include('templates/pages/artist.php');
	}
 

	if ( is_404() ) {
		include('templates/pages/page-not-found.php');
	}


?>

<?php get_footer(); ?>
