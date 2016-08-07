<?php
/**
 * The template for displaying the footer.
 *
 * @package OPM
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'opm' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'opm' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'opm' ), 'opm', '<a href="http://www.onepixmedia.com" rel="designer">OnePixMedia</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
