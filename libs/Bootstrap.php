<?php

class Bootstrap {

  public function __construct() {
    $url = $_GET["url"];
    $url = explode("/", $url);
    if(empty($url[0])) {
      include "controllers/Calculator.php";
      $controller = new Calculator;
      $controller->index();
    }else{
      $path = "controllers/".$url[0].".php";
      if(file_exists($path)) {
        include $path;
        $controller = new $url[0];
        $controller->index();
      }else{
        include "controllers/Calculator.php";
        echo "Page ".$url[0]." not found";
        @$controller = new Calculator;
      }
    }
  }
}

 ?>
