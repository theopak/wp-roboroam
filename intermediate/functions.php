<?php


if(function_exists("register_sidebar")) {
	register_sidebar(array(
		"name" => "footer",
	));
	register_sidebar(array(
		"name" => "page",
	));
}

add_custom_background();

add_theme_support("post-thumbnails");
set_post_thumbnail_size(212, 212); //img - box-resize (maintain aspect ratio)


?>
