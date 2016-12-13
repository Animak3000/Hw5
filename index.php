<?php
namespace onepersongroup\hw5;

//require_once '/src/configs/Config.php';

// load composer
require_once 'vendor/autoload.php';

use \onepersongroup\hw5\configs\Config;
use \onepersongroup\hw5\controllers\landcontroller;

//Determine which controller to use.

define ("BASE_URL", "http://localhost/Hw5");

//MySql Constants. Edit when needed.
define ("SERVERNAME", "localhost");
define ("USERNAME", "root");
define ("PASSWORD", "123456qwerty");
define ("DB", "hw5");

// Stripe configurations using test keys
define ("secret_key", "sk_test_WOxLvHn71VzVGbyhgiBNy9Uw");
define ("publishable_key", "pk_test_gEYsLXBw5oBTQoHWHetdeJah");
\Stripe\Stripe::setApiKey(secret_key);
define ("PRICE", 25);

new landcontroller;

?>
