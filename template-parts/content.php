<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package GEMM_Framework
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header text-center">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="text-center gemm-post-featured-img col-md-12"><?php the_post_thumbnail(); ?></div>
		<?php
		if ( 'post' === get_post_type() ) : ?>
		<div class="gemm-front-posts-meta-single text-center">
			<div class="gemm-front-posts-meta"><?php gemm_framework_posted_on(); ?></div>
		</div><!-- .entry-meta -->
		<?php
		endif;
		?>

		<div class="gemm-front-posts-meta-single text-center">
			<div class="gemm-front-posts-meta"><?php the_field('wwd_dates'); ?></div>
			<div class="gemm-front-posts-meta"><?php the_field('wwd_location'); ?></div>
			<div class="gemm-front-posts-meta"><?php the_field('wwd_grade_level'); ?></div>
			<div class="gemm-front-posts-meta"><?php the_field('wwd_time'); ?></div>
		</div>

		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'gemm-framework' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gemm-framework' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php gemm_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
