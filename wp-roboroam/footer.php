
	<footer>
		<section class="vcard">
			<h1><?php bloginfo('name'); ?></h1>
			<h2><?php bloginfo('description'); ?></h2>
			<?php /* get_sidebar('footer'); */ ?>
		</section>
		<small>Content &copy; <?php date('Y'); ?> <?php bloginfo('name'); ?> and/or Rensselaer Polytechnic Institute, except as indicated. Web design by <a href="http://theopak.com">Theo Pak</a>.</small>
	</footer>

	</div><!-- end #main-wrapper -->


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.js"></script>
	<script>window.jQuery || document.write("<script src='<?php bloginfo('stylesheet_directory'); ?>/js/libs/jquery-1.6.4.min.js'>\x3C/script>")</script>

	<!-- scripts concatenated and minified via ant build script-->
		<!--<script src="js/plugins.js"></script>
		<script src="js/script.js"></script>-->
		<script src="<?php bloginfo('stylesheet_directory'); ?>/js/b353f499391bdbef271f596e7d72247b5db6aee3.js"></script>
	<!-- end scripts-->

	<script>
		/*
		window._gaq = [['_setAccount','UA-XXX'],['_trackPageview'],['_trackPageLoadTime']];
		Modernizr.load({
			load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
		});
		*/
	</script>

	<!-- Prompt IE 6 users to install Chrome Frame -->
	<!--[if lt IE 7 ]>
		<script defer src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script defer>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->

	<?php wp_footer(); ?>

</body>
</html>
