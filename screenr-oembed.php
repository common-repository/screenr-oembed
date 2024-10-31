<?php
/*
Plugin Name: Screenr oEmbed
Plugin URI: http://webworksofkc.com/screenr-oembed-wordpress-plugin
Description: Adds oEmbed support for Screenr.com in WordPress posts, pages and custom post types. There are no settings. Simply, add the Screenr video URL in your content editor.
Version: 1.0.1
Author: Travis Pflanz
Author URI: http://travis.pflanz.me
License: GPL2
*/

wp_oembed_add_provider ('http://www.screenr.com/*', 'http://www.screenr.com/api/oembed.{format}', false );
?>