<?php ?>


<div class="pro-wraper">
    <div class="post-title">
        <a href="<?php the_permalink() ?>">
            <?php the_title('<h1>', '</h1>');?>
        </a>
        <p class="date">@<?php the_date();?></p>
    </div>
 

<div class="info-posts">
    <p class="dollar">$</p>
<p>
<?php the_excerpt('<p>', '</p>');?>
</p>

 </div>

</div>






<?php ?>