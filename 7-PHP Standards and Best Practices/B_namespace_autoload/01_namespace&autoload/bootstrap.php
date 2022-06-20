<?php
// to access to two or more class without including more 
// this function 
spl_autoload_register(
function($class){
 $class_path=str_replace('\\','/',$class);
 include __DIR__.'/src/'.$class_path.'.php';
});




?>