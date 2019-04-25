<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #page div and all content after
 *
 * @package     @@pkg.name
 * @author      @@pkg.author
 * @license     @@pkg.license
 */
?>

			</main>

		</div>

		<?php do_action( 'coblocks_before_footer' ); ?>

		<footer class="site-footer">

			<?php get_sidebar(); ?>
			<div class="primary-footer">
				<div class="site-info container center-align h6 medium smooth sans-serif-font gray" role="contentinfo">
					<span class="site-title">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">&copy; <?php echo esc_html( date_i18n( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></a>
					</span>
				</div>
			
				<div class="ragtag-logo">
					<a href="https://ragtag.org/?utm_medium=web&amp;utm_source=education-leads-home&amp;utm_name=empowered-badge">
					<img src="https://assets.ragtag.tech/empowered-by-ragtag.svg" alt="Empowered by Ragtag">
					</a>
				</div>

				<div class="footer-nav">
					<?php if ( has_nav_menu( 'footer' ) ) : ?>
						<nav class="footer-navigation container" aria-label="<?php esc_attr_e( 'Footer Menu', '@@textdomain' ); ?>">

							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'footer',
									'menu_class'     => 'footer-menu sans-serif-font medium gray smooth h6 list-reset',
									'depth'          => '1',
								)
							);
							?>
						</nav>
					<?php endif; ?>
				</div>
			</div>


		</footer>

		<?php do_action( 'coblocks_after_footer' ); ?>

	</div>

	<?php wp_footer(); ?>

	</body>

</html>