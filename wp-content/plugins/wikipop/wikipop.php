<?php
/*
Plugin Name: WikiPop
Plugin URI: http://www.matthewhealy.net/wikipop-for-wordpress
Description: Allows inline viewing of wikipedia articles for a tagged term or phrase.
Version: 2.0
Author: Matthew Healy
Author URI: http://www.matthewhealy.net/
*/

/*  
Copyright 2009 Matthew Healy (email : matt@matthewhealy.net)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



function tb_enqueue() {
	wp_enqueue_script('jquery');
    wp_enqueue_script('fancyzoom','/' . PLUGINDIR . '/wikipop/js/fancyzoom.js');
}

function tb_inject() {
?>
	<script type="text/javascript" charset="utf-8">
		jQuery(document).ready(function($) {
			$('a.wikipopLink').fancyZoom({scaleImg: true, closeOnClick: true, directory: '<?= get_option('siteurl'); ?>/wp-content/plugins/wikipop/images'});
		});
		function setFrameSrc (content, language) {
			language = typeof(language) != 'undefined' && language != '' ? language : 'en';
			jQuery('#wikipopFrame iframe').attr('src','http://'+language+'.m.wikipedia.org/wiki?search='+content+'&KeepThis=true&TB_iframe=true&height=400&width=315');
		}
	</script>

<?php
}

function create_iframe() {
?>

	<div style="display: none;" id="wikipopFrame"><iframe id="theFrame" style="border: none;" name="theFrame" width="340" height="400" src=""></iframe></div>

<?php
}

function wikipopFunction($attributes, $content = null) {
	$wiki_lookup = isset($attributes['search']) ? $attributes['search'] : $content;
	return '<a href="#wikipopFrame" class="wikipopLink" onclick="setFrameSrc(\''.$wiki_lookup.'\', \''.$attributes['language'].'\');">'.$content.'</a>';
}

add_action('wp_head', 'tb_enqueue', 1);
add_action('wp_head', 'tb_inject', 10);
add_action('loop_end', 'create_iframe', 1);
add_shortcode( 'wikipop', 'wikipopFunction' );

// TINYMCE

function addbuttons() {
if ( ! current_user_can('edit_posts') && ! current_user_can('edit_pages') )
return;

if ( get_user_option('rich_editing') == 'true') {
add_filter("mce_external_plugins", "plugin_load");
add_filter('mce_buttons', 'register_button');
}
}

function plugin_load($plugin_array) {


$plug = WP_PLUGIN_URL . '/wikipop/js/editor_plugin.js';


$plugin_array['wikipop'] = $plug;
return $plugin_array;
}

function register_button(&$buttons) {
$b[] = "wikipopButton";
$b[] = "separator";
if ( is_array($buttons) && ! empty($buttons) ) {

$b = array_merge( $buttons, $b );
}

return $b;
}

add_action('init', 'addbuttons');

?>
