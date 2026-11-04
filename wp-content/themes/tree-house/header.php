<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title><?php wp_title(' '); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 

<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/dhtml.js"></script>
<!--[if IE 6]>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/DD_belatedPNG.js"></script>
<script>

  /* EXAMPLE */

  DD_belatedPNG.fix('div,img,ul,li');

  /* string argument can be any CSS selector */

  /* .png_bg example is unnecessary */

  /* change it to what suits you! */

</script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div class="main_outer">
<div class="main_green">
<div id="main">
	<a name="top"></a>
	<div class="header">
    	<div class="header_top">
            <div class="header_left">
                <div class="title">
                    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('title'); ?></a></h1>
                    <h3><?php bloginfo('description'); ?></h3>
                </div>
            </div>
            <div class="header_right">
            	<div class="header_search">
                	<form action="<?php bloginfo('url'); ?>" method="get">
                        <input class="search_text" type="text" name="s" value="" onfocus="this.value=(this.value=='') ? '' : this.value;" onblur="this.value=(this.value=='') ? '' : this.value;" />
                        <input class="search_btn" type="submit" value="Go" />
                        <div style="clear:both"></div>
                     </form>
            	</div>
                <div style="clear:both;"></div>
            	<p>Díky za navštěvu našeho cestovatelského webu použijte náš <a href="<?php bloginfo('rss2_url'); ?>">RSS feed</a><br /> a budete informováni o posledních cestovatelsých tipech.

</p>
<a href="https://www.dovolena.cz/?utm_source=affil&utm_medium=banner&utm_campaign=mate_uz_dovolenou&cid=16991">
        <img src="https://image.dovolena.cz/affiliate/banners/D_kreativni-kampan_300x100_remarketing.jpg" width="270">
    </a>

            </div>

            <div style="clear:both;"></div>
      	</div>
        
        <div class="nav">
            <ul id="nav">
                <li><a href="<?php bloginfo('url'); ?>">Domů</a></li>
                <?php wp_list_pages('title_li='); ?>
		            </ul>
            <div style="clear:both;"></div>
        </div>
        <div class="nav_bottom"></div>
	</div><!-- header ends -->
    
    <div class="main_content">
        <div class="main_left">
        	<div class="content_top">
            	<div class="content_bg">