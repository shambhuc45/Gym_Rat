<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style2.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/assets/css/nav.css">
      <!-- Fontawesome Link -->

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Bootstrap CSS -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" 
      rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
       crossorigin="anonymous">
       <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Trainers</title>
</head>
<body>

<nav class="navbar"></nav>

<div class="class-section">
    <h2 class="class-header">TRAINERS</h2>
    <div class="class-container">
        <div class="class-card">
            <div class="class-image">
               <a href="<?php echo get_template_directory_uri() ?>trainer1info.php"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/trainer1.png" alt="" height="210px"></a>
            </div>
            <div class="class-title">
                <P>Name: Rajesh Gurung<br>
                    Age:32 years<br></P>
                    
            </div>
    
        </div>
        <div class="class-card">
            <div class="class-image">
              <a href="<?php echo get_template_directory_uri() ?>/trainer2info.php"> <img src="<?php echo get_template_directory_uri() ?>/assets/img/trainer2.png" alt="" height="210px"></a> </div>
            <div class="class-title">
                <p>Name: Bibek Magar<br>
                    Age:32 years<br>
                    </p>
            </div>
    
        </div>
        <div class="class-card">
            <div class="class-image">
                <a href="<?php echo get_template_directory_uri() ?>/trainer3info.php">  <img src="<?php echo get_template_directory_uri() ?>/assets/img/trainer3.png" alt="" height="210px"></a>
            </div>
            <div class="class-title">
                <p>Name: Nabin Magar<br>
                    Age:25 years<br>
                    </p>
            </div>
    
        </div>
        <div class="class-card">
            <div class="class-image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/trainer4.png" alt="" height="210px">
            </div>
            <div class="class-title">
                <p>Name: John Barley<br>
                    Age:25 years<br>
                    </p>
            </div>
    
        </div>
        <div class="class-card">
            <div class="class-image">
                <img src="<?php echo get_template_directory_uri() ?>/assets/img/trainer5.png" alt="" height="210px">
            </div>
            <div class="class-title">
                <p>Name: Riya Sen<br>
                    Age:24 years<br>
                    <br>
      </p>
            </div>
    
        </div>
    </div>
</div>
<div class="question">
    <h2 class="get-question"> ARE YOU READY FOR CHANGES?</h2>
    <button class="btn-subs" >MAKE IT HAPPEN</button>
</div>
<div class="footer"></div>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/nav.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/footer.js"></script>
</body>
</html>