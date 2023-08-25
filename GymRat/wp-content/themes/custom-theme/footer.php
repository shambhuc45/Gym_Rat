<?php wp_footer(); ?>
<?php
//$image =get_bloginfo('template_url').'/assets/img/logob.png';
$custom_logo_id=get_theme_mod('custom_logo');
$custom_logo=wp_get_attachment_image_src($custom_logo_id,'full');
if (has_custom_logo()){
    $image =esc_url($custom_logo[0]);
}
?>

<!-- Footer From Html Css
<div class="footer">
    <div class="footer-content">
        <div class="footer-ul-container">
            <div class="category">
                <h6 class="category-title">Contact Us:</h6>
                <p class="phone">Phone: 9807538919 <br>
                    Address: Bharatpur-4,Chitwan <br>
                Mail: Gymrat@gmail.com</p>
            </div>
            <ul class="social-links">
                <h6 class="category-title">Connect With Us:</h6>
                <li><a href="#" class="footer-link fa fa-facebook"></a></li>
                <li><a href="#" class="footer-link fa fa-instagram"></a></li>
                <li><a href="#" class="footer-link fa fa-twitter"></a></li>
            </ul>
            <ul class="info-footer">
                <h6 class="category-title">Quick Links:</h6>
                <li><a href="#" class="footer-link">Home</a></li>
                <li><a href="#" class="footer-link">Equipment</a></li>
                <li><a href="#" class="footer-link">Membership</a></li>
            </ul>
    
        </div>
    
    </div>
</div> -->
<!-- Footer WordPress -->
<div class="footer-container ">
<div class="footer-item max-width m-auto footer-ul-container">
    <div class="logo-section hgt-wid-logo">
    <a href="<?php echo site_url(); ?>">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo1.png"alt="GymRat" height="85px" width="100px">
</a>
<div class="company-title">
    <h1>GymRat</h1>
</div>
        </div>
        <div class="category">
                <h6 class="category-title">Contact Us:</h6>
                <p class="phone">Phone: 9807538919 <br>
                    Address: Bharatpur-4,Chitwan <br>
                Mail: Gymrat@gmail.com</p>
            </div>
            
            <ul class="social-links">
                <h6 class="category-title">Connect With Us:</h6>
                <li><a href="#" class="footer-link fa fa-facebook"></a></li>
                <li><a href="#" class="footer-link fa fa-instagram"></a></li>
                <li><a href="#" class="footer-link fa fa-twitter"></a></li>
            </ul>
    <div class="nav-item m-5">
        Quick Links:
        <ul>
            <?php 
            wp_nav_menu(array(
                'menu'=>'footer-menu',
                'container'=>'',
            )) ;
             ?>
        </ul>
    </div>
            </div>
            </div>
           