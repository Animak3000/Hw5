<?php
  require_once('./index.php');

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => 'customer@example.com',
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 250,
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $.25!</h1>';
?>