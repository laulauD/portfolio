// NAVBAR 
const navigation = document.querySelector('nav');

window.addEventListener('scroll', () => {

    if(window.scrollY > 70){
        navigation.classList.add('anim-nav');
    } else {
        navigation.classList.remove('anim-nav');
    }
})


// SCROLL 
$(document).ready(function(){
    $("a").on('click', function(event) {
  
      if (this.hash !== "") {
        event.preventDefault();

        var hash = this.hash;
  
          $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function(){
     
            window.location.hash = hash;
        });
      } 
    });
  });