<?php
   /*
    Template Name: Gallery
   */

   $contact_background = get_field("gallery_background");
?>

<?php get_header(); ?>

<div class="gallery-page">

  <div class="grid grid-noGutter">

    <div class="col-12 section pattern-background">
      <div class="div" id="scroll-to-section" >
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
