
	<footer>
		<section class="vcard">
			<h1><?php bloginfo('name'); ?></h1>
			<h2><?php bloginfo('description'); ?></h2>
			<a class="button" href="http://rpi.edu">Rensselaer Polytechnic Institute</a>
			<a class="button">Troy, NY, USA</a>
		</section>
		<small><?php get_sidebar('footer'); ?> Web design by <a href="http://theopak.com">Theo Pak</a>.</small>
	</footer>

	</div><!-- end #main-wrapper -->


	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write("<script src='<?php bloginfo('stylesheet_directory'); ?>/js/libs/jquery-1.6.4.min.js'>\x3C/script>")</script>

	<script defer src='<?php bloginfo('template_url'); ?>/js/b353f499391bdbef271f596e7d72247b5db6aee3.js'></script>

	<script>
		/*
		window._gaq = [['_setAccount','UA-17942477-1'],['_trackPageview'],['_trackPageLoadTime']];
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
