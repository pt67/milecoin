<?php
namespace milecoin;
include_once "vendor/autoload.php";
use DateTime;


class Determine{

public function canOver($a=''){
if($a < 500 || $a > 5000 ){
 return "value shoule between 500-5000";
    }

}

public function setTime($t=''){
$now = new DateTime($t);
return $now->format('d/m/y');

   }

}


?>


