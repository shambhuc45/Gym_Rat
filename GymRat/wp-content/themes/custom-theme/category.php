<?php get_header(); ?>

<?php
if (have_posts()){
    while(have_posts()):
        the_post();
        ?>
        <div class="post-wapper max-width m-auto">
            <ul>
        <li class="post-information">
            <div class="post-image-section">
            <!--post image-->
            <div class="post-image-container">
                <?php echo get_the_post_thumbnail();?>
</div>
<!--end post image-->
    </div>
<!--post title-->
<div class="post-content-info">
<div class='title'>
<a href="<?php the_permalink();?>"><?php the_title();?></a>
</div>
<!--end post title-->
<!--post content-->
<div class="content line-clamp">
<?php echo get_the_content();?>
    </div>
<!--end post content-->
<!--author name-->
<div class="author-name align-right mt-5 bold">
<?php echo"-";
the_author();?>
</div>  
<!--end author name-->
<!--post time-->
<div class="post-date align-right bold">
<?php the_time('F j,Y g:i a');?>
    </div>
<!--end post time-->
    </div>
    </li>
   
    </ul>
    <?php endwhile;
}?>

</div>
</div>
<div class="page-navi text-center">
<?php echo wp_pagenavi() ?>
</div>

<?php get_footer(); ?>