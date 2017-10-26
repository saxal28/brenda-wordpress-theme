<?php
   /*
    Template Name: Home
   */

   //ADVANCED CUSTOM FIELDS
   $hero_background = get_field("header_image");
   $hero_title = get_field("header_title");

   $section_3_title = get_field("section_3_title");
   $section_3_text = get_field("section_3_text");
   $section_3_background = get_field("section_3_background");
   $button_1_text = get_field("button_1_text");
   $button_1_link = get_field("button_1_link");
   $button_2_text = get_field("button_2_text");
   $button_2_link = get_field("button_2_link");

   $section_2_background = get_field("section_2_background");

   $square_link_1_title = get_field("square_link_1_title");
   $square_link_1_background = get_field("square_link_1_background");
   $square_link_1_body = get_field("square_link_1_body");

   $square_link_2_title = get_field("square_link_2_title");
   $square_link_2_background = get_field("square_link_2_background");
   $square_link_2_body = get_field("square_link_2_body");

   $square_link_3_title = get_field("square_link_3_title");
   $square_link_3_background = get_field("square_link_3_background");
   $square_link_3_body = get_field("square_link_3_body");

   $square_link_4_title = get_field("square_link_4_title");
   $square_link_4_background = get_field("square_link_4_background");
   $square_link_4_body = get_field("square_link_4_body");

?>




  <!-- header -->

 <div class="container">

   <?php get_header(); ?>

   <section class="hero height_60" style="background-image:url(<?php echo $hero_background?>)">

     <h1><?php echo $hero_title?></h1>

     <div class="button-row bottom">
       <button>Gallery</button>
       <button>Book Now</button>
     </div>

   </section>

   <div class="content-container">

     <div class="grid_sm-1 grid-noGutter">

       <div class="col">
         <div class="card" style="background-image:url(<?php echo $square_link_1_background?>)">
             <h2><?php echo $square_link_1_title?></h2>
             <!-- <p><?php echo $square_link_1_body?></p> -->
         </div>
       </div>
       <div class="col">
         <div class="card" style="background-image:url(<?php echo $square_link_2_background?>)">
             <h2><?php echo $square_link_2_title?></h2>
             <!-- <p><?php echo $square_link_2_body?></p> -->
         </div>
       </div>

       <div class="col">
         <div class="card" style="background-image:url(<?php echo $square_link_3_background?>)">
             <h2><?php echo $square_link_3_title?></h2>
             <!-- <p><?php echo $square_link_3_body?></p> -->
         </div>
       </div>
       <div class="col">
         <div class="card" style="background-image:url(<?php echo $square_link_4_background?>)">
             <h2><?php echo $square_link_4_title?></h2>
             <!-- <p><?php echo $square_link_4_body?></p> -->
         </div>
       </div>
     </div>

     <div class="hero height_60" style="background:url(<?php echo $section_3_background?>)">

       <h2><?php echo $section_3_title ?></h2>
       <!-- <p><?php echo $section_3_text ?></p> -->

       <div class="button-row bottom">
           <button><?php echo $button_1_text ?></button>
           <button><?php echo $button_2_text ?></button>
       </div>

     </div>

   </div>

 </div>



<?php
get_footer();
?>
