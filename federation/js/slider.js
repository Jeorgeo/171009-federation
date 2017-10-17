$(document).ready(function(){
  $('.slider-box').slick({
centerMode: true,
centerPadding: '0',
slidesToShow: 3,
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
});
