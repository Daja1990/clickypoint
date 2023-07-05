// Magnific Popup jquery code
jQuery('.gallery').each(function() { // the containers for all your galleries
    jQuery(this).magnificPopup({
        delegate: 'a', // the selector for gallery item
        type: 'image',
        gallery: {
          enabled:true
        }
    });
});


const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li');
  
  burger.addEventListener('click', () => {
          // Toggle Nav
  nav.classList.toggle('nav-active');

          // Animate Links
  navLinks.forEach((link, index)=>{
      if(link.style.animation){
          link.style.animation = '';
      } else {
          link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;

      }
      });
      //Burger Animation
      burger.classList.toggle('toggle');
  });

}

navSlide();


function switchVisible() {
    document.getElementById('games1').style.display = 'block';
    document.getElementById('games2').style.display = 'none';
    document.getElementById('upcominggames').style.backgroundColor = "#191818";
    document.getElementById('newgames').style.backgroundColor = "#111111";
}

function switchVisible2() {
    document.getElementById('games1').style.display = 'none';
    document.getElementById('games2').style.display = 'block';
    document.getElementById('upcominggames').style.backgroundColor = "#111111";
    document.getElementById('newgames').style.backgroundColor = "#191818";
}