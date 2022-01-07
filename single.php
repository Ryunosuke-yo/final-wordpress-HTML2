
<?php 

get_header(); 

?>

<?php 

$category_id = get_cat_ID( 'projects' );

?>
<div id="single-type"><?php the_content()?></div>

<div class="single-wrap">
    <img src="<?php echo get_template_directory_uri(); ?>/media-deer/sika-zenbu.png" alt="" class="single-img">


    <div class="single-title"><?php the_title()?></div>

    <div class="single-content">
        <div class="single-p"></div>

    </div>


    <div class="a-wrap">
        <a href="<?php echo home_url(); ?>" class="home-single">Home</a>
        <a href="<?php echo get_category_link( $category_id ); ?>">See all other posts</a>

    </div>

</div>



<?php
get_footer();
?>

