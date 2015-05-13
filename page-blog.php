<?php /* Template Name: Blog page */ get_header(); ?>
	
<div id="main-content" class="row fix">
    <div class="wrapper">
        <div id="content" class="floatleft">
      		<?php
						global $more;    // Declare global $more (before the loop). "para que seguir leyendo funcione"
							//mirar codigo madre en http://www.hashbangcode.com/blog/create-page-posts-wordpress-417.html
							$args = array(
								'ignore_sticky_posts' => 1,
								'posts_per_page'=>	15
								);
							if ( $paged > 1 ) {
							 $args['paged'] = $paged;
								}
							$wp_query = new WP_Query($args);
							$wp_count = $wp_query->post_count; //The number of posts being displayed
						?>
            <?php if ($wp_query->have_posts() ) : while ( $wp_query->have_posts()) : $wp_query->the_post();	?>
            <?php get_template_part('content', get_post_format()); ?>
            <!-- End main content if have any -->
            <?php endwhile; ?>
            
			<ul class="pagination">
				<?php alpona_pagenavi(); ?>
			</ul>
            <!-- End pagination -->
            
            <?php else: ?>
            <?php get_template_part('content', 'none'); ?>
            <!-- End Blank content if not have any post -->
            
            <?php endif; ?>
        </div> <!-- End content -->
        <?php get_sidebar(); ?>
    </div> <!-- End wrapper -->
</div> <!-- End Main content -->
       
<?php get_footer(); ?>
