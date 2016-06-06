<?php get_header(); ?>

		<?php
		 $page = $wp_query->post;
		 $parent_name = $wpdb->get_var("SELECT post_name FROM $wpdb->posts WHERE ID = '$page->post_parent;'");
		?>
		
			<div id="page_w">
            
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
                    <article class="post" id="post-<?php the_ID(); ?>">
            
                        <div class="entry">
                    

                            
                            
                            
                            <?php the_content(); ?>
            
            				<div class="cl"></div>
                        </div>
            
            
                    </article>
                    
        
                <?php endwhile; endif; ?>
            
            </div>

<?php get_footer(); ?>
