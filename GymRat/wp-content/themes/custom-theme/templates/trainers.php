
<?php
/*
*Template Name: Trainers
*/
get_header();?>
<h2 class="class-header text-center">Trainers</h2>
<div class="class-container">
<?php
if(have_rows('trainers')){;
    while(have_rows('trainers')):
        the_row();
?>

    <div class="class-card">
        <div class="class-image">
            <img src="<?php echo get_sub_field('trainer_image');?>" alt="classimg">
        </div>
        <div class="class-title">
            <h3><?php echo get_sub_field('trainer_name'); ?></h3>
            <P>Age:- <?php echo get_sub_field('age'); ?><br></P>
        </div>
    </div>

<?php
endwhile;
}; ?>
</div>



<?php get_footer(); ?>