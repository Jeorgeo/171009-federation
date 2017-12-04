<?php

function get_order_form($classes = array()) {

	$classes = implode(' ', $classes);

	$output=<<<HTML
<div class="$classes">
	<form class="main-form" action="yandex/pay.php" method="post">
		<h4>Оформить заказ</h4>
		<input type="text" name="name" value="" placeholder="ФИО*" required>
		<input type="text" id="phone" name="phone" value="" placeholder="Телефон (79000000000)*" pattern="^[0-9]{11}$" required>
		<input type="text" name="email" value="" placeholder="E-mail*" pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})" required>
		<input type="text" id="address1" name="address" value="" placeholder="Адрес доставки*" required>


		<input type="hidden" name="price" value="1690.00">
		<span class="price">Всего: 1690 руб.</span>
		<button type="submit">Перейти к оплате</button>
	</form>
</div>



<link href="https://cdn.jsdelivr.net/npm/suggestions-jquery@17.10.1/dist/css/suggestions.min.css" type="text/css" rel="stylesheet" />

<!--[if lt IE 10]>

<![endif]-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/suggestions-jquery@17.10.1/dist/js/jquery.suggestions.min.js"></script>
<script type="text/javascript">


function formatSelected(suggestion) {
  if (suggestion.data.postal_code) {
    return suggestion.data.postal_code + ', ' + suggestion.value;
  } else {
    return suggestion.value;
  }
}


    jQuery("#address1").suggestions({
        token: "22fde9febdf5530a2646e491d355c93015558779",
        type: "ADDRESS",
        count: 5,
		formatSelected: formatSelected,

        onSelect: function(suggestion) {

        }
    });
</script>


<style>

#address1 {
	display: block;
	display: block;
	box-sizing: inherit !important;
    width: 70%;
    margin: 1em auto;
    padding: 0.5em 1em;
    color: #908f94;
    background-color: transparent;
    border: none;
    border-bottom: 1px solid #908f94;
}

</style>

HTML;

	return $output;
}

/*add_action( 'wp_enqueue_scripts', 'order_form_enqueue_scripts' );

function order_form_enqueue_scripts() {

	wp_enqueue_style( 'dadata-suggestions', '//cdn.jsdelivr.net/npm/suggestions-jquery@17.10.1/dist/css/suggestions.min.css' );

	wp_enqueue_script('dadata-suggestions', '//cdn.jsdelivr.net/npm/suggestions-jquery@17.10.1/dist/js/jquery.suggestions.min.js');
	wp_enqueue_script('dadata-suggestions-ie', '//cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js');
	wp_script_add_data('dadata-suggestions-ie', 'conditional', 'lt IE 10');

	wp_enqueue_script( 'order-form', get_template_directory_uri() . '/js/order-form.js', array('dadata-suggestions'), '1', true);
}*/

?>
