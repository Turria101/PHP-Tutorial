<?php

 // comparing Ages
$son1= new DateTime('August 1,1995');
$son2= new DateTime('March 1,1993');


//compare two-numbers about year
if ($son1 < $son2) {
  echo "son1 is older than son2";
}
else
{
echo "son2 is older than son1";
}



// diff : give full diff by m , y ,d 

$diff = $son1->diff($son2);
echo $diff->format(' per  / Year: %y ,Month : %m , Days :%d');








 ?>
