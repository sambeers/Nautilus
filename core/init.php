<?php
error_reporting(E_ALL);
date_default_timezone_set('America/Los_Angeles');
$F=array_diff(scandir($cd_."core/"),array('..','.'));
  foreach($F as $f){
    if($f!=="connect.php"&&$f!=="error_log"){//error logs are named differently depending on your host, if having problems try changing this variable.
    require_once $cd_."core/".$f;
    }
  }
require_once $cd_."core/connect.php";
