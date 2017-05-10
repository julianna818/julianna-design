<?php
/**
 * Template Name: Portfolio Layout 
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Four_Oh_Five
 * @since 1.0
 * @version 1.0
 */

?>

<?php get_header(); ?>

<div class="container py-4">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<?php the_title( '<h1 class="display-4">', '</h1>' ); ?>

		</header>
		<div class="entry-content">
			<?php
				the_content();


					// check if the repeater field has rows of data
				if( have_rows('portfolio_layout') ):



				 	// loop through the rows of data
				    while ( have_rows('portfolio_layout') ) : the_row();

				  			$portfolio_image = get_sub_field('portfolio_image'); // Image (URL)
				  			$portfolio_alt = get_sub_field('portfolio_alt'); // Text
				  			$portfolio_description = get_sub_field('portfolio_description'); // Text Area (DO NOT MAKE REQUIRED)


								echo '<img src="'.$portfolio_image.'" alt="'.$portfolio_alt.'">';
								echo '<p>'.$portfolio_description.'</p>';



				    endwhile;



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

<?php get_footer(); ?>
