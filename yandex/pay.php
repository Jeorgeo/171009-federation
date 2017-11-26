<?php

$shopid = '165053'; // Ваш shopId
$secretkey = 'live_jiA39D4spwcQVm8ptbwfKibaJiCDWjy583qYZnJXUCA'; // Ваш секретный ключ

$price = strip_tags($_POST['price']);
$phone = strip_tags($_POST['phone']);
$email = strip_tags($_POST['email']);

require 'lib/autoload.php';

use YandexCheckout\Client;

$client = new Client();
$client->setAuth($shopid, $secretkey);

$idempotenceKey = uniqid('', true);
$response = $client->createPayment(
    array(
          'amount' => array(
              'value' => $price,
              'currency' => 'RUB',
          ),
          'confirmation' => array(
              'type' => 'redirect',
              'return_url' => 'https://xn----8sbit2bdy.xn--p1ai/',
          ),
          'capture' => true,
          'receipt' => [
          	'items'=> [[
          			   	"description"=>"Настольная игра",
          			   	"quantity"=>1,
          			   	"amount"=>["value"=>$price,"currency"=>'RUB'],
          			   	"vat_code"=>1
          			   	]],
          	'phone'=>$phone,
          	'email'=>$email
          ],
      ),
      $idempotenceKey
  );

Header("Location: ".$response->_confirmation->_confirmationUrl);

?>