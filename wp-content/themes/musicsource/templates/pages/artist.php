<h1>This is the artist detail page</h1>
<h2 class='name'><?php the_field('name');?></h2>

<!--add description from CMS-->

<!--add photo-->

<!--add a paragraph-->

<!--add links to albums-->
<?php

	//$albums = get_field('albums');
	//foreach ($albums as $album) {
	
	//if( $albumartists

$artists = get_field('artists');

var_dump($artists);
if( $artists ): ?>
    <ul>
    <?php foreach( $artists as $post ): 

        // Setup this post for WP functions (variable must be named $post).
        setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>A custom field from this post: <?php the_field( 'field_name' ); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php 
    // Reset the global post object so that the rest of the page works correctly.
    wp_reset_postdata(); ?>
<?php endif; ?>