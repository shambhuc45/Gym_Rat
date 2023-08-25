<?php
get_header();
?>
<div class="about-us">
<span class="page-title bold text-center"><?php the_title(); ?></span>
<!-- <div class="post-image-container">
    <?php echo get_the_post_thumbnail(); ?>
</div> -->
<br>
<?php the_content(); ?>
<br>
</div>
<?php get_footer(); ?>