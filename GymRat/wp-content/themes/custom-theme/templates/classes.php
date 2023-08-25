<?php
/*
*Template Name: Class
*/
get_header();?>
<h2 class="class-header text-center">Classes</h2>
<div class="class-container">
<?php
if(have_rows('classes')){;
    while(have_rows('classes')):
        the_row();
?>

    <div class="class-card">
        <div class="class-image">
            <img src="<?php echo get_sub_field('class-image');?>" alt="classimg">
        </div>
        <div class="class-title">
            <h3><?php echo get_sub_field('class_name'); ?></h3>
            <P>Useful For:-<?php echo get_sub_field('class_used'); ?><br></P>
        </div>
    </div>

<?php
endwhile;
}; ?>
</div>



<?php get_footer(); ?>