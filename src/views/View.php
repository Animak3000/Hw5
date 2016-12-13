<?php
namespace onepersongroup\hw5\views;
/**
* The View class renders html of the website.
*/
abstract class View{
    /**
    * Renders the landing page of the website
    * @param array $data array containing any information required for rendering
    */
    public abstract function render($data);
}
?>
