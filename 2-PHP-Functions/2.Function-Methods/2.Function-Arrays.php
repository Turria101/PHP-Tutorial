
<?php



// methods  internal-function 'array'
$target =['1','dadas',3,3.3,];
echo count($target);
echo current($target);
echo next($target);
echo in_array('1',$target);
echo end($target);
echo reset($target);
echo rsort($target);
echo sort($target);
echo array_pop($target);
array_push($target,true);
array_push($target,false);
array_pop($target);
$s_test= "string%int%boolean%float%array";


// excute impolde 
$a =explode ("%",$s_test);
var_dump($a);
var_dump($a);
var_dump($a);

// excute   explode 
$break_array =[" i'm","Learning","PHP"];
$str_temp = implode(",", $break_array); 
var_dump($str_temp);


define("AGENT_Name","ESTELLA");
define("AGENT_AGE",22);


// array funco
$secret = array('A'=>AGENT_Name,'B'=>AGENT_AGE);
echo array_keys($secret);
function Pront($value,$key){

return "{$key}:{$value}"; 

}

print_r(array_walk($secret,'pront'));








?>