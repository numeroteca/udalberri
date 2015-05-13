<?php get_header(); ?>
	
<div id="main-content" class="row fix">
    <div class="wrapper">
        <div id="content" class="floatleft">
            <!--<div class="meta-nav fix">
                <span><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e('Inicio', 'alpona'); ?></a></span> &#187; <span> <?php the_title(); ?> </span>
            </div> --><!-- End navigation top -->
            <?php while(have_posts()): the_post(); ?>
            <?php get_template_part('content', 'page'); ?>
            <!-- End main content if have any -->
            <?php endwhile; ?> <!-- End query -->
            
                <?php // comments_template( '', true ); ?>
            
            <!-- End comment box -->
        </div> <!-- End content -->
        <?php get_sidebar(); ?>
    </div> <!-- End wrapper -->
</div> <!-- End Main content -->
       
<?php get_footer(); ?>
