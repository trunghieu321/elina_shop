</div><!-- end main-container -->
</div><!-- end page-area -->
<?php if ( is_active_sidebar( 'envo-shop-footer-area' ) ) { ?>  				
	<div id="content-footer-section" class="container-fluid clearfix">
		<div class="container">
			<?php dynamic_sidebar( 'envo-shop-footer-area' ); ?>
		</div>	
	</div>		
<?php } ?>
<?php wp_footer(); ?>
</body>
</html>
