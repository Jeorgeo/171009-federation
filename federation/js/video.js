var link = document.querySelectorAll(".show_details_button");
var title = document.querySelectorAll(".woocommerce-loop-product__title");
var price = document.querySelectorAll(".price");
var popup = document.querySelector(".popup-question");
var close = document.querySelector(".popup-question-close");
var win_popup = document.querySelector(".wrap");
var form_title = document.getElementById('indicator-title');
var form_price = document.getElementById('indicator-price');
var form_img = document.querySelectorAll(".thumbnail_container");
var box_order = document.querySelector(".main-catalog-order");
var i = 0;
var k = 0;
var x = 0;
var y = 0;
var w = link.length;

for (var k = 0; k < w; k++) {
  link[k].addEventListener('click', function(evt) {
     evt.preventDefault();
     var current = evt.target;
     //current.href = '#';
     if (current.classList.contains("show_details_button")) {
     var m = w;
     while(m--) {
        if(link[m] == current) {
           var y = m;
           break;
        }
     }

     popup.classList.add("modal-content-show");
     win_popup.classList.add("modal-content-show");
   } else {
      evt.preventDefault();
     }
  });
};

close.addEventListener("click", function(event) {
  event.preventDefault();
  popup.classList.remove("modal-content-show");
  win_popup.classList.remove("modal-content-show");
  box_order.removeChild(box_image);
  box_order.removeChild(box_text);
});

window.addEventListener("keydown", function(event) {
  if (event.keyCode === 27) {
    if (popup.classList.contains("modal-content-show")) {
      popup.classList.remove("modal-content-show");
      win_popup.classList.remove("modal-content-show");
      box_order.removeChild(box_image);
      box_order.removeChild(box_text);
    }
  }
});

win_popup.addEventListener("click", function(event) {
  if (win_popup.classList.contains("modal-content-show")) {
    popup.classList.remove("modal-content-show");
    win_popup.classList.remove("modal-content-show");
    box_order.removeChild(box_image);
    box_order.removeChild(box_text);
  }
});
