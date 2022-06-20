<?php



/* no more Duplications
$set_server="8080"; 
 $set_username="root"; 
 $set_password=""; 
 $set_Db_name="SkullTshrit"; 
 
*/

try {

 $c_coll= array('SERVER' =>"8080" ,'USERNAME'=>"root",'PASSWORD'=>"",'dbname'=>"SkullTOO" );
 $PDDN->query('SELECT * FROM SKULLHUB '); 
 var_dump($PDDN);  

} 
catch (Exception $th) {


    
}










?>