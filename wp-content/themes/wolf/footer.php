<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wolfetariat
 */

?>

	</div><!-- #content -->

<?php get_sidebar( 'footer' ); ?>

	<footer id="colophon" class="site-footer">
        <nav class="social-menu">
		<?php wp_nav_menu( array( 'theme_location' => 'social') ); ?>

		<div class="site-info">
			<?php
				/* translators: 1: Theme name, 2: Theme author */
				printf( esc_html__( 'Theme: %1$s by %2$s', 'wolf' ), 'wolf', '<span class="sep"> | </span><a class="author-link" href="https://design.oit.ncsu.edu">Lauren Etheridge</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer('footer-1'); ?>

</body>
</html>
