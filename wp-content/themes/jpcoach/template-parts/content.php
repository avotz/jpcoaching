<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jpcoach
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if (has_post_thumbnail()) :

			$id = get_post_thumbnail_id($post->ID);
			$big_url = wp_get_attachment_image_src($id, 'item-banner', true);
			$thumb_url = wp_get_attachment_image_src($id, 'large', true);
			?>
		
		<?php if (wp_is_mobile()) { ?>
			<figure class="post-banner blog-banner" style="background-image: url('<?php echo $thumb_url[0] ?>');">
			<?php if (!is_single()) : ?>
				<a href="<?php echo get_permalink() ?>"></a>
			
			<?php endif; ?>
		</figure>

		<?php 
			} else { ?>
					<figure class="post-banner blog-banner" style="background-image: url('<?php echo $big_url[0] ?>');">
						<?php if (!is_single()) : ?>
							<a href="<?php echo get_permalink() ?>"></a>
						
						<?php endif; ?>
					</figure>
					<?php 
			} ?>

		<?php endif; ?>
		
		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php jpcoach_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'jpcoach' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jpcoach' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php jpcoach_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
