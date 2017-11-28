<?php
   /*
    Template Name: Gallery
   */

   $contact_background = get_field("gallery_background");
?>

<?php get_header(); ?>

<div class="gallery-page">

  <div class="grid grid-noGutter">

    <div class="col-12">
      <div class="card-col hero transparent-color" style="background:url(<?php echo $gallery_background?>)" id="hero">
        <h1>Gallery</h1>
        <div class="scroll-toggle">
           <i class="fa fa-arrow-down"></i>
        </div>
      </div>
    </div>

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
