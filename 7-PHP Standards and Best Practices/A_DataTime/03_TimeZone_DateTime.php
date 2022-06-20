<?php

$utc = new DateTime('2022-3-21 17:45',new DateTimeZone('UTC'));

$cpy = clone $utc;

$cpy->setTimeZone(new DateTimeZone('Africa/Cairo'));


echo 'UTC :'.$utc->format('Y-m-d H:i:s')."<br>";
echo 'Cairo : '.$cpy->format('Y-m-d H:i:s');




?>