<?php
namespace onepersongroup\hw5\controllers;
use \onepersongroup\hw5\views\landingview;
class landcontroller extends Controller{
    function __construct(){
        $data = array();
        $view = new landingview;
        $view->render($data);
    }
}
?>
