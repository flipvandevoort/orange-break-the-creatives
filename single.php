<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Orange_(Break_The_Creatives)
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>

		<nav><h3>Go back to <a href="/break the creatives">home</a> or view more <a href="/break the creatives/index.php/work/">projects</a></h3></nav>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
