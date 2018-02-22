<?php

   /*
    Template Name: Home
   */

   //ADVANCED CUSTOM FIELDS

   //hero
   $hero_background = get_field("hero_background");
   $hero_title = get_field("hero_title");
   $hero_subtitle = get_field("hero_subtitle");
   $hero_blend_mode = get_field("hero_blend_mode");
   $hero_background_color = get_field("hero_background_color");

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

  <script>
    jQuery(document).ready(function(){
      var mySwiper = new Swiper('.swiper-container',{
        pagination: '.pagination',
        loop:true,
        grabCursor: true,
        paginationClickable: true
      })
      jQuery('.arrow-left').on('click', function(e){
        e.preventDefault()
        mySwiper.swipePrev()
      })
      jQuery('.arrow-right').on('click', function(e){
        e.preventDefault()
        mySwiper.swipeNext()
      })
    })
  </script>

  <div>

    <h1 class="home-title">Book A Princess Now!</h1>

    <div class="swiper-container home-swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background:url(https://i.imgur.com/NZSXkqm.jpg); background-size: cover; background-position: 50%">Slide 1</div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
    </div>

  </div>


  <?php get_footer(); ?>

 </div>

<!-- Nam viverra ultricies neque, vel imperdiet nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ornare hendrerit nunc sed molestie. Integer vel tempus est, quis scelerisque ligula. Donec eget arcu sit amet purus iaculis ultrices. Ut molestie lectus quam, eget dapibus est faucibus et. Nunc eu ultricies lectus.  -->
