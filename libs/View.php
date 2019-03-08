<?php

class View {

  /**
   * [render description]
   * @param  [type]  $name [description]
   * @param  boolean $arg  [description]
   * @return [type]        [description]
   */
  public function render($name, $arg = false) {
    include "views/".$name.".php";
  }
}

?>
