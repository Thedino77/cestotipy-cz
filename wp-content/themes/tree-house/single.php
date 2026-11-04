<?php get_header();?>

<!-- ************************************************************* -->

<?php
if (have_posts()) :

	while (have_posts()) : the_post();
	
		//include (TEMPLATEPATH . "/inner_content.php"); ?>
        
		<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		
		<!-- ************************************************ -->
		
			<div class="story">
				<div class="story_title">
                	<div class="title_bg">
                    	<div class="title_top">
                        	<div class="title_bottom">
								<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
                                <div class="story_category"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cat_bullet.gif" alt="" /> Uloženo v : <?php the_category(',') ?> napsal <?php the_author(); ?></div>
                                <div class="story_date"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/date_bullet.gif" alt="" /> <?php the_date('M.j,Y'); ?></div>
                                <div style="clear:both;"></div>
                          	</div>
                    	</div>
                   	</div>
               	</div>
				
				<div class="storyContent">
					<?php the_content(); ?>
					<div style="clear:both;"></div>
<div align="right">
<br>
<?php
$link = get_post_meta($post->ID, 'syndication_permalink', true);
if ($link){
echo 'Přečtěte si <a href="'.$link.'" target="_blank" rel="nofollow">celý článek zde</a>.';
}
?>
</div>
				</div>
                
                <?php if(has_tag()) { ?>
                <div class="postmeta">
                	<div class="postmeta_top">
                    	<div class="postmeta_bottom">
                            <p class="story_tags"><?php the_tags('<img src="'.get_bloginfo("stylesheet_directory").'/images/tag_bullet.gif" alt="" />&nbsp; Tags : ', ', ', '<br />'); ?></p>
                            <p class="read_more"></p>
                            <div style="clear:both;"></div>
              			</div>
                    </div>
                </div>
                <?php } ?>
                
                <p>&nbsp;</p>
                <p>
                <?php if ( comments_open() && pings_open() ) {
					// Both Comments and Pings are open ?>
					Můžete <a href="#respond">zanechat komentář</a>, nebo <a href="<?php trackback_url(); ?>" rel="trackback">link</a> z vašich stránek.

				<?php } elseif ( !comments_open() && pings_open() ) {
					// Only Pings are Open ?>
					Komentáře nejsou povoleny ale můžete zanechat <a href="<?php trackback_url(); ?> " rel="trackback">link</a> z vašich stránek.

				<?php } elseif ( comments_open() && !pings_open() ) {
					// Comments are open, Pings are not ?>
					You can skip to the end and leave a response. Pinging is currently not allowed.

				<?php } elseif ( !comments_open() && !pings_open() ) {
					// Neither Comments, nor Pings are open ?>
					Both comments and pings are currently closed.

				<?php } edit_post_link('Edit this entry','','.'); ?>
                </p>
                <div class="comment_template"><?php comments_template(); ?></div>
                
			</div><!-- close story -->
			
		<!-- ************************************************ -->
		
		</div><!-- close postid-->
        
        
	<?php endwhile; else: ?>

	<p class="error"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    
<?php endif; ?>
            
<!-- ************************************************************* -->
		</div>
    </div>
    <div class="content_bottom"></div>
</div>
<?php get_sidebar();?>
<?php get_footer(); ?>