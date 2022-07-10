<artist-card>

	<h2 class='name'><?php the_field('name');?></h2>
	<h3 class='country'><?php get_field('country');?></h3>
	<h3 class='genre'><?php get_field('genre');?></h3>

	<a href='<?php the_permalink(); ?>'>Read more</a>
	<!--This is the link to the individual detail page.
		get_the_permalink shows the link to the current page.-->
	</artist-card>