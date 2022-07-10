<artist-card>

	<h2 class='name'><?php the_field('name');?></h2>
	<h3 class='country'>
		<?php
			$countries = get_field('countries');
			//countries is the name of the WP_Post object that the CMS is referencing.  This corresponds to the field "Countries" and its choices in the "New Artist" form.
			foreach($countries as $country) {
				echo $country->post_title;
}
		?>
	</h3>
	<h3 class='genre'>
		<?php
			$genres = get_field('genres');
			foreach($genres as $genre) {
				echo $genre->post_title;
			}
		?>
	</h3>
<a href='<?php the_permalink(); ?>'>Read more</a>
	<!--This is the link to the individual detail page.
		get_the_permalink shows the link to the current page.-->
</artist-card>

<?php 

// $countries = get_field('countries');
			
// foreach($countries as $country) {
// 	var_dump($country);
// 	}