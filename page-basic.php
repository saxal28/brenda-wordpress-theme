<?php
   /*
    Template Name: Basic
   */

   $contact_background = get_field("gallery_background");
?>

<?php get_header(); ?>

<div class="hero"  id="hero" style="background:url(https://i.imgur.com/DPVufYo.jpg); background-color: slategray ; background-blend-mode:overlay;">

 <h1>404!</h1>
 <h2>This Page Does Not Exist!</h2>

 <div class="scroll-toggle home">
		<a href="/"><i class="fa fa-home"></i></a>
		<p>
			Back To Home
		</p>
 </div>

</div>

<?php get_footer(); ?>
