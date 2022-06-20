<?php

class Whatis{
 
 protected  static $keywords="";
 
 function Say_Somthing($H){
  
   return self::$keywords=$H;
 } 


}


$ik= new Whatis();
 echo  $ik::Say_Somthing(" <strong style='color:green;font-size:100px;'>Hi There </strong><br>");
 echo $ik->Say_Somthing("<strong style='color:red;font-size:100px;'>Hi Mike</strong>"); 
?>