$(document).ready(function(){
  $('.slider-box').slick({
centerMode: true,
centerPadding: '0',
slidesToShow: 3,
autoplay: true,
autoplaySpeed: 3000,
responsive: [
{
  breakpoint: 480,
  settings: {
    arrows: true,
    centerMode: true,
    centerPadding: '10px',
    slidesToShow: 1
  }
}
]
});
$(window).scroll(function() {

    if ($(this).scrollTop() > 200){

        $('.main-top-header').removeClass("hidden");

    }  else{

        $('.main-top-header').addClass("hidden");
    }

});
});

var toggleBtn = document.querySelector('#js-toggle');
var menuNav = document.querySelector('.left-panel');
var toggleArrow = document.querySelector('.header-menu-toggle');

toggleBtn.addEventListener('click', moveMenu);

function moveMenu(){
  if(menuNav.classList.contains('left-panel-show')) {
      toggleArrow.classList.remove('btn-arrow-top');
      toggleArrow.classList.remove('btn-arrow-bottom');
      menuNav.classList.remove('left-panel-show');
     } else {
      toggleArrow.classList.add('btn-arrow-top');
      toggleArrow.classList.add('btn-arrow-bottom');
      menuNav.classList.add('left-panel-show');
      }
};
