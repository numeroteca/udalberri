<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  
  <div class="clearfix">
    <div class="grid_2 alpha">
    </div>
    <div class="grid_8 omega">
      <a href="/candidatas">Volver a Candidatas</a>
      <h1 class="entry-title entry-title-single"><?php the_title(); ?></h1>
    </div>
  </div>
  
  <div class="entry-content clearfix">
  	<?php the_content(); ?>
  </div> <!-- end .entry-content -->
  
  <?php echo contango_link_pages(); ?>
  
  <div class="entry-meta-bottom">
  <?php echo contango_post_category() . contango_post_tags(); ?>
  </div><!-- .entry-meta -->

</article> <!-- end #post-<?php the_ID(); ?> .post_class -->

<?php contango_author(); ?> 

<?php comments_template( '', true ); ?>
