<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/nav.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
    <link rel="icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri() ?>/assets/img/favicon.png">

    <!-- Fontawesome Link -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
       crossorigin="anonymous">
       <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <style>
        .blog-card img{
            height: 300px;
            object-fit: cover;
            width: 100%;
            border-radius: 5px;
        }
        body{
            background-color: black;
        }
        .blog-card{
            background-color: grey;
            color: white;
            margin: 10px 10px;
        }
        h1,h2,p{
            color: white;
        }
    </style>

    <title><?php echo get_bloginfo('name');?>
    <?php if(is_front_page()){ echo get_bloginfo('description');}?>
    </title>
    </head>
<body>
<?php wp_head();?>

<!-- Nav Bar From Html Design -->
<!-- <div class="nav">
    <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.jpg" class="brand-logo"
     alt="GymRat" height="50px" width="90px"><a>
   </div>
    <ul class="nav-links">
    <li class="nav-items"><a href="#" class="link">Home</a></li>
    <li class="nav-items"><a href="#" class="link">Classes</a></li>
    <li class="nav-items"><a href="#" class="link">Trainers</a></li>
    <li class="nav-items"><a href="#" class="link">Contact Us</a></li>
    <li class="nav-items"><a href="#" class="link">About Us</a></li>
    </ul> -->



<!-- Dynamically -->
<?php $custom_logo=get_header_image(); ?>


<div class="nav-container-main">
    <div  class="max-width nav-container">
    <div class="logo-section">
       
    <a href="<?php echo site_url(); ?>">
     <img src="<?php echo $custom_logo; ?>" alt="">
</a>
</div>
<div class="custom-hamburger-menu" id="custom-hamburger-menu">
<img src="<?php echo get_template_directory_uri() ?>/assets/img/menu.svg" alt="">
</div>


<div class="navbar-items">
<?php
wp_nav_menu( 
    array(
    'menu' => 'primary-menu',
'container' => '',
'themes_location'=>'primary',
'items_wrap' =>'<ul class="my-nav">%3$s</ul>'
));
?>

</div>
</div>
</div> 

    
