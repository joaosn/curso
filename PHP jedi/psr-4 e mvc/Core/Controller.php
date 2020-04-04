<?php
namespace Core;

class Controller {
  
    public function loadView($viewName, $viewData = array()) {
    	extract($viewData);
       require 'Views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
    	require'Views/template.php';
    }

    public function loadViewinTemplate($viewName, $viewData = array()) {
    	extract($viewData);
    	require 'Views/'.$viewName.'.php';
    }
}

?>