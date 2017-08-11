<?php
/* Template Name: Camps Template */

get_header(); ?>

<div id="primary" class="content-area container">
  <main id="main" class="site-main" role="main">

    <header class="entry-header">
  		<?php the_title( '<h1 class="entry-title gemm-page-entry-title text-center">', '</h1>' ); ?>
  	</header><!-- .entry-header -->

    <?php $query = new WP_Query( array(
      'post_type' => 'wwd_camps'
     ) ); ?>

     <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>


             <div class="gemm-front-posts row">
                 <div class="col-md-3"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></div>
                 <div class="col-md-9">
                   <div class="gemm-front-posts-title"><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2></div>
                   <div class="gemm-front-posts-meta"><?php the_field('wwd_dates'); ?></div>
                   <div class="gemm-front-posts-meta"><?php the_field('wwd_location'); ?></div>
                   <div class="gemm-front-posts-meta"><?php the_field('wwd_grade_level'); ?></div>
                   <div class="gemm-front-posts-meta"><?php the_field('wwd_time'); ?></div>
                   <div class="gemm-front-posts-excerpt"><?php the_excerpt(); ?></div>
                   <a class="wwd-learn-more-link" href="<?php the_permalink(); ?>"><div class="wwd-learn-more text-center">Learn More</div></a>
                 </div>
             </div>


     <?php endwhile; else : ?>
       <hr class="wwd-check-later">
         <p class="text-center wwd-check-later"><?php _e( 'Check back later for more information on upcoming camps!' ); ?></p>
       <hr class="wwd-check-later">
     <?php endif; ?>

   </main><!-- #main -->
 </div><!-- #primary -->

 <?php get_footer(); ?>
