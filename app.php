<?php
namespace milecoin;
include_once "vendor/autoload.php";
use DateTime;


class Determine{
//balancer
public function canOver($a=''):string{
if($a < 500 || $a > 5000 ){
 return "value shoule between 500-5000";
    }

}

//('2021/01/02')
public function setTime($t=''):string{
$now = new DateTime($t);
return $now->format('d/m/y');

}

//inhouse/company
public function getWorkframe($frame=''):string{
return $frame;
}


//category { category may be any kind from array }
public function getCategory($a):array{
return $a;   
}

//strength {strengh is measured on 0-100}
public function setStrength($r):int{

if(!is_numeric($r) || $r > 100){
   return 500;
    }else{
   return $r;
  }
}


//determinde duration
public function setValidation($val){
 if(intval($val) > 30){
  return "Expired";
 }else{
   return "Must be Number";
 }
}



}


print_r(Determine::setValidation(3000));

/*

timing
work
balance
category
strength
validate

*/


?>


