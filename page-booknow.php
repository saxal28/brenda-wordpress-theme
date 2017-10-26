<?php
   /*
    Template Name: Book Now
   */
?>


<div class="container book-now-view">

  <?php get_header(); ?>

  <div class="grid_md-1 height_90">
    <div class="col booking-intro-col">

        <div class="section">
          <h1>Book A Party Now!</h1>
        </div>

        <div class="section image">
          image here
        </div>

    </div>
    <div class="col booking-col">

      <?php
        while ( have_posts() ) : the_post();

          get_template_part( 'template-parts/content', 'page' );

        endwhile; // End of the loop.
      ?>

    </div>
  </div>


</div>
