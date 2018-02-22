<?php
   /*
    Template Name: Pricing
   */

   $contact_title = get_field('contact_title');
   $contact_message = get_field('contact_message');

?>

<?php get_header(); ?>

<div class="contact-page">

    <div class="section pattern-background" id="scroll-to-section">

      <div class="grid contact-grid">
        <div class="col-6_md-12">
          <h1><?php the_title() ?></php></h1>
          <p><?php echo $contact_message?></p>
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
