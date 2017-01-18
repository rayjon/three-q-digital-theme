<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package 3Q Digital
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( get_post_meta( get_the_ID(), 'hide_title' ) < 1 ) { ?>
		<header class="entry-header">
			<div class="wrap">
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</div>
		</header><!-- .entry-header -->
	<?php }; ?>

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'three_q_digital' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<div class="wrap">
	<?php edit_post_link( __( 'Edit', 'three_q_digital' ), '<footer><span class="edit-link">', '</span></footer>' ); ?>
	</div>
</article><!-- #post-## -->
