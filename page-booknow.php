<?php
   /*
    Template Name: Book Now
   */

   $book_now_background= get_field("book_now_background");
?>

<?php get_header(); ?>

<div class="booknow-page">

  <div class="section pattern-background" id="scroll-to-section">

    <h1>Book Now</h1>

    <div class="grid contact-grid">
      <div class="col-6_md-12">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
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
