<?php
namespace onepersongroup\hw5\configs;
//Base URL for website. Edit when needed.
define ("BASE_URL", "http://localhost/Hw4");

//MySql Constants. Edit when needed.
define ("SERVERNAME", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "Wlipa3135");
define ("DB", "hw5");

// Stripe configurations using test keys
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_WOxLvHn71VzVGbyhgiBNy9Uw",
  "publishable_key" => "pk_test_gEYsLXBw5oBTQoHWHetdeJah"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>

