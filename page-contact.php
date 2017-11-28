<?php
   /*
    Template Name: Contact
   */

   $contact_background = get_field("contact_background");
?>

<?php get_header(); ?>

<div class="contact-page">

    <div class="hero" style="background:url(<?php echo $contact_background?>)" id="hero">
      <h1>Contact Us</h1>
      <div class="scroll-toggle">
         <i class="fa fa-arrow-down"></i>
      </div>
    </div>

    <div class="section pattern-background" id="scroll-to-section">

      <h1>Send Us A Message</h1>

      <div class="grid contact-grid">
        <div class="col-6_md-12">
          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
        </div>
        <div class="col-6_md-12">
          <?php
            while (have_posts()) : the_post();

              get_template_part('template-parts/content', 'page');

            endwhile; // End of the loop.
          ?>
        </div>

      </div>

    </div>
</div>


<?php get_footer(); ?>
