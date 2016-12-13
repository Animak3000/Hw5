<?php
  require_once('/Applications/XAMPP/xamppfiles/htdocs/hw5/Hw5/src/configs/config.php');

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