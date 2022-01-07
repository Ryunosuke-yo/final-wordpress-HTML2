<?php 
get_header()

?>



<div class="cat-wrapper">
<img src="<?php echo get_template_directory_uri(); ?>/media-deer/sika-zenbu.png" alt="" class="cat-img">

<?php

if ( have_posts() ) :
  while ( have_posts() ) :
    the_post();
    get_template_part('/template-parts/allposts');
  endwhile;
  else : 
    get_template_part('/template-parts/content-none');
    endif;  
?>



<div class="pro-wraper">
    <div class="post-title">
        <h1>What's next...</h1>
        <p class="date">@now</p>
    </div>
 

<div class="info-posts">
    <p class="dollar">$</p>
<p class="thanks"></p>

</div>

</div>
<div class="home-allposts">
<a href="<?php echo home_url(); ?>" >Home</a>
</div>

<div class="fire-img-wrap">

<div class="fire-container">
  <img class="fire-img" src="<?php echo get_template_directory_uri(); ?>/fire/fire1.png" alt="">
</div>

<div class="fire-container2">
  <img class="fire-img-right" src="<?php echo get_template_directory_uri(); ?>/fire-right/fire-right1.png" alt="">
</div>
</div>
<?php 
get_footer()
?>