

  


 //Accordion
 const accordion = document.getElementsByClassName('card-body');

 for (i = 0; i< accordion.length; i++ ) {
    accordion[i].addEventListener('click', function(){
        this.classList.toggle('active');
    })
 };
//hamburger

 const hamburger = document.querySelector(".hamburger");
 const navMenu = document.querySelector(".nav-menu");

 hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
 })

 document.querySelectorAll(".nav-link").forEach(n => n. addEventListener("click", () => {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
 }))




