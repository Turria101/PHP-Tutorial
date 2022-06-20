<?php


interface Move{

public function GO($steps);


}

class Human implements Move{

public function Go($steps){
     
return "he is moved {$steps} steps";
}

}

$guy= new Human();
echo $guy->Go(6); 

?>