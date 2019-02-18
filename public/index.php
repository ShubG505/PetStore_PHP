<?php

require_once '../app/start.php';


function my_autoloader($class) {
  if (file_exists(__DIR__ .'/../app/controllers/' . $class . '.php')) {
    include __DIR__ . '/../app/controllers/' . $class . '.php';
  }

  if (file_exists(__DIR__ .'/../app/models/' . $class . '.php')) {
    include __DIR__ . '/../app/models/' . $class . '.php';
  }
}
spl_autoload_register('my_autoloader');


$app = new App();