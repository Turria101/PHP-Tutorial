<?php
echo '<pre>';
define("TITLE","PDO");


require_once('php_connection.php'); //inculde
	
if(!empty($_GET['id'])){

$get_id=$_GET['id'];
}

try{

$res=$conn->query("SELECT ID,Movie_Title FROM movies WHERE ID=".$get_id);

}catch(Exception $e)
{
	
$e->getMessage();	
DIE();
}


$storage=$res->fetch(PDO::FETCH_ASSOC);

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

echo '<h1 style="text-align:center;">'.$storage['Movie_Title'].'</h1>';

?>

</body>

</html>