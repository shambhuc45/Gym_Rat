<?php
/*
*Template Name: Equipments
*/
get_header();?>
<h2 class="class-header text-center"> EQUIPMENTS AVAILABLE</h2>
<div class="class-container">
<?php
if(have_rows('equipments')){;
    while(have_rows('equipments')):
        the_row();
?>

    <div class="class-card">
        <div class="class-image">
            <img src="<?php echo get_sub_field('equipment_image');?>" alt="classimg">
        </div>
        <div class="class-title">
            <h2><?php echo get_sub_field('equipment_name'); ?></h2>
        </div>
    </div>

<?php
endwhile;
}; ?>
</div>

<?php get_footer(); ?>