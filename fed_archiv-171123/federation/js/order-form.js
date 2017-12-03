(function($){

	$form = $('#order-form');

	$form.find('input[name="phone"]').mask("+7(999) 999-9999");
	$form.find('input[name="address"]').suggestions({
        token: "80857dfecd751ee8962634f295324b00b54bf9b1",
        type: "ADDRESS",
        count: 5,
      });

})(jQuery);