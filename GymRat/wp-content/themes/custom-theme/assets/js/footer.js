function createFooter(){
    let footer = document.querySelector('.footer');
    footer.innerHTML=`
    <div class="footer">
        <div class="footer-content">
            <div class="footer-ul-container">
                <div class="category">
                    <h6 class="category-title">Contact Us:</h6>
                    <p class="phone">Phone:9807538919 <br>
                        Address:Bharatpur-4</p>
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
    </div>`;
}
createFooter();