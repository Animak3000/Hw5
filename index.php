<?php
namespace onepersongroup\hw5;

//require_once '/src/configs/Config.php';

// load composer
require_once 'vendor/autoload.php';

use \onepersongroup\hw5\configs\Config;
use \onepersongroup\hw5\controllers\landcontroller;

//Determine which controller to use.

define ("BASE_URL", "http://localhost/Hw4");

//MySql Constants. Edit when needed.
define ("SERVERNAME", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "123456qwerty");
define ("DB", "hw5");

$stripe = array(
  "secret_key"      => "sk_test_WOxLvHn71VzVGbyhgiBNy9Uw",
  "publishable_key" => "pk_test_gEYsLXBw5oBTQoHWHetdeJah"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);

new landcontroller;

?>
