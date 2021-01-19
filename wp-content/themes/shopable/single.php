<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package shopable
 */

get_header();
?>
<div class="custom-header header-media">

<?php shopable_post_thumbnail(); ?>

<div class="entry-header">
<h1 class="entry-title"><?php the_title(); ?></h1>

<?php echo do_shortcode( '[catch-breadcrumb]' );?>
</div>

</div>
<main id="primary" class="site-main">
	<div class="wrapper">
		<div class="site-div">
			<div class="content-area">
				<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'shopable' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'shopable' ) . '</span> <span class="nav-title">%title</span>',
				)
			);

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
			</div>
			<aside class="widget-area sidebar">
				<?php get_sidebar();?>
			</aside>
	</div>
	</div>
</main><!-- #main -->

<?php

get_footer();