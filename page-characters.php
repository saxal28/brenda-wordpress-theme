<?php
   /*
    Template Name: Characters
   */

   $contact_background = get_field("gallery_background");
?>

<?php get_header(); ?>

<div class="character-page">

    <div class="" style="min-height: 100vh">

      <div class="grid grid-noGutter">

        <!-- get custom post type of character -->
        <?php $loop = new WP_Query(array(
          'post_type' => "character",
          'orderby' => 'post_id',
          'order' => 'ASC')); ?>

        <?php while ( $loop -> have_posts() ) : $loop -> the_post(); ?>

          <div class="col-4_md-6_sm-12">

            <div class="character-card" style="background:url(<?php the_field("character_image")?>)">

              <div class="overlay">
                <div class="character-content">
                    <h1><?php the_field("character_name")?></h1>
                </div>
              </div>

            </div>

          </div>


        <?php  endwhile; ?>

        <!-- end custom post type loop. -->

      </div>

    </div>

  </div>

</div>


<?php get_footer(); ?>
