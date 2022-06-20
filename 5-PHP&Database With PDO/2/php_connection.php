<?php





//Remove flight 
ini_set('display_errors','On');



/* Connect to PDO coonection 1 */

$server="127.0.0.1"; //server ip
$db="sakila"; //database Name
$username="root"; //Username
$password=""; //password
$conn=new PDO("mysql:host={$server};dbname={$db};port=3306",$username,$password); //create connection




/*Managing errors*/

/* Connect to PDO coonection 2 */
/*
try{
	
$db=new PDO('sqlite:./movies.db'); // conection with db using PDO object
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//error reporting ....
//var_dump($db); //Test the Result

die();// finish Hit run ~!;

}catch(Exception $e){
//echo 'error2';	
echo $e->getMessage();	
die();	
}

*/



?>