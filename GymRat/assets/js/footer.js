function createFooter(){
    let footer = document.querySelector('.footer');
    footer.innerHTML=`
    <div class="footer">
        <div class="footer-content">
            <div class="footer-ul-container">
                <div class="category">
                    <h6 class="category-title bolderfont">Contact Us:</h6>
                    <p class="phone">Phone:9807538919 <br>
                        Address:Bharatpur-4<br>
                        Mail: Gymrat@gmail.com</p>
                </div>
                <ul class="social-links">
                    <h6 class="category-title bolderfont">Connect With Us:</h6>
                    <li><a href="Facebook.com/GymRat" target="_blank" class="footer-link fa fa-facebook"></a></li>
                    <li><a href="Instagram.com/GymRat" target="_blank"  class="footer-link fa fa-instagram"></a></li>
                    <li><a href="Twitter.com/GymRat" target="_blank"  class="footer-link fa fa-twitter"></a></li>
                </ul>
                <ul class="info-footer">
                    <h6 class="category-title bolderfont">Quick Links:</h6>
                    <li><a href="index.html" class="footer-link">Home</a></li>
                    <li><a href="equipments.html" class="footer-link">Equipment</a></li>
                    <li><a href="membership.html" class="footer-link">Membership</a></li>
                </ul>
        
            </div>
        
        </div>
    </div>`;
}
createFooter();