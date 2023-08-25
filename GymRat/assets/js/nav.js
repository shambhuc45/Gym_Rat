function createNav(){
    let nav = document.querySelector('.navbar');
    nav.innerHTML=`
    <div class="nav">
    <div class="logo-section">
    <a href="index.html"><img src="assets/img/logo.png" class="brand-logo" alt="GymRat"><a>
   </div>
   </div>
    <ul class="nav-container">
    <li class="nav-items"><a href="index.html" class="link">Home</a></li>
    <li class="nav-items"><a href="classes.html" class="link">Classes</a></li>
    <li class="nav-items"><a href="Trainers.html" class="link">Trainers</a></li>
    <li class="nav-items"><a href="equipments.html" class="link">Equipment</a></li>
    <li class="nav-items"><a href="AboutUs.html" class="link">About Us</a></li>
    <a href="login.html" class="profile"><img src="assets/img/profile.png" height="25px" ></a>
    </ul>
    `;
}
createNav();