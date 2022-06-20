<?php
echo '<pre>';
define("TITLE","PDO");


require_once('php_connection.php'); //inculde

$result=$conn->query('select * from movies '); // get queries from database

$mov=$result->fetchAll(PDO::FETCH_ASSOC); //  fethcAll:get everything from the Table , FETCH_ASSOC: return  array_indexes



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

foreach($mov as $r){

echo  '<li style=""> <a href=Profile_ID.php?id='.$r['ID'].'>'. $r['Movie_Title'] .'</a></li>';	

}

?>

</body>

</html>