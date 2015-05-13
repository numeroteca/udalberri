<article id="post-<?php the_ID(); ?>" <?php if(is_sticky()){ $featured = 'featured main-post'; } else { $featured = 'main-post main-bg'; } post_class($featured); ?>>
    <?php if ( is_page(1087) ){ //is home
    		//do nothing
    		} else if (is_single() || is_page() ){ ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php }else{ ?>
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php } ?>
    <!-- End title here -->
    
    <?php
    if ( has_post_thumbnail() ) {
		the_post_thumbnail( 'full', array( 'class' => 'img-responsive img-circle img-thumbnail' ) );
	}
    ?>
    <!-- End thumbnail here if have any -->
    
    <?php
    if(is_single() || is_page()) {
        the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'alpona' ) );
		/* posts pagination */
		wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'alpona' ), 'after' => '</div>' ) );
    } else { 
        the_excerpt();
    }
    ?>
    
</article> <!-- End article -->
