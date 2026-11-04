<?php get_header();?>

<!-- ************************************************************* -->

<?php if (have_posts()) : ?> 
		<h2 class="pagetitle">Výsledky hledání</h2>
        
        <div class="navigation">
<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
            <div style="clear:both;"></div>
        </div>
        
	<?php while (have_posts()) : the_post(); ?>
    
        	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<!-- ************************************************ -->
		
			<div class="story">
				<div class="story_title">
                	<div class="title_bg">
                    	<div class="title_top">
                        	<div class="title_bottom">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <div class="story_category"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_bullet.gif" alt="" /> Uloženo v : <?php the_category(',') ?>, napsal <?php the_author(); ?></div>
                                <div class="story_date"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/date_bullet.gif" alt="" /> <?php the_time('d.m.Y'); ?></div>
                                <div style="clear:both;"></div>
                          	</div>
                    	</div>
                   	</div>
               	</div>
                
				<div class="storyContent"><?php the_excerpt(); ?></div>
                
				<div class="postmeta">
                	<div class="postmeta_top">
                    	<div class="postmeta_bottom">
                            <p class="story_tags"><?php the_tags('<img src="'.get_bloginfo("stylesheet_directory").'/images/tag_bullet.gif" alt="" />&nbsp; Tags : ', ', ', '<br />'); ?></p>
                            <p class="read_more"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/bullet2.gif" alt="" />&nbsp; <a href="<?php the_permalink(); ?>">Čti více...</a></p>
                            <div style="clear:both;"></div>
              			</div>
                    </div>
                </div>
                
			</div><!-- close story -->
			
		<!-- ************************************************ -->
		
		</div><!-- close postid-->
        
	<?php endwhile; ?>
    
    <div class="navigation">
<?php if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif; ?>
        <div style="clear:both;"></div>
    </div>

<?php else: ?>

        <h2 class="error">No posts found. Try a different search?</h2>
        <?php get_search_form(); ?>
    
<?php endif; ?>

<!-- ************************************************************* -->
		</div>
    </div>
    <div class="content_bottom"></div>
</div>
                    
<?php get_sidebar();?>
<?php get_footer(); ?>