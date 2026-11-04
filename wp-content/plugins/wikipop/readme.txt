=== Plugin Name ===
Contributors: Matthew Healy
Donate link: http://www.matthewhealy.net/
Tags: wikipedia, wiki, links, fancyzoom, jquery, ajax
Requires at least: 2.0.2
Tested up to: 2.8
Stable tag: 2.0

Allows inline viewing of wikipedia articles for a tagged term.

== Description ==

Wikipop is a WordPress plugin born from the desire to make witty references to obscure subjects in my blog posts - ones that might require a Wikipedia link to make any sense - without totally interrupting the flow of the post. The plugin adds a button to the WordPress visual editor that lets you create a link to Wikipedia from any text. Rather than leaving your site or opening the article in a new window, the link opens in a transient window on the same page. Basically it's like the difference between reading a footnote and an endnote.
- - -
To learn more, visit http://www.matthewhealy.net/wikipop-for-wordpress
- - -
Uses FancyZoom for jQuery by Steve Smith at http://orderedlist.com/

== Installation ==

Installation is a snap. Just follow these steps:

1. Download and unzip the plugin.
2. Upload the entire wikipop folder to your /wp-content/plugins folder.
3. Log into Wordpress as an administrator, and activate Wikipop in your Plugins pane.

== Usage ==

The basic usage is simple. When you want to link a word or phrase to its Wikipedia article, just select it and click the Wikipop button in the WordPress visual editor's toolbar. Set the name of the Wikipedia article you want to display (if different from the text you're linking), and choose which Wikipedia language to search. Click insert. This will wrap your selection in the wikipop shortcode tag.

You can also manually type in the shortcode tag like this:

	[wikipop]heterochromia[/wikipop]

If you want to link to an article whose name is different from the word or phrase you're linking, you can do it like this:

	[wikipop search="John Ratzenberger"]Cliff Clavin[/wikipop]
	
If you want to search a Wikipedia language other than English, do it like this:

	[wikipop language="fr"]Pamplemousse[/wikipop]
	
== Changelog ==

= 2.0 =
* Added a popup window in the visual editor to set options for your link.
* Added support for many Wikipedia languages other than English.
* Resolved conflicts with a number of other Wordpress plugins that use jQuery.

= 1.0 =
* Initial release.
