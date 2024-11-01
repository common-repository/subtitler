<?
/*
Plugin Name: Image Subtitler
Plugin URI: http://adityamukherjee.com/geekaholic
Description: Adds style-able subtitles to images
Author: Aditya Mukherjee
Version: 0.9
*/
//=================================================
/* The class of the container for the post content */
$subtitler_body = "the_body,body";

function appendSubtitler() {
	$folder = get_bloginfo('wpurl')."/wp-content/plugins/subtitler";
	
	echo "<script src='$folder/jquery.js' type='text/javascript'></script>\n".
	"<script src='$folder/subtitler.js' type='text/javascript'></script>\n".
	"<link rel='stylesheet' href='$folder/subtitler.css' type='text/css' media='screen' charset='utf-8'/>\n";
}

function doSubtitler() {
	global $subtitler_body;
	echo <<<script
		\n<script type="text/javascript" charset="utf-8">\n
			subtitler('$subtitler_body');
		\n</script>\n
script;
}

add_action('wp_head', 'appendSubtitler');
add_action('wp_footer', 'doSubtitler');

?>