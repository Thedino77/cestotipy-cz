<?php
/*
Plugin Name: České a slovenské linkovací služby
Plugin URI: http://www.separatista.net/wordpress/pluginy/ceske-a-slovenske-linkovaci-sluzby-jako-samostatny-plugin-ve-wordpressu
Description: České a slovenské linkovací služby (Linkuj.cz, Jagg.cz, MediaBlog.cz, TOPodkazy.cz, Bookmarky.cz, Mojelinky.sk, vybrali.sme.sk, Pozrisi.sk, Park.sk, TextTip.eu, Top Články.cz a Blogus.cz) jako doplněk pluginu <a href="http://yoast.com/wordpress/sociable/">Sociable</a>.
Version: 0.3
Author: Separatista
Author URI: http://www.separatista.net
*/

function czsk_sociable_sites($known_sites) {
	$inpath = WP_CONTENT_URL.'/plugins/'.plugin_basename(dirname(__FILE__)).'/images/';
	$known_sites['Linkuj.cz'] = array(
    'favicon' => $inpath.'linkuj.png',
    'url' => 'http://linkuj.cz/?id=linkuj&amp;url=PERMALINK&amp;title=TITLE',
    'description' => 'Linkuj.cz!',
  );
	$known_sites['Jagg.cz'] = array(
    'favicon' => $inpath.'jagg.png',
    'url' => 'http://www.jagg.cz/bookmarks.php?action=add&amp;address=PERMALINK&amp;title=TITLE',
    'description' => 'Jaggni to!',
  );
	$known_sites['Bookmarky.cz'] = array(
    'favicon' => $inpath.'bookmarky.png',
    'url' => 'http://www.bookmarky.cz/a.php?cmd=add&amp;url=PERMALINK&amp;title=TITLE',
  );
	$known_sites['TOPodkazy.cz'] = array(
    'favicon' => $inpath.'topodkazy.png',
    'url' => 'http://www.topodkazy.cz/submit.php?url=PERMALINK&amp;title=TITLE',
  );
	$known_sites['MediaBlog.cz'] = array(
    'favicon' => $inpath.'mediablog.png',
    'url' => 'http://www.mediablog.cz/submit.php?url=PERMALINK&amp;title=TITLE',
  );
	$known_sites['MojeLinky.sk'] = array(
    'favicon' => $inpath.'mojelinky.png',
    'url' => 'http://www.mojelinky.sk/bookmarks.php?action=add&amp;address=PERMALINK&amp;title=TITLE',
  );
	$known_sites['vybrali.sme.sk'] = array(
    'favicon' => $inpath.'vybrali.sme.png',
    'url' => 'http://vybrali.sme.sk/submit.php?url=PERMALINK',
  );
  $known_sites['Park.sk'] = array(
    'favicon' => $inpath.'park.png',
    'url' => 'http://www.park.sk/dig_add.php?url=PERMALINK&amp;title=TITLE',
  );
  $known_sites['Pozrisi.sk'] = array(
    'favicon' => $inpath.'pozrisi.png',
    'url' => 'http://pozrisi.sk/s?link=PERMALINK&amp;title=TITLE',
  );
  $known_sites['TextTip.eu'] = array(
    'favicon' => $inpath.'texttip.png',
    'url' => 'http://www.texttip.eu/submit.php?url=PERMALINK',
  );
  $known_sites['TopČlánky.cz'] = array(
    'favicon' => $inpath.'topclanky.png',
    'url' => 'http://www.topclanky.cz/pridat?url=PERMALINK&amp;title=TITLE',
    'description' => 'Top Články.cz',
  );
  $known_sites['Blogus.cz'] = array(
    'favicon' => $inpath.'blogus.png',
    'url' => 'http://www.blogus.cz/node/add/drigg?url=PERMALINK&amp;title=TITLE',
  );
  return $known_sites;
}
add_filter('sociable_known_sites','czsk_sociable_sites');
?>