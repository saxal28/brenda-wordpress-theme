<?php
   /*
    Template Name: Book Now
   */

   $book_now_background= get_field("book_now_background");
?>


<div class="booknow-page">

  <?php get_header(); ?>


  <!-- <div class="hero" style="background:url(<?php echo $book_now_background?>)">
    <h1>Book Now</h1>
  </div> -->

  <div class="grid grid-noGutter">
    <div class="col-12">
      <div class="card-col hero" style="background:url(<?php echo $book_now_background?>)" id="hero">
        <h1>Book Now</h1>
        <div class="content-container" id="calendar-plugin">

          <?php
            while ( have_posts() ) : the_post();

              get_template_part( 'template-parts/content', 'page' );

            endwhile; // End of the loop.
          ?>

        </div>
      </div>
    </div>
  </div>


</div>

  <?php get_footer(); ?>
