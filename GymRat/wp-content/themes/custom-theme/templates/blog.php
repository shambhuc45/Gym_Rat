<?php
/*
*Template Name: Blog
*/
get_header();?>


<!-- Blogs -->
<div class="container">
        <div class="text-center my-5">
            <h1>GymRat-Blogs</h1>
        </div>
        <!-- Row Start -->
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-card mb-5 shadow-sm">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/blog/Blog1.jpg" alt="blog1">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h2 strong>Bad Exercises: What They Are and Why You Should Avoid Them</h2>
                    </div>
                    <div class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maxime voluptate nulla quaerat, ducimus voluptatibus 
                            esse accusamus dolorum, unde expedita laboriosam voluptatem,
                            sunt quam consectetur eius rerum. Amet molestias voluptate deleniti.
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-card mb-5 shadow-sm">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/blog/blog2.PNG" alt="blog2">
                </div>
                <div class="card-body">       
                     <div class="card-title">
                        <h2 strong>HOW TO BULK LIKE HULK</h2>
                    </div>
                    <div class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maxime voluptate nulla quaerat, ducimus voluptatibus 
                            esse accusamus dolorum, unde expedita laboriosam voluptatem,
                            sunt quam consectetur eius rerum. Amet molestias voluptate deleniti.
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-card mb-5 shadow-sm">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/blog/BLOG3.PNG" alt="blog3">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h2>HOW TO PULL-UPS WITHOUT A BAR..</h2>
                    </div>
                    <div class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maxime voluptate nulla quaerat, ducimus voluptatibus 
                            esse accusamus dolorum, unde expedita laboriosam voluptatem,
                            sunt quam consectetur eius rerum. Amet molestias voluptate deleniti.
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-card mb-5 shadow-sm">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/blog/blog4.PNG" alt="blog4">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h2>HOW MANY SETS AND REPS SHOULD I DO?</h2>
                    </div>
                    <div class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maxime voluptate nulla quaerat, ducimus voluptatibus 
                            esse accusamus dolorum, unde expedita laboriosam voluptatem,
                            sunt quam consectetur eius rerum. Amet molestias voluptate deleniti.
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-card mb-5 shadow-sm">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/blog/BLOG5.PNG" alt="blog5">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h2>GETTING INTO SHAPE WITHOUT LEAVING HOUSE</h2>
                    </div>
                    <div class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maxime voluptate nulla quaerat, ducimus voluptatibus 
                            esse accusamus dolorum, unde expedita laboriosam voluptatem,
                            sunt quam consectetur eius rerum. Amet molestias voluptate deleniti.
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="blog-card mb-5 shadow-sm">
                    <img src="<?php bloginfo('template_directory') ?>/assets/img/blog/BLOG6.PNG" alt="blog6">
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h2>WAYS TO APPEAR MORE CONFIDENT</h2>
                    </div>
                    <div class="card-text">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Maxime voluptate nulla quaerat, ducimus voluptatibus 
                            esse accusamus dolorum, unde expedita laboriosam voluptatem,
                            sunt quam consectetur eius rerum. Amet molestias voluptate deleniti.
                        </p>
                    </div>
                    <a href="<?php the_permalink();?>" class="btn btn-outline-primary rounded-0 float-end">Read More</a>
                </div>
            </div>
            
        </div>
        <!-- Row End -->
</div>
<?php get_footer(); ?>
