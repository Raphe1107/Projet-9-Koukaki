console.log ("test");

/* ---------- Swiper ---------- */

var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    centeredSlides: true,
    slidesPerView: 5,
    grabCursor: true,
    
    coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
    }
});


/* ---------- Apparition des titres en fonction du scroll ---------- */

const sectionTitles = document.querySelectorAll('.section-title');

window.addEventListener('scroll', () => {
  sectionTitles.forEach(title => {
    const titlePosition = title.getBoundingClientRect().top;
    const windowHeight = window.innerHeight;

    if (titlePosition < windowHeight) {
      title.classList.add('appear');
    }
  });
});


/* ---------- Mouvement des nuages ---------- */

const bigCloud = document.querySelector('.big_cloud');
const littleCloud = document.querySelector('.little_cloud');

window.addEventListener('scroll', () => {
  const { scrollTop, clientHeight } = document.documentElement;
  const thresholdBigCloud = bigCloud.offsetTop - clientHeight * 0.5;
  const thresholdLittleCloud = littleCloud.offsetTop - clientHeight * 0.74;

  if (scrollTop > thresholdBigCloud) {
    bigCloud.classList.add("active");
  }

  if (scrollTop > thresholdLittleCloud) {
    littleCloud.classList.add("active");
  }
});


/* ---------- Menu burger ---------- */


const burgerButton = document.querySelector('.burger_button');
const openedMenu = document.querySelector('.openedMenu');

burgerButton.addEventListener('click', function() {
    openedMenu.classList.toggle('show');
});






















  
  

