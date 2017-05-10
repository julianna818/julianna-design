<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>


<div class="container py-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
		

		</header>
		<div class="entry-content">
			<?php
				the_content();


					// check if the repeater field has rows of data
				if( have_rows('portfolio_item') ):

					echo '<div class="row no-gutters">';

				 	// loop through the rows of data
				    while ( have_rows('portfolio_item') ) : the_row();

				  			$title = get_sub_field('portfolio_title');
				  			$image = get_sub_field('portfolio_image');
				  			$url = get_sub_field('portfolio_link');

				        echo '<div class="col-12 col-md-4">';
				        	echo '<a href="'.$url.'">';
				        		echo '<img src="'.$image.'" alt="'.$title.'">';
				        	echo '</a>';
				        echo '</div>';	

				    endwhile;

				    echo '</div>';

				else :

				    // no rows found

				endif;


				fourohfive_edit_link( get_the_ID() );

				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	</article>
</div>


