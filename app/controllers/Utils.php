<?php

class Utils extends Controller {

    /**
     * Cleanup Input Post global array and return
     * @var array
    */
    static function getInput($input = array()) {
      $input = empty($input) ? $_POST : $input;
      foreach ($input as &$param) {
        if(is_array($param)) {
          self::getInput($param);
        } else {
          self::cleanup($param);
        }
      }
      return $input;
    }

    static function cleanup (&$param) {
      $param = htmlspecialchars($param, ENT_IGNORE, 'utf-8');
      $param = strip_tags($param);
      $param = stripslashes($param);
    }
}