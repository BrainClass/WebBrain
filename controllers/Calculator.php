<?php

//use mysite\libs\Controller;

class Calculator extends Controller {

  public function __construct() {
    parent::__construct();
  }

  /**
   * [index description]
   * @return [type] [description]
   */
  public function index() {
    $post = $_POST;
    if(isset($post["submit"])) {
      $value1 = $post["value1"];
      $value2 = $post["value2"];
      if($post["operation"] == "+") {
        $this->otvet = $value1 + $value2;
      }elseif($post["operation"] == "-") {
        $this->otvet = $value1 - $value2;
      }elseif($post["operation"] == "/") {
        $this->otvet = $value1 / $value2;
      }elseif($post["operation"] == "*") {
        $this->otvet = $value1 * $value2;
      }elseif($post["operation"] == "%") {
        $this->otvet = $value1 % $value2;
      }
    }
    $this->view->render("index", $this->otvet);
  }
}

?>
