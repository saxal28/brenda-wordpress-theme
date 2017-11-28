<?php

   /*
    Template Name: Home
   */

   //ADVANCED CUSTOM FIELDS

   //hero
   $hero_background = get_field("hero_background");
   $hero_title = get_field("hero_title");
   $hero_blend_mode = get_field("hero_blend_mode");
   $hero_background_color = get_field("hero_background-color");

   //section 2 - about
   $section_2_title = get_field("section_2_title");
   $section_2_body = get_field("section_2_body");

   //section 3 - gallery
   $section_3_title = get_field("section_3_title");
   $gallery_preview_1 = get_field("gallery_preview_1");
   $gallery_preview_2 = get_field("gallery_preview_2");
   $gallery_preview_3 = get_field("gallery_preview_3");
   $gallery_preview_4 = get_field("gallery_preview_4");
   $gallery_preview_5 = get_field("gallery_preview_5");
   $gallery_preview_6 = get_field("gallery_preview_6");

   //  section 4 - characters
   $section_4_title = get_field("section_4_title");
   $character_preview_1 = get_field("character_preview_1");
   $character_preview_2 = get_field("character_preview_2");
   $character_preview_3 = get_field("character_preview_3");

   //  section 5 - pitch
   $section_5_title = get_field("section_5_title");
   $section_5_body = get_field("section_5_body");

?>

  <!-- header -->

 <div class="home-page">

   <?php get_header(); ?>

     <!-- start section 1 = hero -->
     <!--  -->

       <div class="hero"  id="hero" style="background:url(<?php echo $hero_background?>); background-color: <?php echo $hero_background_color?> ; background-blend-mode:<?php echo $hero_blend_mode?>">

        <h1><?php echo $hero_title?></h1>

        <div class="scroll-toggle">
           <i class="fa fa-arrow-down"></i>
        </div>

         <div class="hero-logo">
           Happily Ever After STL
         </div>

       </div>

     <!-- end section 1 = hero -->

     <!-- start section 2 -->

         <div class="section pattern-background" id='scroll-to-section'>

           <h1><?php echo $section_2_title?></h1>
           <p><?php echo $section_2_body?></p>
           <div class="button-row dark">
             <button type="button" name="button">Read More</button>
             <button type="button" name="button">Visit Our Blog</button>
           </div>
         </div>

     <!-- end section 2 -->

     <!-- start section 3 -->


       <div class="section gallery-section">
            <h1>View Gallery</h1>
            <div class="gallery-preview-container grid grid-noGutter">

              <div class="col-4 gallery-preview-item" style="background:url(<?php echo $gallery_preview_1?>">

              </div>
              <div class="col-4 gallery-preview-item" style="background:url(<?php echo $gallery_preview_2?>">

              </div>
              <div class="col-4 gallery-preview-item" style="background:url(<?php echo $gallery_preview_3?>">

              </div>
              <div class="col-4 gallery-preview-item" style="background:url(<?php echo $gallery_preview_4?>">

              </div>
              <div class="col-4 gallery-preview-item" style="background:url(<?php echo $gallery_preview_5?>">

              </div>
              <div class="col-4 gallery-preview-item" style="background:url(<?php echo $gallery_preview_6?>">

              </div>
            </div>
         </div>


     <!-- end section 3 -->

     <!-- start section 4 -->

      <!-- //TODO maybe loop over all charcters? -->

       <div class="section pattern-background">
         <h1><?echo $section_4_title?></h1>
         <div class="card-row">

           <div class="card" style="background:url(<?php echo $character_preview_1?>)">
             <!-- <div class="card-title"><?php echo 'title'?></div> -->
           </div>

           <div class="card" style="background:url(<?php echo $character_preview_2?>)">
             <!-- <div class="card-title"><?php echo $section_3_link_1_title?></div> -->
           </div>

           <div class="card" style="background:url(<?php echo $character_preview_3?>)">
             <!-- <div class="card-title"><?php echo $section_3_link_1_title?></div> -->
           </div>

         </div>

         <div class="button-row dark">
           <a href="/characters"><button type="button" name="button">See All</button></a>
           <a href="/gallery"><button type="button" name="button">Gallery</button></a>
         </div>

       </div>


     <!-- end section 4 -->

     <!-- start 5 -->


       <div class="hero" style="background:url(<?php echo $hero_background?>); background-blend-mode:<?php echo $hero_blend_mode?>">
         <h1><?php echo $section_5_title?></h1>
         <p><?php echo $section_5_body?></p>
         <div class="button-row">
           <button type="button" name="button">Book Now</button>
           <button type="button" name="button">Contact Us</button>
         </div>
       </div>


     <!-- end section 5 -->


   </div>

 </div>

<!-- Nam viverra ultricies neque, vel imperdiet nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare hendrerit nunc sed molestie. Integer vel tempus est, quis scelerisque ligula. Donec eget arcu sit amet purus iaculis ultrices. Ut molestie lectus quam, eget dapibus est faucibus et. Nunc eu ultricies lectus.  -->


<?php get_footer(); ?>
