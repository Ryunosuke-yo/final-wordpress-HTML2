
<?php 

get_header(); 

?>




<!-- imgs for parallax -->
<!-- back -->
<div class="img-wrap">
<div class="rellax" data-rellax-speed="1">
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/back.png" alt=""　class="back">
</div>

<!-- umi -->
<div class="rellax" >
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/umi.png" alt=""　class="back">
</div>
<!-- mountin -->
<div class="rellax" >
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/yama.png" alt=""　class="back">
</div>



<!-- tree -->
<div class="rellax" data-rellax-speed="5">
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/kusa-and-ki.png" alt=""　class="tree">
</div>


<!-- ballon -->
<div class="rellax" data-rellax-zindex="10" data-rellax-speed="5">
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/balloon1.png" alt="">
</div>
<div class="rellax" data-rellax-zindex="10" data-rellax-speed="2">
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/balloon2.png" alt="">
</div>
<div class="rellax" data-rellax-zindex="10" data-rellax-speed="3">
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/balloon3.png" alt="">
</div>

<!-- deer -->
<div class="rellax" data-rellax-speed="5">
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/sika.png" alt=""　  >
</div>


<div class="port-wrapper">
  <div class="topic">
    <div class="hello rellax" data-rellax-speed="2">Hello</div>
  </div>
  <div class="intro">
    <p class="rellax"  data-rellax-speed="6">I'm Ryunosuke Yokokawa,</p>
    <p class="rellax" data-rellax-speed="5">a student of front-end-development in Japan</p>
  </div>
  

<div class="black-con rellax" data-rellax-speed="12">

<div class="content-wrapper">
<h1 class="stuPro">Student Projects</h1>


<?php

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('/template-parts/content');
  endwhile;
  else : 
    get_template_part('/template-parts/content-none');
    endif;  
?>



</div>

<div class="bio">
  <h2>Bio</h2>
  <div class="bio-grid">
  <p>Born and raised in Japan</p>
  <p>Bachelor degree in International Development</p>
  <p>A student in web development course of Langara college</p>
  </div>
  <div class="bio-box"></div>
</div>


<div class="skills">
  <h2>Skills</h2>
  <div class="skill-wrapper">
  <p>HTML</p>
  <p>CSS,Sass</p>
  <p>Wordpress</p>
  <p>Javascript</p>
  </div>
</div>

<div class="contact-wrapper">
  <p>Contact Me</p>
  <div class="icon-wrapper">
  <a href="#"><i class="fab fa-linkedin-in"></i></a>
  <a href="#"><i class="fab fa-instagram"></i></a>
  <a href="#"><i class="far fa-envelope"></i></a>
  </div>

  
</div>

<footer class="site-footer" id="site-footer">
  <h1>The header image is</h1>
  <p><a href="https://www.vecteezy.com/free-vector/nature">Nature Vectors by Vecteezy</a></p>
</footer>



</div>
</div>
  </div>


<?php
get_footer();
?>

