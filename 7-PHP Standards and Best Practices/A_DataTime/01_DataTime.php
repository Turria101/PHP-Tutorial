<?php


$date= new DateTime('2022 , March 2'); // Date Object  call Date
$date1= new DateTime('13-2-2022'); // another object Date Object  call Date
$date2= new DateTime('+2 weeks'); // another object Date Object  call Date
$date3= new DateTime('tomorrow'); // another object Date Object  call Date
$date4= new DateTime('next week'); // another object Date Object  call Date
echo $date->format('m/d/y') . "<br>";
echo $date1->format('m/d/y') . "<br>"; // as i make change
echo $date2->format('m/d/y') . "<br>"; // as i make change
echo $date3->format('d/m/y'); // as  i do (want) 
//echo $date4->format('d/m/y') . "<br>"; // as  i do (want) 


// another case

$raw = '8.12.1995';
$gemotic = DateTime::createFromFormat('m.d.Y',$raw);
echo $gemotic->format('m/d/Y'); // as  i do (want) 
?>
