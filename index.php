<?php
namespace onepersongroup\hw5;

require_once '/src/configs/Config.php';

// load composer
require_once 'vendor/autoload.php';

use \onepersongroup\hw5\configs\Config;
use \onepersongroup\hw5\controllers\landcontroller;

//Determine which controller to use.

new landcontroller;
?>
