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

?>

  <!-- header -->

 <div class="home-page">

   <?php get_header(); ?>

   <div class="grid grid-noGutter">

     <!-- start section 1 -->

     <div class="col-12">
       <div class="card-col hero" style="background:url(<?php echo $hero_background?>)" id="hero">
         <h1>Book A Princess For Your Next Party.</h1>
         <i class="fa fa-arrow-down"></i>
       </div>
     </div>

     <!-- end section 1 -->

     <!-- start section 3 -->


       <div class="col-12_md-12">
         <div class="card-col section alt-background" style="background:url(<?php echo $section_3_background?>)" id='scroll-to-section'>
           <h1><?php echo $section_3_title?></h1>
           <div class="card-row">

             <div class="card">
               <div class="card-title">Prices</div>
             </div>
            <div class="card">
              <div class="card-title">Book Now</div>
            </div>

           </div>
         </div>
       </div>


     <!-- end section 3 -->

     <!-- start section 1 -->

     <div class="col-12_md-12">
       <div class="card-col section alt-background" style="background:url(<?php echo $hero_background?>)">
         <h1>View The Gallery!</h1>
         <div class="card-row">

            <div class="card">

            </div>
            <div class="card">

            </div>
            <div class="card">
              <div class="card-title">View</div>
              <i class="fa fa-arrow-right"></i>
            </div>

         </div>
       </div>
     </div>

     <!-- end section 1 -->

     <!-- start section 1 -->

     <div class="col-12_md-12">
       <div class="card-col section alt-background" style="background:url(<?php echo $hero_background?>)">
         <h1>See the Charcters!</h1>
         <div class="card-row">

          <div class="card">
          </div>
          <div class="card">
          </div>
          <div class="card">
            <div class="card-title">View</div>
            <i class="fa fa-arrow-right"></i>
          </div>

         </div>
       </div>
     </div>

     <!-- end section 1 -->

     <!-- start contact section -->

     <div class="col-12_md-12">
       <div class="card-col hero" style="background:url(<?php echo $hero_background?>)">
         <h1>What Are You Waiting For!</h1>
         <br /> <br />
         <h1>Hire Us Now!</h1>
       </div>
     </div>


   </div>

 </div>



<?php get_footer(); ?>
