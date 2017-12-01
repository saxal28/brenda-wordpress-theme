<?php
   /*
    Template Name: Book Now
   */

   $book_now_instructions = get_field("book_now_instructions");
?>

<?php get_header(); ?>

<div class="booknow-page">

  <div class="section pattern-background" id="scroll-to-section">

    <div class="grid contact-grid">
      <div class="col-6_md-12">
        <h1>Book Now</h1>
        <p><?php echo $book_now_instructions?></p>
      </div>
      <div class="col-6_md-12">
        <div class="" id="calendar-plugin">

          <?php
            while (have_posts()) : the_post();

              get_template_part('template-parts/content', 'page');

            endwhile; // End of the loop.
          ?>

        </div>
      </div>

    </div>

  </div>

</div>

  <?php get_footer(); ?>
