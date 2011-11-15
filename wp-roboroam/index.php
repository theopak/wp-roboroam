<?php get_header(); ?>

	<article id="main" role="main">
		<section id="content" class="clearfix">
<?php

//WP loop to display individual posts
if (have_posts()) {
	while (have_posts()) { the_post();
		echo "		<section id=\"post-";
		the_ID();
		echo "\">\n			<h1>";
		the_title();
		echo "</h1>\n			<small>This blog entry was posted by ";
		echo get_the_author();
		echo " on ";
		the_time('l, F j, Y');
		echo " at ";
		the_time('g:i a ');
		if( function_exists('ADDTOANY_SHARE_SAVE_KIT') ) { ADDTOANY_SHARE_SAVE_KIT(); }
		edit_post_link('(admin: edit this post)', ' ', '');
		echo "</small>\n			";
		the_content();
		echo "\n		</section>";
	}
} else {
	_e('Sorry, you have encountered an error.');
}

?>
		</section><!-- end #content -->
	</article><!-- end #main -->
	<a class="scrollup" onclick="$.smoothScroll(0);">(back to top)</a>

<? get_footer(); ?>
