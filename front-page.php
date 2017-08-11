<?php get_header(); ?>

<div class="container">
  <section id="gemm-front-header-image" class="">
      <?php $query = new WP_Query( array( 'pagename' => 'home' ) ); ?>

      <?php if ( $query->have_posts() ) : while ( have_posts() ) : the_post(); ?>

              <div class="gemm-homepage-welcome-msg">
                <div class="gemm-homepage-welcome-msg text-center">
                  <h1>French Language Opportunities for Children and Adults<br>
                    It’s a small world...Shouldn’t we all speak a second language?</h1>
                </div>
                <div class="gemm-homepage-welcome-msg-featured-img text-center col-sm-10 col-sm-offset-1"><?php the_post_thumbnail(); ?></div>
              </div> <!--.rb-homepage-welcome-msg -->

      <?php endwhile; else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
      <?php endif; wp_reset_postdata(); ?>
  </section>
  <section id="wwd-classes-section" class="wwd-classes">

        <h2 class="text-center header-section-handwriting">Classes</h2>

        <?php $query = new WP_Query( array(
          'post_type' => 'wwd_events_classes'
         ) ); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="container">
                <div class="gemm-front-posts row">
                    <div class="col-md-3"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <div class="col-md-9">
                      <div class="gemm-front-posts-title"><h2 class="header-handwriting"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_dates'); ?></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_location'); ?></div>
                      <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
                      <a class="wwd-learn-more-link" href="<?php the_permalink(); ?>"><div class="wwd-learn-more text-center">Learn More</div></a>
                    </div>
                </div>
          </div> <!-- container -->


        <?php endwhile; else : ?>
          <hr class="wwd-check-later">
            <p class="text-center wwd-check-later"><?php _e( 'Check back later for more information on upcoming classes!' ); ?></p>
          <hr class="wwd-check-later">
        <?php endif; wp_reset_postdata(); ?>

  </section>
  <section id="wwd-day-trips" class="wwd-day-trips">

        <h2 class="text-center header-section-handwriting">Day Trips</h2>

        <?php $query = new WP_Query( array(
          'post_type' => 'wwd_day_trips'
         ) ); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="container">
                <div class="gemm-front-posts row">
                    <div class="col-md-3"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <div class="col-md-9">
                      <div class="gemm-front-posts-title"><h2 class="header-handwriting"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_dates'); ?></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_location'); ?></div>
                      <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
                      <a class="wwd-learn-more-link" href="<?php the_permalink(); ?>"><div class="wwd-learn-more text-center">Learn More</div></a>
                    </div>
                </div>
          </div> <!-- container -->


        <?php endwhile; else : ?>
          <hr class="wwd-check-later">
            <p class="text-center wwd-check-later"><?php _e( 'Check back later for more information on upcoming Day Trips!' ); ?></p>
          <hr class="wwd-check-later">
        <?php endif; wp_reset_postdata(); ?>

  </section>
  <section id="wwd-educational-trvl" class="wwd-educational-trvl">

        <h2 class="text-center header-section-handwriting">Educational Travel</h2>

        <?php $query = new WP_Query( array(
          'post_type' => 'wwd_educational_trvl'
         ) ); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="container">
                <div class="gemm-front-posts row">
                    <div class="col-md-3"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <div class="col-md-9">
                      <div class="gemm-front-posts-title"><h2 class="header-handwriting"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_dates'); ?></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_location'); ?></div>
                      <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
                      <a class="wwd-learn-more-link" href="<?php the_permalink(); ?>"><div class="wwd-learn-more text-center">Learn More</div></a>
                    </div>
                </div>
          </div> <!-- container -->


        <?php endwhile; else : ?>
          <hr class="wwd-check-later">
            <p class="text-center wwd-check-later"><?php _e( 'Check back later for more information on upcoming Educational Travel!' ); ?></p>
          <hr class="wwd-check-later">
        <?php endif; wp_reset_postdata(); ?>

  </section>
  <section id="wwd-camps" class="wwd-camps">

        <h2 class="text-center header-section-handwriting">Classes</h2>

        <?php $query = new WP_Query( array(
          'post_type' => 'wwd_camps'
         ) ); ?>

        <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

          <div class="container">
                <div class="gemm-front-posts row">
                    <div class="col-md-3"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                    <div class="col-md-9">
                      <div class="gemm-front-posts-title"><h2 class="header-handwriting"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_dates'); ?></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_location'); ?></div>
                      <div class="gemm-front-posts-meta"><?php the_field('wwd_grade_level'); ?></div>
                      <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
                      <a class="wwd-learn-more-link" href="<?php the_permalink(); ?>"><div class="wwd-learn-more text-center">Learn More</div></a>
                    </div>
                </div>
          </div> <!-- container -->


        <?php endwhile; else : ?>
          <hr class="wwd-check-later">
            <p class="text-center wwd-check-later"><?php _e( 'Check back later for more information on upcoming camps!' ); ?></p>
          <hr class="wwd-check-later">
        <?php endif; wp_reset_postdata(); ?>

  </section>
  <section id="wwd-content">
    <div class="col-md-12 gemm-front-page-content text-center">
      <?php the_content(); ?>
    </div>
  </section>
</div><!-- .container -->



<?php get_footer(); ?>
