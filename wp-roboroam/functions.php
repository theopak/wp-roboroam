<?php


/*if(function_exists("register_sidebar")) {
	register_sidebar(array(
		"name" => "footer",
	));
	register_sidebar(array(
		"name" => "page",
	));
}*/

// Support Custom Backgrounds
add_custom_background();

// Support Custom Headers
define( 'HEADER_TEXTCOLOR', '333' );
define( 'HEADER_IMAGE', '%s/img/banner.png' );
define( 'HEADER_IMAGE_WIDTH', 960 );
define( 'HEADER_IMAGE_HEIGHT', 360 );
add_custom_image_header('header_style', 'admin_header_style');

// Automatically Included in Site Header
function header_style() {
    ?><style type="text/css">
		aside.intro { background: url(<?php header_image(); ?>) no-repeat left; }
	</style><?php
}

// Automatically Included in Admin Header
function admin_header_style() {
    ?><style type="text/css">
        #headimg {
            width: <?php echo HEADER_IMAGE_WIDTH; ?>px;
            height: <?php echo HEADER_IMAGE_HEIGHT; ?>px;
            background: no-repeat;
        }
    </style><?php
}

// Support Custom Menus
if(function_exists('register_nav_menus')) {
	register_nav_menu( 'primary', 'Primary Menu' );
}

add_theme_support("post-thumbnails");
set_post_thumbnail_size(212, 212); //img - box-resize (maintain aspect ratio)


?>
