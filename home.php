<?php get_header(); ?>

<section class="gemm-home-container">
  <div class="container">

    <h1 class="text-center gemm-page-entry-title">Blog</h1>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <div class="gemm-home-posts row">
          <div class="col-md-3"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
          <div class="col-md-9">
            <div class="gemm-front-posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
            <div class="gemm-front-posts-meta"><?php echo get_the_date(); ?> | <?php the_category( ' | '); ?></div>
            <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
            <a class="wwd-learn-more-link" href="<?php the_permalink(); ?>"><div class="wwd-learn-more text-center">Read More</div></a>
          </div>
      </div>

    <?php endwhile; else : ?>
      <hr class="wwd-check-later">
        <p class="text-center wwd-check-later"><?php _e( 'Check back later for more information on upcoming camps!' ); ?></p>
      <hr class="wwd-check-later">
    <?php endif; ?>

  </div> <!-- container -->
</section>

<?php get_footer(); ?>
