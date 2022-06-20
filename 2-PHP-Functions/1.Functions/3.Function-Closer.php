<?php





//function closer : outside the scope

$Guest ="Someone";
$Greet =function()use($Guest){

return "Hello{$Guest}";

};
echo $Greet();







?>