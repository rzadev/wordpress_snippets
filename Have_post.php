<?php
This function checks to see if the current WordPress query has any results to loop over. This is a boolean function, meaning it returns either TRUE or FALSE.

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		// Your loop code
	endwhile;
else :
	echo wpautop( 'Sorry, no posts were found' );
endif;

?>