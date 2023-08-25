let hamburger=document.getElementById('custom-hamburger-menu');
 hamburger.addEventListener('click',function(e){
    let rightnav=document.querySelector('.navbar-items');

    if(rightnav.style.display ==""|| rightnav.style.display == "none"){
        let display = document.querySelector('.navbar-items').style.display="block";

    }else{
        let display = document.querySelector('.navbar-items').style.display="none";
    }
 });
