$(document).ready(function(){
  $('.slider-box').slick({
centerMode: true,
centerPadding: '10px',
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

    if ($(this).scrollTop() > 100){

        $('.main-top-header').addClass("floating-header");
        $('.main-header').addClass("lowered");

    }  else {

        $('.main-top-header').removeClass("floating-header");
        $('.main-header').removeClass("lowered");
    }

});

//scroll

$("a[href*=#]").on("click", function(e){
        var anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $(anchor.attr('href')).offset().top
        }, 777);
        e.preventDefault();
        return false;
    });

});

//mobile-menu

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

// popup windows

var popup = document.querySelector(".popup-question")
var close = document.querySelector(".popup-question-close");
var winPopup = document.querySelector(".wrap");
var videoLink = document.querySelectorAll(".popup-link");
var i = 0;
var k = 0;
var x = 0;
var y = 0;
var w = videoLink.length;

for (var k = 0; k < w; k++) {
  videoLink[k].addEventListener('click', function(evt) {
     evt.preventDefault();
     var current = evt.currentTarget;
     if (current.classList.contains("popup-link")) {
     var m = w;
     while(m--) {
        if(videoLink[m] == current) {
           var y = m;
           break;
        }
     }
     popup.classList.add("modal-content-show");
     winPopup.classList.add("modal-content-show");
     videoBox = '<video class="popup__video" autoplay controls><source src="' + videoLink[y].href + '" type="video/mp4"><source src="' + videoLink[y].href + '"type="video/webm"></video>';
     popup.insertAdjacentHTML('afterbegin', videoBox);
   } else {
      evt.preventDefault();
     }
  });
};

function showThank() {
  winPopup.classList.add("modal-content-show");
  popup.classList.add("modal-content-show");
  setTimeout(function() {
    popup.classList.add("modal-content-hide");
    winPopup.classList.add("modal-content-hide");
  }, 3000);
  setTimeout(function() {
    popup.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popup.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 3500);
};

function removePopup() {
  popup.classList.add("modal-content-hide");
  winPopup.classList.add("modal-content-hide");
  setTimeout(function() {
    popup.classList.remove("modal-content-show");
    winPopup.classList.remove("modal-content-show");
    popup.classList.remove("modal-content-hide");
    winPopup.classList.remove("modal-content-hide");
  }, 600);

};

function removeVideo() {
  var videoScreen = popup.querySelector("video");
  var removeScreen = videoScreen.querySelector("source");
  removeScreen.src = "#";
  popup.removeChild(videoScreen);
}


  close.addEventListener("click", function(event) {

    event.preventDefault();

    removePopup();

    removeVideo()

  });


window.addEventListener("keydown", function(event) {

  if (event.keyCode === 27) {

    if (popup.classList.contains("modal-content-show")) {

      removePopup();

      removeVideo()

    }

  }

});

winPopup.addEventListener("click", function(event) {

  if (winPopup.classList.contains("modal-content-show")) {

    removePopup();
    
    removeVideo()

  }

});

$(document).ready(function() {

	//E-mail Ajax Send
	$(".main-form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "http://рф-игра.рф/mail.php", //Change
			data: th.serialize()
		}).done(function() {
			showThank();
      setTimeout(function() {
        // Done Functions
        th.trigger("reset");
      }, 1000);
		});
		return false;
	});

});
