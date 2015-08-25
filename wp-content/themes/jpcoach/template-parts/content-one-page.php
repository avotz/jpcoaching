<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package jpcoach
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<?php /*echo get_post_meta($post->ID, 'subtitulo', true); */?>
		<?php the_content(); ?>

		<?php if ( $post->ID == 15 ) //contact
  		{?>
  			<div class="inner">
  				<?php /*get_template_part('template-parts/contact-social');*/ ?>
  			</div>
  			
		
		<?php } ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jpcoach' ),
				'after'  => '</div>',
			) );
		?>
	

</article><!-- #post-## -->

