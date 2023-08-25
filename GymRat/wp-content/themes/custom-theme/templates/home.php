
<?php
/*
*Template Name: Home
*/
get_header();?>



    <!-- Header Section//Hero -->

    <div class="hero-container" >
   <div class="overlay"></div>
    <div class="row">
        <section class="heading-paragraph">
            <h1 class="text-uppercase"><strong>It's all about what you can achieve.</strong></h1><br>
            <button class="btn-join">Join Now</button>
        </section>
    </div>
   </div>
   
<!-- End Hero Section -->


    <!-- Classes Section -->
<div class="class-section">
 <h2 class="class-header">Popular Classes</h2>
<div class="class-container">
    <div class="class-card">
        <div class="class-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/cardio1.png" alt="" height="210px">
        </div>
        <div class="class-title">
            <h4>Cardio</h4>
        </div>

    </div>
    <div class="class-card">
        <div class="class-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/zumba1.jpg" alt="" height="210px">
        </div>
        <div class="class-title">
            <h4>Zumba</h4>
        </div>

    </div>
    <div class="class-card">
        <div class="class-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Air Yoga.jpg" alt="" height="210px">
        </div>
        <div class="class-title">
            <h4>Air Yoga</h4>
        </div>

    </div>
    <div class="class-card">
        <div class="class-image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/lifting1.jpg" alt="" height="210px">
        </div>
        <div class="class-title">
            <h4>Weight Gain</h4>
        </div>

    </div>
</div>
<button class="btn-class" >Check All Classes</button>
</div>
    <!-- End Class Section -->

       <!-- About Us Section-->
       <div class="about-container">
        <div class="left col-xs-6">
            <h1 class="about">ABOUT GYMRAT</h1>
            <p class="about-details">
                Gym Rat is not here you to fitness, we’re here to
                motivate you to carry <br>
                yourself to your goals.
                <br>
                If you’re not sure with what your goals are, or 
                don’t know where to <br>
                start on your fitness journey, come in and speak to <br>
                one of our qualified <br>
                trainers who can help you develop a plan.
                
            </p>
            <button class="btn-about">SCHEDULE</button>
        </div>
        <div class="right col-xs-6"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/about1.jpg" width="100%" position="absolute"></div>
        <div class="row">
            <div class="">
                
            </div>
            <div class="">
            </div>
        </div>
       </div>
        <!-- End About Section-->


    <!-- Comment And Reviews -->
<div class="review-container">
        <h1 align="center">Happy Customer</h1>
        <div class="comments">
        <p class="comment" align="center">The instructor is brilliant, the Zumba class is a lot of fun and it is great work out. Also, it’s so fun  that I didn’t want
            the class to end.
        </p>
        <p class="writer" align="center">-Pramisha Tamang</p>
        <div class="stars" align="center">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
    </div>
    <hr>
    <div class="comments">
        <p class="comment" align="center">This is a fantastic gym!! All the trainers are super nice and take an interest in you no matter what fitness level you 
            are at.             
        </p>
        <p class="writer" align="center">-Nirva Chettri</p>
        <div class="stars" align="center">
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
        <span class="fa fa-star"></span>
    </div>
    </div>
</div>
        <!-- End Comments -->
    
<!-- Contact Section -->
<div class="contact-container">
    <div class="signup ">
    <p class="contact-text">YOUR FITNESS
        STARTS HERE
        SAVE TIME AND 
        SIGN UP ONLINE</p>
    <button class="btn-signup">BECOME A MEMBER</button>
</div>
</div>
<!-- End Contact Section -->



<?php get_footer(); ?>
