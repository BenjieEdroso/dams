<?php

  require_once 'config/config.php';
  require_once 'helpers/url_redirect.php';
  require_once 'helpers/data_unset.php';
  // Load Libraries
  spl_autoload_register(function($className){
    require_once 'libraries/'.$className.'.php';
  });
