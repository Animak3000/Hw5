<?php
namespace onepersongroup\hw5\controllers;
use \onepersongroup\hw5\views\landingview;
/**
* Land controller of the website landing page.
*/
class landcontroller extends Controller{
    /**
    * Constructs the controller.
    */
    function __construct(){
        $data = array();
        $view = new landingview;
        $view->render($data);
    }
}
?>
