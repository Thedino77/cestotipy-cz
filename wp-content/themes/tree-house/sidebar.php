<div class="sidebar">
	<div class="side_top"></div>
	<div class="sidebar_top">
        	<div class="sidebar_bg">
    
 <!-- Sidebar List ************************************************************* -->
    
                    <ul>
                    	
						<?php 	/* Widgetized sidebar, if you have the plugin installed. */
                        if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar') ) : ?>
                        
                         <!-- ************************************************************* -->
                                <li>
                                	
                                        <h3><?php _e('Recent Entries'); ?></h3>
                                        <ul>
                                            <?php $recent = new WP_Query("showposts=6"); while($recent->have_posts()) : $recent->the_post();?>
                                            <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                       
                                </li>
                         <!-- ************************************************************* -->
                         		<li>
                                        <h3><?php _e('Categories'); ?></h3>
                                        <ul><?php wp_list_categories('title_li'); ?></ul>
                                </li>
                         <!-- ************************************************************* -->
                                <li>
                                        <h3><?php _e('<span>browse</span> Popular Tags'); ?></h3>
                                        <?php wp_tag_cloud('smallest=10&largest=22&number=30'); ?>
                                </li>
                         <!-- ************************************************************* -->
                         		<li>
                                	
                                        <h3><?php _e('Meta'); ?></h3>
                                        <ul>
										 <?php wp_register(); ?>
                                            <li><?php wp_loginout(); ?></li>
                                            <li><a href="<?php bloginfo('rss2_url'); ?>">Entries RSS</a></li>
                                            <li><a href="<?php bloginfo('comments_rss2_url'); ?>">Comments RSS</a></li>
                                            <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid 
                                              <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
                                            <li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
                                            <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
                                         <?php wp_meta(); ?>
                                        </ul>
                                       
                                </li>
                         <!-- ************************************************************* -->
                         
                        <?php endif; ?>
                    </ul>
<h3>Kupte si zájezd, letenku, hotel a podpořte správu těchto stránek</h3>                    
<iframe src="//aff.dovolena.cz/campaign/autoterm_iframe?cid=16990" height="250" width="250" frameborder="0" scrolling="no"></iframe>

<font color=white>
<?php if (function_exists('sociable_html')) {
    echo sociable_html();
} ?> 
</font>
</center>
<!-- Close Sidebar List ************************************************************* -->
			</div>
    </div>
    <div class="sidebar_bottom"><div class="side_bottom"></div></div>
</div>
