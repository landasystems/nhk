<?php global $data; ?>

<div class="page-content" id="blog-content"> 

<div class="container" id="page-bottom">
	
	<div class="grid16 col top-header">
	
		<h1 class="main-header-title blog-page"><?php the_title(); ?></h1>
		
		<?php if(!empty($data['tagline_blog'])) { ?>
		<p class="sub-port blog-sub-port"><?php echo $data['tagline_blog']; ?></p>
		<?php } ?>
	
	</div>
	
		<div class="blog-content-wrap">
	
			<div class="grid10 col" id="content-wrapper">
		
				<?php query_posts( array('post_type'=> 'post','paged'=>$paged )); ?>
				<?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?> 
        	
        			<?php get_template_part( 'content', get_post_format() ); ?>

        		<?php endwhile; ?><?php endif; ?>
    	
        	</div><!--END GRID 10-->  
    
        	<div class="grid4 col" id="right-sidebar">
        	
        		<div class="sidebar-inner">
		
        			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar 01') ) : ?><?php endif; ?>
		
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar 02') ) : ?><?php endif; ?>
					
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar 03') ) : ?><?php endif; ?>
					
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar 04') ) : ?><?php endif; ?>
					
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Right Sidebar 05') ) : ?><?php endif; ?>
				
				</div><!-- END SIDEBAR INNER -->

			</div><!-- END RIGHT SIDEBAR -->
			
		</div><!-- END BLOG CONTENT WRAP -->
		
		<div class="clear"></div>

		<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>

	</div><!-- END CONTAINER -->
	
</div><!-- END PAGE CONTENT -->