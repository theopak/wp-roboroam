<?php

/**
 * index.php
 * 
 * @package WordPress
 * @subpackage wp-roboroam
 */

get_header();

?>

	<article id="main" role="main" class="clearfix">
<?php

// WP loop to display individual posts
if (have_posts()) {
	while (have_posts()) { the_post();
		echo "<section id=\"post-"; the_ID(); echo "\" class=\"clearfix\">";
		echo "<h1>"; the_title(); echo "</h1>";
		edit_post_link('<small>(admin: edit this post)</small>', ' ', '');
		the_content();
		echo "</section>";
	}
} else {
	_e('Sorry, you have encountered an error.');
}

?>
	</article><!-- end #main -->
	<a class="scrollup" onclick="$.smoothScroll(0);">(back to top)</a>

<?php get_footer(); ?>
