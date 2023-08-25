<?php
get_header();
?>
<div class="single-post-info">
<span class="spost-title text-center"><?php the_title(); ?></span>
<div class="post-image-container">
    <?php echo get_the_post_thumbnail(); ?>
</div>
<br>
<?php the_content(); ?>
<br>
<?php comments_template(); ?>
<?php comment_form(); ?>
</div>

<?php get_footer(); ?>