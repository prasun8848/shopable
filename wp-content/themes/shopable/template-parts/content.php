<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package shopable
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="post-image">
<?php shopable_post_thumbnail(); ?>
</div>
<div class="post-content">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				shopable_posted_on();
				shopable_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	

	<div class="entry-content">
		<?php

		if (is_single())
		{
			the_content(
	
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'shopable' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
			);

				}else{
					echo wp_trim_words(get_the_content(), 40, '...');

				}

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shopable' ),
				'after'  => '</div>',
			)
		);
		?>
		</div>
			<footer class="entry-footer">
		<?php shopable_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
