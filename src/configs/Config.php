<?php
namespace onepersongroup\hw5\configs;
//Base URL for website. Edit when needed.
define ("BASE_URL", "http://localhost/Hw5");

//MySql Constants. Edit when needed.
define ("SERVERNAME", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "123456qwerty");
define ("DB", "hw5");

// Stripe configurations using test keys
/*
$stripe = array(
  "secret_key"      => "sk_test_WOxLvHn71VzVGbyhgiBNy9Uw",
  "publishable_key" => "pk_test_gEYsLXBw5oBTQoHWHetdeJah"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
*/
define ("secret_key", "sk_test_WOxLvHn71VzVGbyhgiBNy9Uw");
define ("publishable_key", "pk_test_gEYsLXBw5oBTQoHWHetdeJah");
\Stripe\Stripe::setApiKey(secret_key);
define ("PRICE", 25);

?>

