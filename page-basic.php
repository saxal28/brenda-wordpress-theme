<?php
   /*
    Template Name: Basic
   */

   $contact_background = get_field("gallery_background");
?>

<?php get_header(); ?>

<div class="character-page">

    <div class="hero" style="background:url(<?php echo $gallery_background?>)" id="hero">
      <h1><?php echo get_the_title( $ID ); ?></h1>
      <div class="scroll-toggle">
         <i class="fa fa-arrow-down"></i>
      </div>
    </div>

    <div class="section pattern-background">

      <div class="content-container" id="scroll-to-section" >

        <!-- get custom post type of character -->
        <?php $loop = new WP_Query(array(
          'post_type' => "character",
          'orderby' => 'post_id',
          'order' => 'ASC')); ?>

        <?php while ( $loop -> have_posts() ) : $loop -> the_post(); ?>

            <div class="character-card">

                <div class="card-header">
                  <img src="<?php the_field("character_image")?>" />
                  <h1><?php the_field("character_name")?></h1>
                </div>
                <p>
                  <?php the_field('character_description')?>
                </p>
            </div>

        <?php  endwhile; ?>

        <!-- end custom post type loop. -->

      </div>

    </div>

  </div>

</div>


<?php get_footer(); ?>
