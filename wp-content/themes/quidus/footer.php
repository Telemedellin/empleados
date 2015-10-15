<?php
/**
 * The template for displaying the footer
 *
 */
?>	
		</div>
	</div><!-- .site-content -->
	
	<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
		<div class="right-sidebar-wrapper">
			<div class="right-sidebar-wrap">
				<?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
						<div class="widget-area" role="complementary">
							<?php dynamic_sidebar( 'right-sidebar' ); ?>
						</div><!-- .widget-area -->
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

</div>
<!-- .site -->

<div class="main-slider">
	<?php logo_slider(); ?>
</div>

<footer id="colophon" class="site-footer" role="contentinfo">
    <div class="site-info">
    	<?php if ( is_active_sidebar( 'footer-widget-1' ) or is_active_sidebar( 'footer-widget-2' ) or is_active_sidebar( 'footer-widget-3' ) ) : ?>
					<?php if ( is_active_sidebar( 'footer-widget-1' ) ) : ?>
								<?php dynamic_sidebar( 'footer-widget-1' ); ?>
					<?php endif; ?>
				<?php if ( is_active_sidebar( 'footer-widget-2' ) ) : ?>
							<?php dynamic_sidebar( 'footer-widget-2' ); ?>
				<?php endif; ?>
				
		<?php endif; ?>
        <a href="<?php echo get_home_url(); ?>/mapa-del-sitio" title="Mapa del sitio" class="mapa">Mapa del sitio</a> - <a href="http://www.telemedellin.tv" title="Página oficial de Telemedellín" class="tm">Telemedellin.tv</a> - <span> <?php echo date('Y') ?> </span>
    </div>
    <!-- .site-info -->
</footer>
<!-- .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
