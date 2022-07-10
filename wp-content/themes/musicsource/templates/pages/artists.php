<section class='page-section'>
<inner-column>

<?php

$parameters = [  
			'post_type' => 'artists',
			//This variable will make an array of all of the objects
			//with a post type of artists.
		];

		$loop = new WP_Query( $parameters );

		//Using the array function here seems to clarify what's going on...

		while ( $loop->have_posts() ) : $loop->the_post(); 
			include ( getFile('templates/pages/artist.php') );
		endwhile;

		wp_reset_postdata();
	?>

</inner-column>
</section>