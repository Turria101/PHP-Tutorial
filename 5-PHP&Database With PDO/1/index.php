<?php
define("TITLE","PDO");
//Remove flight 
ini_set('display_errors','On');

/* Connect to PDO */

$db=new PDO('sqlite:./db/app.db'); // conection with db using PDO object



/*Managing errors*/
try{
$db=new PDO('sqlite:./db/app.db'); // conection with db using PDO object
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//error reporting ....
var_dump($db); //Test the Result
die();// finish Hit run ~!;

}catch(Exception $e){
//echo 'error2';	
echo $e->getMessage();	
die();	
}

?>

<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8" content="typr/text">
<meta http-equiv="x-ua-compatible" content="IE=EDGE">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title> <?php echo TITLE ?> </title>
<link href="" rel="">
</head>

<body>



</body>

</html>