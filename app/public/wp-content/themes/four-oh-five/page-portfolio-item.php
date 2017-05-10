<?php
/*Template Name: Portfolio Item*/

get_header(); ?>

<?php
	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/page/content-page-portfolio' );
	endwhile;
?>

<?php get_footer();
