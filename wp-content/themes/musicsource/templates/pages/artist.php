<?php

$name = get_field('name');
$country = get_field('country');
$portrait = get_field('portrait');
$bookingPrice = get_field('booking-price');

if ($portrait) {
    $portrait = $portrait['url'];
} else {
    $portrait = "https://peprojects.dev/images/square.jpg";
}


?>

<section class='page-section artist-overview'>
	<inner-column>

		<h1>This is the artist detail page</h1>
		<h2 class='name'><?=$name?></h2>
		<h2 class='country'><?=$country?></h2>
		<picture class='detail-pic'>
		    <img src='<?=$portrait?>' alt="">
		</picture>

		<?php if ( is_user_logged_in() && $bookingPrice) { ?>
			<h4 class='booking-price'>Booking Price: <?=$bookingPrice?></h4>
		<?php } ?>

	</inner-column>
</section>



<section>
	<inner-column>
		<?php
$albums = get_field('albums');
if( $albums ): ?>
    <ul>
    <?php foreach( $albums as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
   <!--          <span>A custom field from this post: <?php the_field( 'field_name' ); ?></span> -->
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>


	</inner-column>
</section>
