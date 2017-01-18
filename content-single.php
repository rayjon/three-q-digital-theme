<?php
/**
 * @package 3Q Digital
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">
		<?php if ( !is_singular() ) { ?>
			<h1 class="entry-title"><?php the_title(); ?></h1>
		<?php } ?>

		<div class="entry-meta hide-on-mobile">
			<div class="post-meta"><?php three_q_digital_posted_on(); ?></div>
			 <div class="sharing-buttons">
                <?php if ( function_exists( 'sharing_display' ) ) {
                    sharing_display( '', true );
                } ?>
            </div><!-- sharing-buttons -->
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->
	
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'three_q_digital' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	
	<div class="clear"></div>
	
	<section class="how-we-think-banner">
        <h1>Want to know more about our thought leadership?</h1>
        <p>Check out our <a href="http://3qdigital.com/how-we-think/">How-We-Think</a> page for more marketing insights.</p>
	</section>
	
	<footer class="entry-meta">
		<?php $author = get_the_author();		
		
		if ( '3Q Digital' != $author ) { ?>
			<div class="entry-author-info">
				<div class="alignleft author-avatar">
					<?php echo get_avatar( get_the_author_meta( 'user_email' )); ?>
				</div><!-- #author-avatar -->
				<div id="author-description">
					<?php the_author_meta( 'description' ); ?>
					<div id="author-link">
						<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
							<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
						</a>
					</div><!-- #author-link	-->
				</div><!-- #author-description -->
			</div><!-- #entry-author-info -->
		<?php } ?>
		
		<div class="post-meta"><?php three_q_digital_posted_on(); ?></div>
			
			<div class="sharing-buttons">
                 <?php if ( function_exists( 'sharing_display' ) ) {
                    sharing_display( '', true );
                } ?>

            </div>
	</footer><!-- .entry-meta -->
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'three_q_digital' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'three_q_digital' ) );

			if ( ! three_q_digital_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'three_q_digital' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'three_q_digital' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'three_q_digital' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'three_q_digital' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink(),
				the_title_attribute( 'echo=0' )
			);
		?>

		<?php edit_post_link( __( 'Edit', 'three_q_digital' ), '<span class="edit-link">', '</span>' ); ?>
	
</article><!-- #post-## -->
