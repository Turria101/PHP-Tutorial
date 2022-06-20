<?php
echo '<pre>';
define("TITLE","PDO");


require_once('php_connection.php'); //inculde
	
if(!empty($_GET['id'])){ //clean up

$get_id=intval($_GET['id']);//coverte keywords to numbers to revok SQL-Enjections

try{

$res=$conn->prepare("SELECT ID,Movie_Title FROM movies WHERE ID= ? "); //revok SQL-Enjection
$res->bindParam(1,$get_id); //one index  - one Q-mark
$res->execute(); //final Step;
}catch(Exception $e)
{
	
$e->getMessage();	
die();
}


$storage=$res->fetch(PDO::FETCH_ASSOC);
if($storage==FALSE){
	
echo '<h1 style="text-align:center;"> No movie have been founded </h1>'; 	

die();
}

}else
{
echo "somthing bad it's happen your {$_POST['id']} is {null}";	
	
}

?>


<!DOCTYPE HTML>

<html>
<head>
<meta charset="utf-8" content="type/text">
<meta http-equiv="x-ua-compatible" content="IE=EDGE">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title> <?php echo TITLE ?> </title> 
<link href="" rel="">
</head>

<body>

<?php 
if(isset($storage)){
	
echo '<h1 style="text-align:center;">'.$storage['Movie_Title'].'</h1>';
	
}
else
{
echo "<h1> error there's no movie with this ID </h1>";	

}

?>

</body>

</html>