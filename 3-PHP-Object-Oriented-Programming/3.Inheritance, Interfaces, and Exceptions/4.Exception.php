<?php

try {
    
$name ="";
$setAr=['A'];
echo 2/0;

} catch (Exception  $e) {

 throw new Exception("Error Processing Request", 1);
  
echo $e->getMessage();
echo $e->getTrace();
echo $e->getFile();
echo $e->getCode();


}




?>
