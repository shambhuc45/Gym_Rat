function createNav(){
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div class="nav">
    <a href="index.html"><img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.jpg" class="brand-logo" alt="GymRat"><a>
   </div>
    <ul class="nav-container">
    <li class="nav-items"><a href="#" class="link">Home</a></li>
    <li class="nav-items"><a href="#" class="link">Classes</a></li>
    <li class="nav-items"><a href="#" class="link">Trainers</a></li>
    <li class="nav-items"><a href="#" class="link">Contact Us</a></li>
    <li class="nav-items"><a href="#" class="link">About Us</a></li>
    </ul>
    `;
}
createNav();