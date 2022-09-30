<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Orange_(Break_The_Creatives)
 */

get_header();
?>

	<main id="primary" class="site-main">

		<section class="error-404 not-found">
			<header class="page-header">
				<h1 class="page-title"><?php esc_html_e( 'Oops! You found the 404 page.', 'orange-break-the-creatives' ); ?></h1>
			</header><!-- .page-header -->
		</section><!-- .error-404 -->
		<nav>
		  <h2>Go back to <a href="<?php echo get_home_url(); ?>">home</a></h2>
	  </nav>

	</main><!-- #main -->
